<?php

declare(strict_types=1);

namespace Biplane\Build\Model;

use Soap\Engine\Metadata\Model\XsdType;

final readonly class Property
{
    /** @param non-empty-string $name */
    public function __construct(public string $name, public TypeDescriptor $type, private XsdType $xsdType)
    {
    }

    public function canBeOmitted(): bool
    {
        return $this->xsdType->getMeta()->minOccurs()->unwrapOr(1) === 0;
    }

    public function isArray(): bool
    {
        return $this->xsdType->getMeta()->isList()->unwrapOr(false);
    }

    public function isNullable(): bool
    {
        return $this->xsdType->getMeta()->isNullable()->unwrapOr(false);
    }

    /** @return non-empty-string */
    public function asDocBlockType(): string
    {
        return $this->type->asDocBlockType();
    }

    /** @return non-empty-string */
    public function asPhpType(): string
    {
        return $this->type->asPhpType();
    }
}
