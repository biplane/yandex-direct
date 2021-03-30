<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Helper;

use Biplane\Build\Wsdl2Php\ClassNameUtil;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\MethodGenerator;

trait ContractGeneratorTrait
{
    use ClassGeneratorTrait;
    use ParameterGeneratorTrait;
    use TagTrait;

    abstract protected function getClassName(): string;

    abstract protected function getNamespace(): string;

    abstract protected function buildClass(ClassGenerator $generator, PhpTypeResolver $typeResolver): void;

    public function generate(PhpTypeResolver $typeResolver): ClassGenerator
    {
        $generator = $this->createClassGenerator($this->getClassName(), $this->getNamespace());

        $this->buildClass($generator, $typeResolver);

        return $generator;
    }

    protected function createGetter(
        string $elemName,
        string $phpType,
        bool $isArray,
        bool $isNullable,
        bool $camBeOmitted = false
    ): MethodGenerator {
        $generator = new MethodGenerator('get' . ucfirst($elemName));

        if ($camBeOmitted) {
            $generator->setBody(sprintf('return isset($this->%1$s) ? $this->%1$s : null;', $elemName));
        } else {
            $generator->setBody(sprintf('return $this->%s;', $elemName));
        }

        $this->addTag($generator, $this->createReturnTag(ClassNameUtil::fqcn($phpType), $isArray, $isNullable));

        return $generator;
    }

    protected function createSetter(
        string $elemName,
        string $phpType,
        bool $isArray,
        bool $isNullable
    ): MethodGenerator {
        $generator = new MethodGenerator('set' . ucfirst($elemName));
        $generator->setBody(sprintf("\$this->%s = \$value;\n\nreturn \$this;", $elemName));
        $generator->setParameter($this->createParameter('value', ClassNameUtil::fqcn($phpType), $isArray, $isNullable));

        $this->addTag($generator, $this->createParamTag('value', ClassNameUtil::fqcn($phpType), $isArray, $isNullable));
        $this->addTag($generator, $this->createReturnTag('$this'));

        return $generator;
    }
}
