<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap\TypeConverter;

use function array_map;
use function is_array;

final class ArrayOfIntegerTypeTypeConverter extends ArrayOfStringTypeConverter
{
    public function getTypeName(): string
    {
        return 'ArrayOfInteger';
    }

    /**
     * {@inheritDoc}
     */
    public function fromXml(string $xml)
    {
        $items = parent::fromXml($xml);

        if (is_array($items)) {
            return array_map('intval', $items);
        }

        return $items;
    }
}
