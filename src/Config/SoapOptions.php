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

final readonly class SoapOptions
{
    /** @param int-mask<\SOAP_COMPRESSION_ACCEPT,\SOAP_COMPRESSION_DEFLATE,\SOAP_COMPRESSION_GZIP> $compression */
    private function __construct(private int $compression, private int $wsdlCacheType)
    {
    }

    public static function default(): self
    {
        return new self(
            compression: SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
            wsdlCacheType: WSDL_CACHE_DISK,
        );
    }

    public static function withoutWsdlCache(): self
    {
        return new self(
            compression: SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
            wsdlCacheType: WSDL_CACHE_NONE,
        );
    }

    /** @return int-mask<\SOAP_COMPRESSION_ACCEPT,\SOAP_COMPRESSION_DEFLATE,\SOAP_COMPRESSION_GZIP> */
    public function getCompression(): int
    {
        return $this->compression;
    }

    public function getWsdlCacheType(): int
    {
        return $this->wsdlCacheType;
    }

    /** @param int-mask<\SOAP_COMPRESSION_ACCEPT,\SOAP_COMPRESSION_DEFLATE,\SOAP_COMPRESSION_GZIP> $compression */
    public function withCompression(int $compression): self
    {
        if ($compression === $this->compression) {
            return $this;
        }

        return new self(
            compression: $compression,
            wsdlCacheType: $this->wsdlCacheType,
        );
    }

    public function withWsdlCacheType(int $cache): self
    {
        if ($cache === $this->wsdlCacheType) {
            return $this;
        }

        if (! in_array($cache, [WSDL_CACHE_NONE, WSDL_CACHE_DISK, WSDL_CACHE_MEMORY, WSDL_CACHE_BOTH], strict: true)) {
            throw new InvalidArgumentException('Value must be one of the following constants: WSDL_CACHE_NONE, WSDL_CACHE_DISK, WSDL_CACHE_MEMORY or WSDL_CACHE_BOTH');
        }

        return new self(
            compression: $this->compression,
            wsdlCacheType: $cache,
        );
    }
}
