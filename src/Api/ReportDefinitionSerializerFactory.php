<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Serializer\CamelCaseNameConverter;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

final class ReportDefinitionSerializerFactory
{
    public static function create(): SerializerInterface
    {
        return new Serializer(
            [
                new PropertyNormalizer(null, new CamelCaseNameConverter()),
            ],
            [
                new XmlEncoder([
                    XmlEncoder::ROOT_NODE_NAME => 'ReportDefinition',
                    XmlEncoder::REMOVE_EMPTY_TAGS => true,
                ]),
            ]
        );
    }
}
