<?php

declare(strict_types=1);

namespace Biplane\Build\Model;

use Biplane\Build\Config\ServiceConfig;
use Biplane\Build\Metadata\XsdTypeNormalizer;
use Biplane\Build\Util\Normalizer;
use LogicException;
use Psl\Option\Option;
use Psl\Vec;
use Soap\Engine\Metadata\Collection\TypeCollection;
use Soap\Engine\Metadata\Metadata;
use Soap\Engine\Metadata\Model\Method as MetadataMethod;
use Soap\Engine\Metadata\Model\Property as MetadataProperty;
use Soap\Engine\Metadata\Model\Type as MetadataType;
use Soap\Engine\Metadata\Model\XsdType;

use function in_array;
use function Psl\Type\non_empty_string;
use function sprintf;

final class ModelFactory
{
    private XsdTypeNormalizer $xsdTypeNormalizer;

    /**
     * @param array<non-empty-string, non-empty-string>                          $schemaNamespaceMap
     * @param array<non-empty-string, array<non-empty-string, non-empty-string>> $renameTypeMap
     */
    public function __construct(private array $schemaNamespaceMap, private array $renameTypeMap)
    {
        $this->xsdTypeNormalizer = new XsdTypeNormalizer();
    }

    public function create(Metadata $metadata, ServiceConfig $config): Service
    {
        $methods = Vec\filter(
            $metadata->getMethods(),
            static fn (MetadataMethod $method): bool => ! in_array($method->getName(), $config->excludeOperations, strict: true),
        );

        $seenTypeMap = [];

        $methods = Vec\map(
            $methods,
            function (MetadataMethod $method) use ($metadata, &$seenTypeMap) {
                return $this->processMethod($method, $metadata->getTypes(), $seenTypeMap);
            },
        );

        return new Service(
            wsdl: $config->wsdl,
            name: $config->serviceName,
            namespace: $config->namespace,
            types: $this->createTypes($seenTypeMap),
            methods: $methods,
        );
    }

    /** @param array<non-empty-string, MetadataType> &$seenTypeMap */
    private function processMethod(MetadataMethod $method, TypeCollection $types, array &$seenTypeMap): ServiceMethod
    {
        $parameters = [];

        foreach ($method->getParameters() as $param) {
            $xsdType = $param->getType();

            $this->processType($xsdType, $types, $seenTypeMap);

            $parameters[] = new Parameter(
                name: Normalizer::normalizeParameterName(non_empty_string()->assert($param->getName())),
                type: $this->createTypeDescriptor($xsdType),
            );
        }

        $this->processType($method->getReturnType(), $types, $seenTypeMap);

        return new ServiceMethod(
            name: Normalizer::normalizeMethodName(non_empty_string()->assert($method->getName())),
            parameters: $parameters,
            returnType: $this->createTypeDescriptor($method->getReturnType()),
            metadata: $method,
        );
    }

    /** @param array<non-empty-string, MetadataType> &$seenTypeMap */
    private function processType(XsdType $xsdType, TypeCollection $types, array &$seenTypeMap): void
    {
        $normXsdType = ($this->xsdTypeNormalizer)($xsdType);

        $normType = $this->normalizeTypeName($normXsdType);

        if (Normalizer::isKnownType($normType)) {
            return;
        }

        $key = $xsdType->getXmlNamespace() . ':' . $normXsdType->getName();

        if (isset($seenTypeMap[$key])) {
            return;
        }

        $seenTypeMap[$key] = $type = $types->fetchByNameAndXmlNamespace($normXsdType->getName(), $normXsdType->getXmlNamespace());

        foreach ($type->getProperties() as $property) {
            $this->processType($property->getType(), $types, $seenTypeMap);
        }

        $this->resolveBaseType($normXsdType)->apply(function (array $ref) use ($types, &$seenTypeMap): void {
            $this->processType(
                $types->fetchByNameAndXmlNamespace($ref['type'], $ref['namespace'])->getXsdType(),
                $types,
                $seenTypeMap,
            );
        });
    }

    private function createTypeDescriptor(XsdType $type): TypeDescriptor
    {
        $normType = ($this->xsdTypeNormalizer)($type);
        $normTypeName = $this->normalizeTypeName($normType);

        return new TypeDescriptor(
            name: $normTypeName,
            namespace: Normalizer::isKnownType($normTypeName) ? null : $this->resolveNamespace($normType),
            xsdType: $normType,
        );
    }

    /**
     * @param array<non-empty-string, MetadataType> $metadataTypes
     *
     * @return list<Type>
     */
    private function createTypes(array $metadataTypes): array
    {
        $result = [];

        foreach ($metadataTypes as $metadata) {
            $result[] = new Type(
                name: Normalizer::normalizeClassName($this->normalizeTypeName($metadata->getXsdType())),
                namespace: $this->resolveNamespace($metadata->getXsdType()),
                properties: $metadata->getProperties()->map(fn (MetadataProperty $property): Property => new Property(
                    name: non_empty_string()->assert($property->getName()),
                    type: $this->createTypeDescriptor($property->getType()),
                    xsdType: $property->getType(),
                )),
                baseType: $this->resolveBaseType($metadata->getXsdType())
                    ->map(function (array $ref) use ($metadataTypes): TypeDescriptor {
                        $key = $ref['namespace'] . ':' . $ref['type'];
                        $baseType = $metadataTypes[$key] ?? throw new LogicException(sprintf('Base type not found by key "%s"', $key));

                        return $this->createTypeDescriptor($baseType->getXsdType());
                    })->unwrapOr(null),
                xsdType: $metadata->getXsdType(),
            );
        }

        return $result;
    }

    /** @return non-empty-string */
    private function resolveNamespace(XsdType $type): string
    {
        return $this->schemaNamespaceMap[$type->getXmlNamespace()] ?? throw new LogicException(sprintf('Could not resolve namespace. No mapping for schema "%s"', $type->getXmlNamespace()));
    }

    /** @return Option<array{type: non-empty-string, namespace: non-empty-string, isSimple?: bool}> */
    private function resolveBaseType(XsdType $type): Option
    {
        if ($type->getBaseType() === 'array') {
            return Option::none();
        }

        return $type->getMeta()->extends()->filter(static fn (array $data): bool => ! ($data['isSimple'] ?? false));
    }

    /** @return non-empty-string */
    private function normalizeTypeName(XsdType $type): string
    {
        return $this->renameTypeMap[$type->getXmlNamespace()][$type->getName()]
            ?? Normalizer::normalizeType(non_empty_string()->assert($type->getName()));
    }
}
