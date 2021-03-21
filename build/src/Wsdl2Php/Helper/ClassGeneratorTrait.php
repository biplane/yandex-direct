<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Helper;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;

trait ClassGeneratorTrait
{
    protected function createClassGenerator(string $className, string $namespace): ClassGenerator
    {
        $generator = new ClassGenerator($className);
        $generator->setDocBlock(new DocBlockGenerator('Auto-generated code.'));
        $generator->setNamespaceName($namespace);

        return $generator;
    }
}
