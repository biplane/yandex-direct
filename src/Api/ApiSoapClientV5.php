<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Soap\ApiSoapClient;
use Biplane\YandexDirect\Soap\TypeConverter\ArrayOfIntegerConverter;
use Biplane\YandexDirect\Soap\TypeConverter\ArrayOfLongConverter;
use Biplane\YandexDirect\Soap\TypeConverter\ArrayOfStringConverter;
use Biplane\YandexDirect\Util\StreamContextFactory;
use SoapFault;

use function is_object;
use function preg_match;
use function property_exists;
use function trim;

class ApiSoapClientV5 extends ApiSoapClient
{
    private const GENERAL_NS = 'http://api.direct.yandex.com/v5/general';

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(?string $wsdl, Config $config, array $options = [])
    {
        $options['stream_context'] = StreamContextFactory::create(
            self::createHttpHeaders($config),
            $options['stream_context'] ?? null
        );

        parent::__construct($wsdl, $config, $options);
    }

    /**
     * @see https://tech.yandex.ru/direct/doc/dg/concepts/headers-docpage/#units
     */
    public function getUnits(): ?Units
    {
        $headers = $this->__getLastResponseHeaders();

        if (
            $headers !== null
            && preg_match('@^Units:(?:\s)?(\d+)/(\d+)/(\d+)@im', $headers, $units)
            && preg_match('@^Units-Used-Login:(.+)$@im', $headers, $usedLogin)
        ) {
            return new Units((int)$units[1], (int)$units[2], (int)$units[3], trim($usedLogin[1]));
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    protected function getTypeConverters(): array
    {
        $converters = parent::getTypeConverters();

        $converters[] = new ArrayOfStringConverter(self::GENERAL_NS);
        $converters[] = new ArrayOfIntegerConverter(self::GENERAL_NS);
        $converters[] = new ArrayOfLongConverter(self::GENERAL_NS);

        return $converters;
    }

    protected function parseSoapFault(SoapFault $fault): ?ApiException
    {
        $detail = property_exists($fault, 'detail') ? $fault->detail : null;

        if (is_object($detail) && property_exists($detail, 'FaultResponse')) {
            // phpcs:disable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps

            $exception = new ApiException(
                property_exists($fault, 'faultstring') ? $fault->faultstring : $fault->getMessage(),
                (int)$detail->FaultResponse->errorCode,
                $detail->FaultResponse->errorDetail,
                $fault
            );
            $exception->setRequestId($detail->FaultResponse->requestId);

            // phpcs:enable Squiz.NamingConventions.ValidVariableName.MemberNotCamelCaps

            return $exception;
        }

        return null;
    }

    /**
     * @return array<string, string>
     */
    private static function createHttpHeaders(Config $config): array
    {
        $headers = [
            'Authorization' => 'Bearer ' . $config->getAccessToken(),
            'Accept-Language' => $config->getLocale(Config::API_5),
        ];

        if ($config->getClientLogin() !== null) {
            $headers['Client-Login'] = (string)$config->getClientLogin();
        }

        if ($config->useOperatorUnits()) {
            $headers['Use-Operator-Units'] = 'true';
        }

        return $headers;
    }
}
