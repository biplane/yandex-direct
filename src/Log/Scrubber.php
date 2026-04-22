<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Log;

use function assert;
use function count;
use function is_string;
use function preg_quote;
use function preg_replace;
use function sprintf;
use function str_replace;

final class Scrubber
{
    private const string HTTP_HEADER_REGEX = '/^(%s:\s).+$/im';
    private const string SOAP_HEADER_REGEX = '/(<SOAP-ENV:Header>.*<(?:[^:]+:)%1$s>).+(<\/(?:[^:]+:)%1$s>.*<\/SOAP-ENV:Header>)/isU';
    private const string MASK = 'REDACTED';

    private function __construct()
    {
    }

    /** @param array<string> $headersToScrub */
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
                limit: 1,
            );
            assert(is_string($headers));
        }

        return str_replace("\n", "\r\n", $headers);
    }

    /** @param array<string> $headersToScrub */
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
                1,
            );
            assert(is_string($content));
        }

        return $content;
    }
}
