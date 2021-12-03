<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Util;

use function count;
use function explode;
use function implode;
use function is_resource;
use function is_string;
use function stream_context_create;
use function stream_context_get_options;
use function stream_context_get_params;
use function strpos;
use function strtolower;
use function substr;

final class StreamContextFactory
{
    /**
     * @param array<string, string> $httpHeaders
     * @param resource|null         $streamContext
     *
     * @return resource
     */
    public static function create(array $httpHeaders, $streamContext = null)
    {
        if (is_resource($streamContext)) {
            $options = stream_context_get_options($streamContext);
            $params = stream_context_get_params($streamContext);

            unset($params['options']);
        } else {
            $options = [];
            $params = null;
        }

        $parsedHeaders = self::parseHttpHeaders($options['http']['header'] ?? []);

        foreach ($httpHeaders as $name => $value) {
            $parsedHeaders[strtolower($name)] = $name . ': ' . $value;
        }

        $options['http']['header'] = implode("\r\n", $parsedHeaders);

        return stream_context_create($options, $params);
    }

    /**
     * @param array<string>|string $headers
     *
     * @return array<string, string>
     */
    private static function parseHttpHeaders($headers): array
    {
        if (is_string($headers)) {
            $headers = explode("\r\n", $headers);
        }

        if (count($headers) === 0) {
            return [];
        }

        $headersMap = [];

        foreach ($headers as $header) {
            $pos = strpos($header, ':');

            if ($pos < 1) {
                $headersMap[] = $header;

                continue;
            }

            $name = strtolower(substr($header, 0, $pos));
            $headersMap[$name] = $header;
        }

        return $headersMap;
    }
}
