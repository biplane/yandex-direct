<?php

declare(strict_types=1);

namespace Biplane\Build\Model;

use Biplane\Build\Util\Normalizer;
use Psl\Type;
use Soap\Engine\Metadata\Model\XsdType;

use function addcslashes;
use function array_map;
use function implode;
use function sprintf;

final readonly class TypeDescriptor
{
    /**
     * @param non-empty-string      $name
     * @param non-empty-string|null $namespace
     */
    public function __construct(public string $name, public string|null $namespace, private XsdType $xsdType)
    {
    }

    public function isArray(): bool
    {
        return $this->xsdType->getMeta()->isList()->unwrapOr(false);
    }

    public function isNullable(): bool
    {
        return $this->xsdType->getMeta()->isNullable()->unwrapOr(false);
    }

    public function isEnum(): bool
    {
        return $this->xsdType->getMeta()->enums()->isSome();
    }

    /** @return non-empty-string */
    public function getFQN(): string
    {
        if ($this->namespace === null) {
            return $this->name;
        }

        return '\\' . $this->namespace . '\\' . $this->name;
    }

    /** @return non-empty-string */
    public function asDocBlockType(): string
    {
        $result = $this->getFQN();

        if ($this->isEnum()) {
            $result = Type\non_empty_string()->assert(
                implode('|', array_map(
                    static fn (string $value): string => sprintf("'%s'", addcslashes($value, "'")),
                    $this->xsdType->getMeta()->enums()->unwrap(),
                )),
            );
        }

        if ($this->isArray()) {
            $listType = $this->xsdType->getMeta()->minOccurs()->unwrapOr(1) > 0 ? 'non-empty-list' : 'list';

            $result = sprintf('%s<%s>', $listType, $result);
        }

        if ($this->isNullable()) {
            $result .= '|null';
        }

        return $result;
    }

    /** @return non-empty-string */
    public function asPhpType(): string
    {
        $types = [];

        if ($this->isArray()) {
            $types[] = 'array';
        } elseif ($this->isEnum()) {
            $types[] = Normalizer::isKnownType($this->xsdType->getBaseType())
                ? $this->xsdType->getBaseType()
                : 'mixed';
        } else {
            $types[] = $this->getFQN();
        }

        if ($this->isNullable()) {
            $types[] = 'null';
        }

        return implode('|', $types);
    }
}
