<?php

declare(strict_types=1);

namespace Biplane\Build\Util;

use Psl\Regex;
use Psl\Type;
use RuntimeException;

use function explode;
use function sprintf;

final class TypeUtil
{
    /**
     * @param non-empty-string $typeHint
     *
     * @return non-empty-string
     *
     * @throws RuntimeException
     */
    public static function extractListItemType(string $typeHint): string
    {
        $match = Regex\first_match($typeHint, '/^(?:list|non-empty-list)<([^>]*)>/');

        if ($match !== null) {
            return Type\non_empty_string()->assert($match[1]);
        }

        throw new RuntimeException(sprintf('Could not extract list item type fom type-hint "%s"', $typeHint));
    }

    /**
     * @param non-empty-string $unionTypes
     *
     * @return list<string>
     */
    public static function splitUnionTypes(string $unionTypes): array
    {
        return explode('|', $unionTypes);
    }
}
