<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Wsdl2PhpGenerator\Xml\TypeNode;

abstract class AbstractDataType extends AbstractType
{
    protected $type;

    public function __construct(TypeNode $type, string $className, string $namespace)
    {
        parent::__construct($className, $namespace);

        $this->type = $type;
    }

    public function resolvePhpType(PhpTypeResolver $typeResolver): string
    {
        return $this->getPhpIdentifier();
    }
}
