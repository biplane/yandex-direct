<?php

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Zend\Code\Generator\ClassGenerator;

interface GeneratorInterface
{
    /**
     * Generates code for contract.
     *
     * @param PhpTypeResolver $typeResolver
     *
     * @return ClassGenerator
     */
    public function generate(PhpTypeResolver $typeResolver);
}
