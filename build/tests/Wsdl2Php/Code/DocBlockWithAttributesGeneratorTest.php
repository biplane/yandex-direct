<?php

namespace Biplane\Tests\Wsdl2Php\Code;

use Biplane\Build\Wsdl2Php\Code\DocBlockWithAttributesGenerator;
use PHPUnit\Framework\TestCase;

final class DocBlockWithAttributesGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $docBlock = new DocBlockWithAttributesGenerator('Short description');
        $docBlock->setAttributes(['Foo', "\Bar"]);

        $expected = "/**\n"
            . " * Short description\n"
            . " */\n"
            . "#[Foo]\n"
            . "#[\Bar]\n";

        $output = $docBlock->generate();

        self::assertEquals($expected, $output);
    }
}
