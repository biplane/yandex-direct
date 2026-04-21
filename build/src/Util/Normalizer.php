<?php

declare(strict_types=1);

namespace Biplane\Build\Util;

use Psl\Regex;
use Psl\Type;

use function in_array;
use function lcfirst;
use function mb_strtolower;
use function mb_strtoupper;
use function str_replace;
use function strtolower;
use function ucfirst;
use function ucwords;

final class Normalizer
{
    /** @var array<non-empty-lowercase-string, non-empty-string> */
    private static array $typeMap = [
        'anyuri' => 'string',
        'base64binary' => 'string',
        'boolean' => 'bool',
        'byte' => 'int',
        'datetime' => 'string',
        'date' => 'string',
        'decimal' => 'float',
        'double' => 'float',
        'float' => 'float',
        'hexbinary' => 'string',
        'integer' => 'int',
        'int' => 'int',
        'long' => 'int',
        'negativeinteger' => 'int',
        'nonnegativeinteger' => 'int',
        'nonpositiveinteger' => 'int',
        'normalizedstring' => 'string',
        'positiveinteger' => 'int',
        'short' => 'int',
        'string' => 'string',
        'unsignedbyte' => 'int',
        'unsignedint' => 'int',
        'unsignedlong' => 'int',
        'unsignedshort' => 'int',
    ];

    public static function isKnownType(string $type): bool
    {
        return in_array($type, self::$typeMap, strict: true);
    }

    /**
     * @param non-empty-string $name
     *
     * @return non-empty-string
     */
    public static function normalizeMethodName(string $name): string
    {
        return self::camelCase($name);
    }

    /**
     * @param non-empty-string $name
     *
     * @return non-empty-string
     */
    public static function normalizeParameterName(string $name): string
    {
        return self::camelCase($name);
    }

    /**
     * @param non-empty-string $name
     *
     * @return non-empty-string
     */
    public static function normalizeClassName(string $name): string
    {
        return ucfirst(self::camelCase($name));
    }

    /**
     * @param non-empty-string $type
     *
     * @return non-empty-string
     */
    public static function normalizeType(string $type): string
    {
        return self::$typeMap[strtolower($type)] ?? $type;
    }

    /**
     * @param non-empty-string $name
     *
     * @return non-empty-string
     */
    public static function normalizeConstantName(string $name): string
    {
        if (Regex\matches($name, '/[a-z]/')) {
            return Type\non_empty_string()->assert(mb_strtoupper(self::snakeCase($name)));
        }

        return $name;
    }

    /**
     * @param non-empty-string $input
     *
     * @return non-empty-string
     */
    private static function camelCase(string $input): string
    {
        return Type\non_empty_string()->assert(
            lcfirst(str_replace([' ', '_', '-'], '', ucwords($input, ' _-'))),
        );
    }

    /**
     * @param non-empty-string $input
     *
     * @return non-empty-lowercase-string
     *
     * @psalm-suppress MoreSpecificReturnType
     */
    private static function snakeCase(string $input): string
    {
        /** @psalm-suppress LessSpecificReturnStatement */
        return mb_strtolower(Regex\replace($input, '/(?<=\\w)([A-Z])/u', '_$1'));
    }
}
