<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Log;

use function count;
use function preg_quote;
use function preg_replace;
use function sprintf;
use function str_replace;

final class Scrubber
{
    private const HTTP_HEADER_REGEX = '/^(%s:\s).+$/im';
    private const SOAP_HEADER_REGEX = '/(<SOAP-ENV:Header>.*<(?:[^:]+:)%1$s>).+(<\/(?:[^:]+:)%1$s>.*<\/SOAP-ENV:Header>)/isU';
    private const MASK = 'REDACTED';

    private function __construct()
    {
    }

    /**
     * @param array<string> $headersToScrub
     */
    public static function scrubHttpHeaders(string $headers, array $headersToScrub): string
    {
        if (count($headersToScrub) === 0) {
            return $headers;
        }

        $headers = str_replace("\r\n", "\n", $headers);

        foreach ($headersToScrub as $header) {
            $headers = preg_replace(
                sprintf(self::HTTP_HEADER_REGEX, preg_quote($header, '/')),
                '${1}' . self::MASK . '${2}',
                $headers,
                1
            );
        }

        return str_replace("\n", "\r\n", $headers);
    }

    /**
     * @param array<string> $headersToScrub
     */
    public static function scrubSoapHeaders(string $content, array $headersToScrub): string
    {
        if (count($headersToScrub) === 0) {
            return $content;
        }

        foreach ($headersToScrub as $header) {
            $content = preg_replace(
                sprintf(self::SOAP_HEADER_REGEX, preg_quote($header, '/')),
                '${1}' . self::MASK . '${2}',
                $content,
                1
            );
        }

        return $content;
    }
}
