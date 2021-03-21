<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\ClassNameUtil;
use Biplane\Build\Wsdl2Php\Code\OmitPropertyGenerator;
use Biplane\Build\Wsdl2Php\Helper\ContractGeneratorTrait;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlock\Tag\GenericTag;
use Zend\Code\Generator\MethodGenerator;

class ComplexType extends AbstractDataType implements GeneratorInterface
{
    use ContractGeneratorTrait;

    /**
     * {@inheritdoc}
     */
    protected function buildClass(ClassGenerator $generator, PhpTypeResolver $typeResolver): void
    {
        if ($this->type->isAbstract()) {
            $generator->addFlag(ClassGenerator::FLAG_ABSTRACT);
        }

        if (null !== $baseType = $this->type->getBase()) {
            $baseType = $typeResolver->resolve($baseType);

            if (false !== strpos($baseType, '\\')) {
                $generator->setExtendedClass(ClassNameUtil::qualifiedClassName($baseType, $this->namespace));
            }
        }

        $generator->addMethodFromGenerator($this->createFactoryMethod($generator->getName()));

        foreach ($this->type->getParts() as $elemName => $elemType) {
            $isArray = $this->type->isElementArray($elemName);
            $canBeOmitted = $this->type->getElementMinOccurs($elemName) === 0;
            $nullable = $this->type->isElementNillable($elemName) || $canBeOmitted;

            $phpType = $typeResolver->resolve($elemType, $this->namespace);
            $enumClass = $this->getEnumClass($elemType, $typeResolver);

            if (substr($phpType, -2) === '[]') {
                $isArray = true;
            }

            if ($canBeOmitted) {
                $generator->addPropertyFromGenerator(new OmitPropertyGenerator($elemName));
            } else {
                $generator->addPropertyFromGenerator($this->createProperty($elemName, $isArray, $nullable));
            }

            $generator->addMethodFromGenerator(
                $this->addSeeTag(
                    $this->createGetter($elemName, $phpType, $isArray, $nullable, $canBeOmitted),
                    $enumClass
                )
            );
            $generator->addMethodFromGenerator(
                $this->addSeeTag(
                    $this->createSetter($elemName, $phpType, $isArray, $nullable),
                    $enumClass
                )
            );
        }
    }

    private function getEnumClass(string $wsdlType, PhpTypeResolver $resolver): ?string
    {
        $types = $resolver->getTypes();

        if (substr($wsdlType, -2) === '[]') {
            $wsdlType = substr($wsdlType, 0, -2);
        }

        if (isset($types[$wsdlType]) && $types[$wsdlType] instanceof EnumType) {
            return $types[$wsdlType]->getPhpIdentifier();
        }

        return null;
    }

    private function addSeeTag(MethodGenerator $generator, ?string $enumClass): MethodGenerator
    {
        if (null === $enumClass) {
            return $generator;
        }

        $this->addTag(
            $generator,
            new GenericTag('see', ClassNameUtil::qualifiedClassName($enumClass, $this->namespace))
        );

        return $generator;
    }
}
