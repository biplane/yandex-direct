<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap\TypeConverter;

use BadMethodCallException;
use Biplane\YandexDirect\Soap\DisableEncoder;
use Biplane\YandexDirect\Soap\TypeConverter;
use Override;

use function array_map;
use function preg_match_all;
use function str_contains;

/** @implements TypeConverter<list<float>|null> */
final class ArrayOfLongTypeTypeConverter implements TypeConverter, DisableEncoder
{
    public function __construct(private string $namespace)
    {
    }

    #[Override]
    public function getTypeNamespace(): string
    {
        return $this->namespace;
    }

    #[Override]
    public function getTypeName(): string
    {
        return 'ArrayOfLong';
    }

    #[Override]
    public function fromXml(string $xml): mixed
    {
        if (str_contains($xml, 'xsi:nil="true"')) {
            return null;
        }

        if ($xml !== '' && preg_match_all('/<Items>([^<]+)<\/Items>/u', $xml, $m) !== false) {
            return array_map('floatval', $m[1]);
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function toXml($data): string
    {
        throw new BadMethodCallException('Not implemented');
    }
}
