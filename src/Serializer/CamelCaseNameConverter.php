<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Serializer;

use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

use function ucfirst;

final class CamelCaseNameConverter implements NameConverterInterface
{
    /**
     * {@inheritDoc}
     */
    public function normalize(string $propertyName)
    {
        return ucfirst($propertyName);
    }

    /**
     * {@inheritDoc}
     */
    public function denormalize(string $propertyName)
    {
        return $propertyName;
    }
}
