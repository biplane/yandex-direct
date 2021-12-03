<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

use function array_map;
use function is_array;
use function preg_match_all;

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
