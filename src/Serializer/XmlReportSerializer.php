<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Serializer;

use Biplane\YandexDirect\Api\V5\Reports\ApiError;
use Biplane\YandexDirect\Api\V5\Reports\ReportDefinition;
use Biplane\YandexDirect\Serializer\NameConverter\UpperCamelCaseNameConverter;
use Override;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

use function is_array;

final class XmlReportSerializer implements ReportSerializerInterface
{
    private const string XML_NAMESPACE = 'http://api.direct.yandex.com/v5/reports';

    /** @var Serializer */
    private $serializer;

    public function __construct()
    {
        $this->serializer = new Serializer(
            [
                new PropertyNormalizer(null, new UpperCamelCaseNameConverter()),
            ],
            [
                new XmlEncoder(),
            ],
        );
    }

    /**
     * @return non-empty-string
     *
     * @throws ExceptionInterface
     */
    #[Override]
    public function serializeReportDefinition(ReportDefinition $reportDefinition): string
    {
        return $this->serializer->serialize(
            [
                '@xmlns' => self::XML_NAMESPACE,
                '#' => $reportDefinition,
            ],
            XmlEncoder::FORMAT,
            [
                XmlEncoder::ROOT_NODE_NAME => 'ReportDefinition',
                XmlEncoder::REMOVE_EMPTY_TAGS => true,
            ],
        );
    }

    #[Override]
    public function deserializeApiError(string $content): ?ApiError
    {
        $data = $this->serializer->decode($content, XmlEncoder::FORMAT);

        if (! is_array($data) || ! isset($data['reports:ApiError'])) {
            return null;
        }

        $error = $data['reports:ApiError'];

        return new ApiError(
            $error['reports:requestId'],
            (int)$error['reports:errorCode'],
            $error['reports:errorMessage'],
            $error['reports:errorDetail'] ?? null,
        );
    }
}
