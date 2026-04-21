<?php

declare(strict_types=1);

namespace Biplane\Build\Model;

use Soap\Engine\Metadata\Model\XsdType;

use function count;

final readonly class Type
{
    /**
     * @param non-empty-string $name
     * @param non-empty-string $namespace
     * @param list<Property>   $properties
     */
    public function __construct(public string $name, public string $namespace, public array $properties, public TypeDescriptor|null $baseType, private XsdType $xsdType)
    {
    }

    public function getXsdTypeName(): string
    {
        if ($this->xsdType->getBaseType() === 'array') {
            return $this->xsdType->getMemberTypes()[0] ?? $this->xsdType->getName();
        }

        return $this->xsdType->getName();
    }

    /** @return non-empty-string */
    public function getFQN(): string
    {
        return $this->namespace . '\\' . $this->name;
    }

    public function isEnum(): bool
    {
        return count($this->properties) === 0 && $this->xsdType->getMeta()->enums()->isSome();
    }

    /** @return array<mixed> */
    public function getEnumValues(): array
    {
        return $this->xsdType->getMeta()->enums()->unwrapOr([]);
    }
}
