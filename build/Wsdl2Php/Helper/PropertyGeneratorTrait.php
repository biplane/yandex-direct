<?php

namespace Biplane\Build\Wsdl2Php\Helper;

use Zend\Code\Generator\PropertyGenerator;
use Zend\Code\Generator\PropertyValueGenerator;

trait PropertyGeneratorTrait
{
    protected function createProperty($name, $isArray, $isNullable)
    {
        $generator = new PropertyGenerator($name);
        $generator->setVisibility(PropertyGenerator::VISIBILITY_PROTECTED);

        if ($isArray && !$isNullable) {
            $generator->setDefaultValue(
                [],
                PropertyValueGenerator::TYPE_ARRAY_SHORT,
                PropertyValueGenerator::OUTPUT_SINGLE_LINE
            );
        }

        return $generator;
    }
}
