<?php

namespace Biplane\Build\Wsdl2Php;

use Biplane\Build\Wsdl2Php\Contract\AbstractType;
use Biplane\Build\Wsdl2Php\Contract\GeneratorInterface as ContractGeneratorInterface;
use Biplane\Build\Wsdl2Php\Contract\ServiceType;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Wsdl2PhpGenerator\ConfigInterface;
use Wsdl2PhpGenerator\GeneratorInterface;
use Wsdl2PhpGenerator\Xml\TypeNode;
use Wsdl2PhpGenerator\Xml\WsdlDocument;
use Zend\Code\Generator\FileGenerator;

class Generator implements GeneratorInterface
{
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

        if (empty($options['features'])
            || (($options['features'] & SOAP_SINGLE_ELEMENT_ARRAYS) != SOAP_SINGLE_ELEMENT_ARRAYS)
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

    private function loadTypes(WsdlDocument $wsdl, ConfigInterface $config)
    {
        $this->logger->info('Loading types...');

        $excludedTypes = $config->get('excludeTypes');
        $namespace = $config->get('namespaceName') . '\\Contract';
        $renameType = $config->get('renameType');
        $types = [];

        /** @var TypeNode $node */
        foreach ($wsdl->getTypes() as $node) {
            if (in_array($node->getName(), $excludedTypes) || isset($types[$node->getName()])) {
                continue;
            }

            if ($node->isComplex()) {
                if ($node->isArray()) {
                    $type = new Contract\ArrayType($node, $renameType($node->getName()), $namespace);
                } else {
                    $type = new Contract\ComplexType($node, $renameType($node->getName()), $namespace);
                }

                $types[$node->getName()] = $type;
            } elseif (count($node->getEnumerations()) > 0) {
                $types[$node->getName()] = new Contract\EnumType($node, $renameType($node->getName()), $namespace);
            }
        }

        $this->logger->info('Done loading types.');

        return $types;
    }

    private function loadService(WsdlDocument $wsdl, ConfigInterface $config)
    {
        $service = $wsdl->getService();

        $this->logger->info('Starting to load service', [
            'service' => $service->getName(),
        ]);

        $serviceType = new Contract\ServiceType(
            $service,
            $config->get('inputFile'),
            $config->get('namespaceName')
        );

        $excludeOperations = $config->get('excludeOperations');

        foreach ($wsdl->getOperations() as $operation) {
            if (in_array($operation->getName(), $excludeOperations)) {
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

    private function save(ServiceType $service, array $types, ConfigInterface $config)
    {
        $typeResolver = new PhpTypeResolver($types);

        $baseDir = $this->ensureExistDir($config->get('outputDir'));
        $nsPrefix = $config->get('namespaceName');

        $this->writeFile($service, $typeResolver, $nsPrefix, $baseDir);

        foreach ($types as $type) {
            $this->writeFile($type, $typeResolver, $nsPrefix, $baseDir);
        }
    }

    private function ensureExistDir($dir)
    {
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0777, true)) {
                throw new \RuntimeException(sprintf('Could not create directory "%s" and it does not exist!', $dir));
            }
        }

        return realpath($dir);
    }

    private function writeFile(AbstractType $type, PhpTypeResolver $typeResolver, $namespacePrefix, $basePath)
    {
        if ($type instanceof ContractGeneratorInterface) {
            $qcn = ClassNameUtil::qualifiedClassName($type->getPhpIdentifier(), $namespacePrefix);

            $generator = new FileGenerator();
            $generator->setClass($type->generate($typeResolver));
            $generator->setFilename($basePath . '/' . str_replace('\\', '/', $qcn) . '.php');

            $this->ensureExistDir(dirname($generator->getFilename()));
            $generator->write();
        }
    }
}
