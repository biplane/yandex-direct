<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Helper;

use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\MethodGenerator;

trait MethodFactoryGeneratorTrait
{
    use TagTrait;

    protected function createFactoryMethod(): MethodGenerator
    {
        $generator = new MethodGenerator('create');
        $generator->setStatic(true);
        $generator->setBody('return new static();');

        $this->addTag($generator, new ReturnTag('static'));

        return $generator;
    }
}
