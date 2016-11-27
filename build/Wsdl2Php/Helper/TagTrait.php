<?php

namespace Biplane\Build\Wsdl2Php\Helper;

use Zend\Code\Generator\DocBlock\Tag\ParamTag;
use Zend\Code\Generator\DocBlock\Tag\ReturnTag;
use Zend\Code\Generator\DocBlock\Tag\TagInterface;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;

trait TagTrait
{
    protected function addTag(MethodGenerator $generator, TagInterface $tag)
    {
        $docBlock = $generator->getDocBlock();

        if (null === $docBlock) {
            $docBlock = new DocBlockGenerator();
            $generator->setDocBlock($docBlock);
        }

        $docBlock->setTag($tag);
    }

    protected function createReturnTag($type, $isArray = false, $isNullable = false)
    {
        return new ReturnTag($this->getTypeHint($type, $isArray, $isNullable));
    }

    protected function createParamTag($name, $type, $isArray = false, $isNullable = false)
    {
        return new ParamTag($name, $this->getTypeHint($type, $isArray, $isNullable));
    }

    private function getTypeHint($type, $isArray, $nullable)
    {
        if ($isArray && $type !== 'array' && substr($type, -2) !== '[]') {
            $type .= '[]';
        }

        $types = [$type];

        if ($nullable) {
            $types[] = 'null';
        }

        return $types;
    }
}
