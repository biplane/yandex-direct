<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Soap;

interface TypeConverter
{
    public function getTypeNamespace(): string;

    public function getTypeName(): string;

    /**
     * @return mixed
     */
    public function fromXml(string $xml);

    /**
     * @param mixed $data
     */
    public function toXml($data): string;
}
