<?php

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Helper\ClassGeneratorTrait;
use Biplane\Build\Wsdl2Php\Helper\MethodFactoryGeneratorTrait;
use Biplane\Build\Wsdl2Php\Helper\ParameterGeneratorTrait;
use Biplane\Build\Wsdl2Php\Helper\PropertyGeneratorTrait;
use Doctrine\Common\Inflector\Inflector;

abstract class AbstractType
{
    use ClassGeneratorTrait;
    use MethodFactoryGeneratorTrait;
    use PropertyGeneratorTrait;
    use ParameterGeneratorTrait;

    protected $className;
    protected $namespace;

    public function __construct($className, $namespace)
    {
        $this->className = Inflector::classify($className);
        $this->namespace = $namespace;
    }

    public function getPhpIdentifier()
    {
        return $this->namespace . '\\' . $this->className;
    }

    protected function getClassName()
    {
        return $this->className;
    }

    protected function getNamespace()
    {
        return $this->namespace;
    }
}
