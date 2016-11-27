<?php

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Helper\ContractGeneratorTrait;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Doctrine\Common\Inflector\Inflector;
use Wsdl2PhpGenerator\Validator;
use Zend\Code\Generator\ClassGenerator;

class EnumType extends AbstractDataType implements GeneratorInterface
{
    use ContractGeneratorTrait;

    /**
     * {@inheritdoc}
     */
    public function resolvePhpType(PhpTypeResolver $typeResolver)
    {
        return $typeResolver->resolve($this->type->getRestriction());
    }

    /**
     * {@inheritdoc}
     */
    protected function buildClass(ClassGenerator $generator, PhpTypeResolver $typeResolver)
    {
        foreach ($this->type->getEnumerations() as $value) {
            $name = $value;

            if (preg_match('/[a-z]/', $name)) {
                $name = Inflector::tableize($name);
            }

            $generator->addConstant(Validator::validateConstant(strtoupper($name)), $value);
        }
    }


}
