<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap\TypeConverter;

use Biplane\YandexDirect\Soap\TypeConverter;
use Override;

use function preg_match;
use function sprintf;

/** @implements TypeConverter<float|null> */
final class DecimalTypeConverter implements TypeConverter
{
    #[Override]
    public function getTypeNamespace(): string
    {
        return 'http://www.w3.org/2001/XMLSchema';
    }

    #[Override]
    public function getTypeName(): string
    {
        return 'decimal';
    }

    #[Override]
    public function fromXml(string $xml): mixed
    {
        if (preg_match('@^<([^>]+)>(?<content>.+)</\\1>$@', $xml, $m)) {
            return (float)$m['content'];
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function toXml($data): string
    {
        if ($data === null) {
            return '';
        }

        return sprintf('<%1$s>%2$s</%1$s>', $this->getTypeName(), $data);
    }
}
