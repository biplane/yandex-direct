<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap\TypeConverter;

use Biplane\YandexDirect\Soap\TypeConverter;

use function preg_match;
use function sprintf;

final class DecimalTypeConverter implements TypeConverter
{
    public function getTypeNamespace(): string
    {
        return 'http://www.w3.org/2001/XMLSchema';
    }

    public function getTypeName(): string
    {
        return 'decimal';
    }

    /**
     * {@inheritDoc}
     */
    public function fromXml(string $xml)
    {
        if (preg_match('@^<([^>]+)>(?<content>.+)</\\1>$@', $xml, $m)) {
            return (float)$m['content'];
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function toXml($data): string
    {
        return sprintf('<%1$s>%2$s</%1$s>', $this->getTypeName(), $data);
    }
}
