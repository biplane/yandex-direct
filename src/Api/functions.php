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
