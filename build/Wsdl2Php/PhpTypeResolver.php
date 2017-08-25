<?php

namespace Biplane\Build\Wsdl2Php;

use Biplane\Build\Wsdl2Php\Contract\AbstractDataType;
use Wsdl2PhpGenerator\Validator;

class PhpTypeResolver
{
    private $typesMap;

    /**
     * Constructor.
     *
     * @param AbstractDataType[] $types
     */
    public function __construct(array $types)
    {
        $this->typesMap = $types;
    }

    public function getTypes()
    {
        return $this->typesMap;
    }

    public function resolve($wsdlType, $namespace = null)
    {
        $isArray = false;

        if (substr($wsdlType, -2) === '[]') {
            $isArray = true;
            $wsdlType = substr($wsdlType, 0, -2);
        }

        if (isset($this->typesMap[$wsdlType])) {
            $phpType = $this->typesMap[$wsdlType]->resolvePhpType($this);

            if (null !== $namespace) {
                $phpType = ClassNameUtil::qualifiedClassName($phpType, $namespace);
            }
        } else {
            $phpType = $this->validateType($wsdlType);
        }

        return $isArray ? $phpType . '[]' : $phpType;
    }

    private function validateType($type)
    {
        $type = Validator::validateType($type);

        switch (strtolower($type)) {
            case 'date':
            case 'base64binary':
                return 'string';
            case 'arrayofstring':
                return 'string[]';
            case 'arrayofinteger':
                return 'int[]';
        }

        return $type;
    }
}
