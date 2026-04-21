<?php

declare(strict_types=1);

namespace Biplane\Tests\Util;

use Biplane\Build\Util\TypeUtil;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(TypeUtil::class)]
final class TypeUtilTest extends TestCase
{
    /**
     * @param non-empty-string $typeHint
     * @param non-empty-string $expectedResult
     */
    #[Test]
    #[TestWith(['list<string>', 'string'])]
    #[TestWith(['non-empty-list<\\Acme\\Entry>', '\\Acme\\Entry'])]
    #[TestWith(['list<int|null>|mixed', 'int|null'])]
    #[TestWith(['non-empty-list<\'FOO\'|\'BAR\'>|null', '\'FOO\'|\'BAR\''])]
    public function extractListItemType(string $typeHint, string $expectedResult): void
    {
        self::assertSame($expectedResult, TypeUtil::extractListItemType($typeHint));
    }
}
