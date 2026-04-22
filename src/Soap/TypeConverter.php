<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap;

/** @template T */
interface TypeConverter
{
    public function getTypeNamespace(): string;

    public function getTypeName(): string;

    /** @return T */
    public function fromXml(string $xml): mixed;

    /** @param T $data */
    public function toXml(mixed $data): string;
}
