<?php

namespace Biplane\Tests\Build\Wsdl2Php;

use Biplane\Build\Wsdl2Php\NodeUtil;
use PHPUnit\Framework\TestCase;
use Wsdl2PhpGenerator\Xml\TypeNode;

class NodeUtilTest extends TestCase
{
    use ParseWsdlTrait;

    /**
     * @dataProvider provideArrayTypes
     */
    public function testIsArray($expected, $type, $wsdlFilename)
    {
        $types = $this->loadTypes($wsdlFilename);
        $node = $this->findNode($type, $types);

        self::assertSame($expected, NodeUtil::isArray($node));
    }

    public function provideArrayTypes()
    {
        return [
            [true, 'ArrayOfCampaignInfo', 'yandexapiservice.wsdl'],
            [true, 'ArrayOfAdCategoryEnum', 'ads.wsdl'],
            [true, 'TrackingPixelGetArray', 'ads.wsdl'],
        ];
    }

    /**
     * @param string     $name
     * @param TypeNode[] $nodes
     *
     * @return TypeNode
     */
    private function findNode($name, array $nodes)
    {
        foreach ($nodes as $node) {
            if ($node->getName() === $name) {
                return $node;
            }
        }

        throw new \RuntimeException(sprintf('Node with name "%s" not found', $name));
    }
}
