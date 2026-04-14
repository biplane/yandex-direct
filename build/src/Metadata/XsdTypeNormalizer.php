<?php

declare(strict_types=1);

namespace Biplane\Build\Metadata;

use Biplane\Build\Util\Normalizer;
use Psl\Str;
use Psl\Type;
use Soap\Engine\Metadata\Model\TypeMeta;
use Soap\Engine\Metadata\Model\XsdType;

final class XsdTypeNormalizer
{
    public function __invoke(XsdType $type): XsdType
    {
        if ($type->getXmlNamespace() === 'http://api.direct.yandex.com/v5/general') {
            if ($type->getName() === 'ArrayOfLong') {
                return $this->normalizeArrayTypeFromGeneralSchema($type, 'long');
            }

            if ($type->getName() === 'ArrayOfInteger') {
                return $this->normalizeArrayTypeFromGeneralSchema($type, 'integer');
            }

            if ($type->getName() === 'ArrayOfString') {
                return $this->normalizeArrayTypeFromGeneralSchema($type, 'string');
            }
        }

        if ($type->getBaseType() === 'array' && $type->getMeta()->arrayType()->isSome()) {
            $arrayType = $type->getMeta()->arrayType()->unwrap();

            $itemType = Normalizer::normalizeType(
                Type\non_empty_string()->assert(
                    Str\after($arrayType['itemType'], ':') ?? $arrayType['itemType'],
                ),
            );

            return $type
                ->copy($itemType)
                ->withXmlNamespace($arrayType['namespace'])
                ->withMemberTypes([])
                ->withMeta(static fn (TypeMeta $meta): TypeMeta => $meta->withArrayType(null));
        }

        return $type;
    }

    /** @param non-empty-string $itemTypeName */
    private function normalizeArrayTypeFromGeneralSchema(XsdType $type, string $itemTypeName): XsdType
    {
        return $type
            ->copy($itemTypeName)
            ->withBaseType('array')
            ->withXmlNamespace('http://www.w3.org/2001/XMLSchema')
            ->withMeta(
                static fn (TypeMeta $meta): TypeMeta => $meta
                    ->withIsList(true)
                    ->withMinOccurs(1)
                    ->withMaxOccurs(-1)
                    ->withArrayType(null),
            );
    }
}
