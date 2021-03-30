<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php;

use Biplane\Build\Wsdl2Php\Contract\AbstractDataType;
use Biplane\Build\Wsdl2Php\Contract\AbstractType;
use Biplane\Build\Wsdl2Php\Contract\GeneratorInterface as ContractGeneratorInterface;
use Biplane\Build\Wsdl2Php\Contract\ServiceType;
use Laminas\Code\Generator\FileGenerator;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Wsdl2PhpGenerator\ConfigInterface;
use Wsdl2PhpGenerator\GeneratorInterface;
use Wsdl2PhpGenerator\Xml\ServiceNode;
use Wsdl2PhpGenerator\Xml\WsdlDocument;

class Generator implements GeneratorInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct()
    {
        $this->logger = new NullLogger();
    }

    public function generate(ConfigInterface $config)
    {
        $this->logger->info('Starting generation...');

        // Warn users who have disabled SOAP_SINGLE_ELEMENT_ARRAYS.
        // Note that this can be
        $options = $config->get('soapClientOptions');

        if (
            empty($options['features'])
            || (($options['features'] & SOAP_SINGLE_ELEMENT_ARRAYS) !== SOAP_SINGLE_ELEMENT_ARRAYS)
        ) {
            $message = 'SoapClient option feature SOAP_SINGLE_ELEMENT_ARRAYS is not set.' .
                ' This is not recommended as data types in DocBlocks for array properties will not be' .
                ' valid if the array only contains a single value.';
            $this->logger->warning($message);
        }

        $wsdl = new WsdlDocument($config, $config->get('inputFile'));

        $types = $this->loadTypes($wsdl, $config);
        $service = $this->loadService($wsdl, $config);

        $this->save($service, $types, $config);

        $this->logger->info('Generation complete.');
    }

    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return array<string, AbstractDataType>
     */
    private function loadTypes(WsdlDocument $wsdl, ConfigInterface $config): array
    {
        $this->logger->info('Loading types...');

        $excludedTypes = $config->get('excludeTypes');
        $namespace = $config->get('namespaceName') . '\\Contract';
        $renameType = $config->get('renameType');
        $types = [];

        foreach ($wsdl->getTypes() as $node) {
            if (isset($types[$node->getName()]) || in_array($node->getName(), $excludedTypes, true)) {
                continue;
            }

            $classname = Inflector::classify($renameType($node->getName()));

            if ($node->isComplex()) {
                if ($node->isArray()) {
                    $type = new Contract\ArrayType($node, $classname, $namespace);
                } else {
                    $type = new Contract\ComplexType($node, $classname, $namespace);
                }

                $types[$node->getName()] = $type;
            } elseif (count($node->getEnumerations()) > 0) {
                $types[$node->getName()] = new Contract\EnumType($node, $classname, $namespace);
            }
        }

        $this->logger->info('Done loading types.');

        return $types;
    }

    private function loadService(WsdlDocument $wsdl, ConfigInterface $config): Contract\ServiceType
    {
        $service = $wsdl->getService();
        assert($service instanceof ServiceNode);

        $this->logger->info('Starting to load service', [
            'service' => $service->getName(),
        ]);

        $serviceType = new Contract\ServiceType(
            Inflector::classify($service->getName()),
            $config->get('inputFile'),
            $config->get('namespaceName')
        );

        $excludeOperations = $config->get('excludeOperations');

        foreach ($wsdl->getOperations() as $operation) {
            if (in_array($operation->getName(), $excludeOperations, true)) {
                $this->logger->notice('Operation is ignored.', [
                    'operation' => $operation->getName(),
                ]);

                continue;
            }

            $this->logger->info('Loading operation...', [
                'operation' => $operation->getName(),
            ]);
            $serviceType->addOperation($operation);
        }

        $this->logger->info('Done loading service.', [
            'service' => $service->getName(),
        ]);

        return $serviceType;
    }

    /**
     * @param array<AbstractDataType> $types
     */
    private function save(ServiceType $service, array $types, ConfigInterface $config): void
    {
        $typeResolver = new PhpTypeResolver($types);

        $baseDir = $config->get('outputDir');
        $nsPrefix = $config->get('namespaceName');

        $this->ensureDirectoryExists($baseDir);

        $this->writeFile($service, $typeResolver, $nsPrefix, $baseDir);

        foreach ($types as $type) {
            $this->writeFile($type, $typeResolver, $nsPrefix, $baseDir);
        }
    }

    private function ensureDirectoryExists(string $path): void
    {
        if (!is_dir($path) && !@mkdir($path, 0750, true)) {
            throw new \RuntimeException(sprintf(
                'Directory does not exist and cannot be created: %s.',
                $path
            ));
        }

        if (!is_writable($path)) {
            throw new \RuntimeException(sprintf('Directory is not writable: %s.', $path));
        }
    }

    private function writeFile(
        AbstractType $type,
        PhpTypeResolver $typeResolver,
        string $namespacePrefix,
        string $basePath
    ): void {
        if ($type instanceof ContractGeneratorInterface) {
            $qcn = ClassNameUtil::qualifiedClassName($type->getPhpIdentifier(), $namespacePrefix);

            $generator = new FileGenerator();
            $generator->setClass($type->generate($typeResolver));
            $generator->setFilename($basePath . '/' . str_replace('\\', '/', $qcn) . '.php');

            $this->ensureDirectoryExists(dirname($generator->getFilename()));
            $generator->write();
        }
    }
}
