<?php

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class ArrayType extends AbstractDataType
{
    /**
     * {@inheritdoc}
     */
    public function resolvePhpType(PhpTypeResolver $typeResolver)
    {
        return $typeResolver->resolve($this->type->getRestriction() . '[]');
    }
}
