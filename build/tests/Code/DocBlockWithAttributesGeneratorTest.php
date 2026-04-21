<?php

declare(strict_types=1);

namespace Biplane\Tests\Code;

use Biplane\Build\Code\DocBlockWithAttributesGenerator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function implode;

#[CoversClass(DocBlockWithAttributesGenerator::class)]
final class DocBlockWithAttributesGeneratorTest extends TestCase
{
    #[Test]
    public function generate(): void
    {
        $docBlock = new DocBlockWithAttributesGenerator('Short description');
        $docBlock->setAttributes(['Foo', '\\Acme\\Bar']);

        $expectedCode = implode(DocBlockWithAttributesGenerator::LINE_FEED, [
            '/**',
            ' * Short description',
            ' */',
            '#[Foo]',
            '#[\\Acme\\Bar]',
            '',
        ]);

        $output = $docBlock->generate();

        self::assertEquals($expectedCode, $output);
    }
}
