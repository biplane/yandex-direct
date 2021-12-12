<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap\TypeConverter;

use BadMethodCallException;
use Biplane\YandexDirect\Soap\DisableEncoder;
use Biplane\YandexDirect\Soap\TypeConverter;

use function preg_match_all;

class ArrayOfStringTypeConverter implements TypeConverter, DisableEncoder
{
    /** @var string */
    private $namespace;

    public function __construct(string $namespace)
    {
        $this->namespace = $namespace;
    }

    public function getTypeNamespace(): string
    {
        return $this->namespace;
    }

    public function getTypeName(): string
    {
        return 'ArrayOfString';
    }

    /**
     * {@inheritDoc}
     */
    public function fromXml(string $xml)
    {
        if ($xml !== '' && preg_match_all('/<Items>([^<]+)<\/Items>/u', $xml, $m)) {
            return $m[1];
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function toXml($data): string
    {
        throw new BadMethodCallException('Not implemented');
    }
}
