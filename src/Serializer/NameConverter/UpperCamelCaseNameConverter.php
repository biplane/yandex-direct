<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Serializer\NameConverter;

use Override;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

use function ucfirst;

final class UpperCamelCaseNameConverter implements NameConverterInterface
{
    /**
     * {@inheritDoc}
     */
    #[Override]
    public function normalize(string $propertyName, ?string $class = null, ?string $format = null, array $context = []): string
    {
        return ucfirst($propertyName);
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function denormalize(string $propertyName, ?string $class = null, ?string $format = null, array $context = []): string
    {
        return $propertyName;
    }
}
