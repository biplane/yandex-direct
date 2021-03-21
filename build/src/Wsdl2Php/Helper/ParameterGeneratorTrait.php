<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Helper;

use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Generator\ValueGenerator;

trait ParameterGeneratorTrait
{
    protected function createParameter(
        string $name,
        string $type,
        bool $isArray = false,
        bool $nullable = false
    ): ParameterGenerator {
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
