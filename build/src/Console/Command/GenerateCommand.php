<?php

declare(strict_types=1);

namespace Biplane\Build\Console\Command;

use Biplane\Build\Code\ServiceGenerator;
use Biplane\Build\Code\TypeGenerator;
use Biplane\Build\Config\Config;
use Biplane\Build\Config\ServiceConfig;
use Biplane\Build\Model\ModelFactory;
use Laminas\Code\DeclareStatement;
use Laminas\Code\Generator\FileGenerator;
use Override;
use Soap\Wsdl\Loader\StreamWrapperLoader;
use Soap\Wsdl\Loader\WsdlLoader;
use Soap\WsdlReader\Metadata\Wsdl1MetadataProvider;
use Soap\WsdlReader\Wsdl1Reader;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Filesystem\Filesystem;

use function dirname;

#[AsCommand('generate', 'Generate contracts from WSDL')]
final class GenerateCommand extends Command
{
    private WsdlLoader $loader;
    private Filesystem $fs;

    public function __construct(WsdlLoader|null $loader = null, Filesystem|null $filesystem = null)
    {
        parent::__construct();

        $this->loader = $loader ?? new StreamWrapperLoader();
        $this->fs = $filesystem ?? new Filesystem();
    }

    #[Override]
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $config = $this->loadConfig();

        foreach ($config->services as $service) {
            $this->generateService($service, $config, $io);
        }

        return self::SUCCESS;
    }

    private function generateService(ServiceConfig $serviceConfig, Config $config, SymfonyStyle $io): void
    {
        $io->info('Generating client for WSDL: ' . $serviceConfig->wsdl);

        $wsdl = (new Wsdl1Reader($this->loader))($serviceConfig->wsdl);

        $metadataProvider = new Wsdl1MetadataProvider($wsdl);
        $metadata = $metadataProvider->getMetadata();

        $model = (new ModelFactory($config->schemaNamespaceMap, $config->renameTypes))
            ->create($metadata, $serviceConfig);

        $file = (new FileGenerator())
            ->setDeclares([
                DeclareStatement::strictTypes(1),
            ])
            ->setFilename($serviceConfig->serviceName . '.php');

        (new ServiceGenerator())->generate($file, $model);

        $this->fs->dumpFile(
            $config->resolvePathForNamespace($model->namespace) . '/' . $file->getFilename(),
            $file->generate(),
        );

        foreach ($model->types as $type) {
            $file = (new FileGenerator())
                ->setDeclares([
                    DeclareStatement::strictTypes(1),
                ])
                ->setFilename($type->name . '.php');

            (new TypeGenerator())->generate($file, $type);

            $this->fs->dumpFile(
                $config->resolvePathForNamespace($type->namespace) . '/' . $file->getFilename(),
                $file->generate(),
            );
        }

        $io->success('Generation is complete');
    }

    private function loadConfig(): Config
    {
        $config = include dirname(__DIR__, 3) . '/config.php';

        return Config::type()->coerce($config);
    }
}
