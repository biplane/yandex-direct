<?php

declare(strict_types=1);

namespace Biplane\Tests\Wsdl2Php;

use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Xml\SchemaDocument;
use Wsdl2PhpGenerator\Xml\TypeNode;
use Wsdl2PhpGenerator\Xml\WsdlDocument;

trait ParseWsdlTrait
{
    protected function createWsdlDocument(string $wsdlFile): WsdlDocument
    {
        $reflection = new \ReflectionProperty(SchemaDocument::class, 'loadedUrls');
        $reflection->setAccessible(true);
        $reflection->setValue(null, []);

        $wsdl = __DIR__ . '/Fixtures/wsdl/' . $wsdlFile;
        $config = new Config([
            'inputFile' => $wsdl,
            'outputDir' => sys_get_temp_dir() . '/wsdl2php',
        ]);

        return new WsdlDocument($config, $wsdl);
    }

    /**
     * @return array<TypeNode>
     */
    protected function loadTypes(string $wsdlFile): array
    {
        return $this->createWsdlDocument($wsdlFile)->getTypes();
    }
}
