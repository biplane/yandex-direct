<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php;

use RuntimeException;

final class Inflector
{
    public static function classify(string $input): string
    {
        return str_replace([' ', '_', '-'], '', ucwords($input, ' _-'));
    }

    public static function camelize(string $input): string
    {
        return lcfirst(self::classify($input));
    }

    public static function tableize(string $input): string
    {
        $tableized = preg_replace('~(?<=\\w)([A-Z])~u', '_$1', $input);

        if ($tableized === null) {
            throw new RuntimeException(sprintf(
                'preg_replace returned null for value "%s"',
                $input
            ));
        }

        return mb_strtolower($tableized);
    }
}
