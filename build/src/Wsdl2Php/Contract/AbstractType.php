<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Helper\ClassGeneratorTrait;
use Biplane\Build\Wsdl2Php\Helper\MethodFactoryGeneratorTrait;
use Biplane\Build\Wsdl2Php\Helper\ParameterGeneratorTrait;
use Biplane\Build\Wsdl2Php\Helper\PropertyGeneratorTrait;

abstract class AbstractType
{
    use ClassGeneratorTrait;
    use MethodFactoryGeneratorTrait;
    use PropertyGeneratorTrait;
    use ParameterGeneratorTrait;

    protected $className;
    protected $namespace;

    public function __construct(string $className, string $namespace)
    {
        $this->className = $className;
        $this->namespace = $namespace;
    }

    public function getPhpIdentifier(): string
    {
        return $this->namespace . '\\' . $this->className;
    }

    protected function getClassName(): string
    {
        return $this->className;
    }

    protected function getNamespace(): string
    {
        return $this->namespace;
    }
}
