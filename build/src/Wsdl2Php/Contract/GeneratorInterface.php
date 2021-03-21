<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Zend\Code\Generator\ClassGenerator;

interface GeneratorInterface
{
    public function generate(PhpTypeResolver $typeResolver): ClassGenerator;
}
