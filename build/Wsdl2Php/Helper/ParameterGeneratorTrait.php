<?php

namespace Biplane\Build\Wsdl2Php\Helper;

use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Generator\ValueGenerator;

trait ParameterGeneratorTrait
{
    protected function createParameter($name, $type, $isArray = false, $nullable = false)
    {
        if ($isArray) {
            $type = 'array';
        }

        $generator = new ParameterGenerator($name, $type);

        if ($nullable) {
            $generator->setDefaultValue(new ValueGenerator());
        }

        return $generator;
    }
}
