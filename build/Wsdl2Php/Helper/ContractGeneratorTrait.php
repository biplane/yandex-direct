<?php

namespace Biplane\Build\Wsdl2Php\Helper;

use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\MethodGenerator;

trait ContractGeneratorTrait
{
    use ClassGeneratorTrait;
    use ParameterGeneratorTrait;
    use TagTrait;

    abstract protected function getClassName();

    abstract protected function getNamespace();

    abstract protected function buildClass(ClassGenerator $generator, PhpTypeResolver $typeResolver);

    public function generate(PhpTypeResolver $typeResolver)
    {
        $generator = $this->createClassGenerator($this->getClassName(), $this->getNamespace());

        $this->buildClass($generator, $typeResolver);

        return $generator;
    }

    protected function createGetter($elemName, $phpType, $isArray, $isNullable, $camBeOmitted = false)
    {
        $generator = new MethodGenerator('get' . ucfirst($elemName));
        $generator->setDocBlock(sprintf('Gets %s.', $elemName));

        if ($camBeOmitted) {
            $generator->setBody(sprintf('return isset($this->%1$s) ? $this->%1$s : null;', $elemName));
        } else {
            $generator->setBody(sprintf('return $this->%s;', $elemName));
        }

        $this->addTag($generator, $this->createReturnTag($phpType, $isArray, $isNullable));

        return $generator;
    }

    protected function createSetter($elemName, $phpType, $isArray, $isNullable)
    {
        $generator = new MethodGenerator('set' . ucfirst($elemName));
        $generator->setDocBlock(sprintf('Sets %s.', $elemName));
        $generator->setBody(sprintf("\$this->%s = \$value;\n\nreturn \$this;", $elemName));
        $generator->setParameter($this->createParameter('value', $phpType, $isArray, $isNullable));

        $this->addTag($generator, $this->createParamTag('value', $phpType, $isArray, $isNullable));
        $this->addTag($generator, $this->createReturnTag('$this'));

        return $generator;
    }
}
