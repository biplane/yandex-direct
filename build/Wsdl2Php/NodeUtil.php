<?php

namespace Biplane\Build\Wsdl2Php;

use Wsdl2PhpGenerator\Xml\TypeNode;

final class NodeUtil
{
    private function __construct()
    {
    }

    public static function isArray(TypeNode $node)
    {
        $parts = $node->getParts();

        return $node->isComplex()
            && count($parts) === 1
            && (strpos($node->getName(), 'ArrayOf') === 0 || substr($node->getName(), -5) === 'Array')
            && substr(reset($parts), -2, 2) === '[]';
    }
}
