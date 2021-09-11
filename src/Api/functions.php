<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use SimpleXMLElement;

use function array_flip;
use function array_map;
use function array_merge;
use function explode;
use function implode;
use function is_array;
use function is_resource;
use function preg_match_all;
use function str_replace;
use function stream_context_create;
use function stream_context_get_options;
use function stream_context_get_params;

/**
 * @return array<string>|null
 */
function parseArrayOfString(string $xml): ?array
{
    if ($xml !== '' && preg_match_all('/<Items>([^<]+)<\/Items>/u', $xml, $m)) {
        return $m[1];
    }

    return null;
}

/**
 * @return array<int>|null
 */
function parseArrayOfInt(string $xml): ?array
{
    $items = parseArrayOfString($xml);

    if (is_array($items)) {
        return array_map('intval', $items);
    }

    return $items;
}

/**
 * @return array<float>|null
 */
function parseArrayOfLong(string $xml): ?array
{
    $items = parseArrayOfString($xml);

    if (is_array($items)) {
        return array_map('floatval', $items);
    }

    return $items;
}

/**
 * @param array<string,mixed> $httpOptions
 * @param resource|null       $originStreamContext
 *
 * @return resource
 */
function createStreamContext(array $httpOptions, $originStreamContext = null)
{
    if (is_resource($originStreamContext)) {
        $options = stream_context_get_options($originStreamContext);
        $params = stream_context_get_params($originStreamContext);

        unset($params['options']);
    } else {
        $options = [];
        $params = null;
    }

    if (isset($options['http'])) {
        foreach ($httpOptions as $name => $value) {
            if ($name === 'header' && isset($options['http'][$name])) {
                $options['http'][$name] = array_merge(
                    parseHttpHeaders($options['http'][$name]),
                    parseHttpHeaders($value)
                );
            } else {
                $options['http'][$name] = $value;
            }
        }
    } else {
        $options['http'] = $httpOptions;
    }

    if (isset($options['http']['header']) && is_array($options['http']['header'])) {
        $options['http']['header'] = implode("\r\n", $options['http']['header']);
    }

    return stream_context_create($options, $params);
}

/**
 * @param string[]|string $headers
 *
 * @return string[]
 */
function parseHttpHeaders($headers): array
{
    if (is_array($headers)) {
        return $headers;
    }

    return explode("\r\n", $headers);
}

function fixNamespace(string $response, string $schemaNamespace): string
{
    if ($response === '') {
        return $response;
    }

    $xml = new SimpleXMLElement($response);
    $nss = array_flip($xml->getDocNamespaces(true));
    $invalidNs = 'http://namespaces.soaplite.com/perl';

    if (isset($nss[$invalidNs], $nss[$schemaNamespace])) {
        return str_replace($nss[$invalidNs] . ':', $nss[$schemaNamespace] . ':', $response);
    }

    return $response;
}
