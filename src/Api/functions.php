<?php

namespace Biplane\YandexDirect\Api;

function parseArrayOfString($xml)
{
    if ($xml && preg_match_all('/<Items>([^<]+)<\/Items>/u', $xml, $m)) {
        return $m[1];
    }

    return null;
}

function parseArrayOfInt($xml)
{
    $items = parseArrayOfString($xml);
    if (is_array($items)) {
        return array_map('intval', $items);
    }

    return $items;
}

function parseArrayOfLong($xml)
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
            if ('header' === $name && isset($options['http'][$name])) {
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

    return stream_context_create($options, $params);
}

/**
 * @param string[]|string $headers
 *
 * @return string[]
 */
function parseHttpHeaders($headers)
{
    if (is_array($headers)) {
        return $headers;
    }

    return explode("\r\n", $headers);
}
