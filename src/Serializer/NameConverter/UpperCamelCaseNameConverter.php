<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Serializer\NameConverter;

use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

use function ucfirst;

final class UpperCamelCaseNameConverter implements NameConverterInterface
{
    /**
     * {@inheritDoc}
     */
    public function normalize($propertyName): string
    {
        return ucfirst($propertyName);
    }

    /**
     * {@inheritDoc}
     */
    public function denormalize($propertyName): string
    {
        return $propertyName;
    }
}
