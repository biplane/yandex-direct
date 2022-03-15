<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Config;

use InvalidArgumentException;

use function in_array;

use const SOAP_COMPRESSION_ACCEPT;
use const SOAP_COMPRESSION_GZIP;
use const WSDL_CACHE_BOTH;
use const WSDL_CACHE_DISK;
use const WSDL_CACHE_MEMORY;
use const WSDL_CACHE_NONE;

final class SoapOptions
{
    /** @var int */
    private $compression;

    /** @var int */
    private $wsdlCacheType;

    private function __construct()
    {
        $this->compression = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP;
        $this->wsdlCacheType = WSDL_CACHE_DISK;
    }

    public static function default(): self
    {
        return new self();
    }

    public static function withoutWsdlCache(): self
    {
        $instance = new self();
        $instance->wsdlCacheType = WSDL_CACHE_NONE;

        return $instance;
    }

    public function getCompression(): int
    {
        return $this->compression;
    }

    public function getWsdlCacheType(): int
    {
        return $this->wsdlCacheType;
    }

    public function withCompression(int $compression): self
    {
        if ($compression === $this->compression) {
            return $this;
        }

        $clone = clone $this;
        $clone->compression = $compression;

        return $clone;
    }

    public function withWsdlCacheType(int $cache): self
    {
        if ($cache === $this->wsdlCacheType) {
            return $this;
        }

        if (! in_array($cache, [WSDL_CACHE_NONE, WSDL_CACHE_DISK, WSDL_CACHE_MEMORY, WSDL_CACHE_BOTH], true)) {
            throw new InvalidArgumentException('Value must be one of the following constants: WSDL_CACHE_NONE, WSDL_CACHE_DISK, WSDL_CACHE_MEMORY or WSDL_CACHE_BOTH');
        }

        $clone = clone $this;
        $clone->wsdlCacheType = $cache;

        return $clone;
    }
}
