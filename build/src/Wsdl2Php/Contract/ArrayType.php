<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class ArrayType extends AbstractDataType
{
    /**
     * {@inheritdoc}
     */
    public function resolvePhpType(PhpTypeResolver $typeResolver): string
    {
        $parts = $this->type->getParts();

        if (count($parts) === 1 && isset($parts['Items']) && substr($parts['Items'], -2) === '[]') {
            return $typeResolver->resolve($parts['Items']);
        }

        return $typeResolver->resolve($this->type->getRestriction() . '[]');
    }
}
