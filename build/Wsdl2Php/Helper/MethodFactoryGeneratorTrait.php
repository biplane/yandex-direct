<?php

namespace Biplane\Build\Wsdl2Php\Helper;

use Zend\Code\Generator\DocBlock\Tag\ReturnTag;
use Zend\Code\Generator\MethodGenerator;

trait MethodFactoryGeneratorTrait
{
    use TagTrait;

    protected function createFactoryMethod($className)
    {
        $generator = new MethodGenerator('create');
        $generator->setDocBlock(sprintf('Creates a new instance of %s.', $className));
        $generator->setStatic(true);
        $generator->setBody('return new self();');

        $this->addTag($generator, new ReturnTag('self'));

        return $generator;
    }
}
