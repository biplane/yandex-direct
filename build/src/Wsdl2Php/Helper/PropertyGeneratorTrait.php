<?php

namespace Biplane\Build\Wsdl2Php\Helper;

use Laminas\Code\Generator\PropertyGenerator;
use Laminas\Code\Generator\PropertyValueGenerator;

trait PropertyGeneratorTrait
{
    protected function createProperty(string $name, bool $isArray, bool $isNullable): PropertyGenerator
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
