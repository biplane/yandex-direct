<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Helper;

use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\TagInterface;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\MethodGenerator;

trait TagTrait
{
    protected function addTag(MethodGenerator $generator, TagInterface $tag): void
    {
        $docBlock = $generator->getDocBlock();

        if (null === $docBlock) {
            $docBlock = new DocBlockGenerator();
            $generator->setDocBlock($docBlock);
        }

        $docBlock->setTag($tag);
    }

    protected function createReturnTag(string $type, bool $isArray = false, bool $isNullable = false): ReturnTag
    {
        return new ReturnTag($this->getTypeHint($type, $isArray, $isNullable));
    }

    protected function createParamTag(
        string $name,
        string $type,
        bool $isArray = false,
        bool $isNullable = false
    ): ParamTag {
        return new ParamTag($name, $this->getTypeHint($type, $isArray, $isNullable));
    }

    /**
     * @return array<string>
     */
    private function getTypeHint(string $type, bool $isArray, bool $nullable): array
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
