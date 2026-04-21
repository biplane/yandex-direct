<?php

declare(strict_types=1);

namespace Biplane\Tests;

use Soap\Engine\Metadata\Metadata;
use Soap\Wsdl\Loader\StreamWrapperLoader;
use Soap\WsdlReader\Metadata\Wsdl1MetadataProvider;
use Soap\WsdlReader\Wsdl1Reader;

final class WsdlProvider
{
    /** @psalm-suppress UndefinedConstant */
    public static function getV4(): Metadata
    {
        return self::load('file://' . FIXTURES_DIR . '/wsdl/v4/live.wsdl');
    }

    /** @psalm-suppress UndefinedConstant */
    public static function getAdsV5(): Metadata
    {
        return self::load('file://' . FIXTURES_DIR . '/wsdl/v501/ads.wsdl');
    }

    /** @psalm-suppress UndefinedConstant */
    public static function getAdImagesV5(): Metadata
    {
        return self::load('file://' . FIXTURES_DIR . '/wsdl/v501/adimages.wsdl');
    }

    /** @param non-empty-string $wsdlLocation */
    private static function load(string $wsdlLocation): Metadata
    {
        $wsdl = (new Wsdl1Reader(new StreamWrapperLoader()))($wsdlLocation);

        $metadataProvider = new Wsdl1MetadataProvider($wsdl);

        return $metadataProvider->getMetadata();
    }
}
