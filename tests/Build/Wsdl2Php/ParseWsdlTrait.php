<?php

namespace Biplane\Tests\Build\Wsdl2Php;

use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Xml\SchemaDocument;
use Wsdl2PhpGenerator\Xml\WsdlDocument;

trait ParseWsdlTrait
{
    protected function createWsdlDocument($wsdlFile)
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

    protected function loadTypes($wsdlFile)
    {
        return $this->createWsdlDocument($wsdlFile)->getTypes();
    }
}
