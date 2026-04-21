<?php

declare(strict_types=1);

namespace Biplane\Build\Code;

use Biplane\Build\Model\Property;
use Biplane\Build\Model\Type;
use Biplane\Build\Util\Normalizer;
use Biplane\Build\Util\TypeUtil;
use Countable;
use IteratorAggregate;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\GenericTag;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlock\Tag\VarTag;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\FileGenerator;
use Laminas\Code\Generator\MethodGenerator;
use Laminas\Code\Generator\ParameterGenerator;
use Laminas\Code\Generator\TypeGenerator as LaminasTypeGenerator;

use function count;
use function implode;
use function sprintf;
use function ucfirst;

final class TypeGenerator
{
    public function generate(FileGenerator $file, Type $type): void
    {
        $docGenerator = (new DocBlockWithAttributesGenerator('Auto-generated code.'))
            ->setAttributes(['\AllowDynamicProperties'])
            ->setWordWrap(false);

        $class = new ClassGenerator(
            name: $type->name,
            namespaceName: $type->namespace,
            docBlock: $docGenerator,
        );

        if ($type->baseType !== null) {
            $class->setExtendedClass($type->baseType->getFQN());
        }

        if (! $type->isEnum()) {
            $class->addMethodFromGenerator($this->createFactoryMethod());
        }

        if ($type->isEnum()) {
            foreach ($type->getEnumValues() as $value) {
                $class->addConstant(Normalizer::normalizeConstantName($value), $value);
            }
        } else {
            foreach ($type->properties as $property) {
                $class->addPropertyFromGenerator($this->createProperty($property));
                $class->addMethodFromGenerator($this->createGetterFor($property));
                $class->addMethodFromGenerator($this->createSetterFor($property));
            }
        }

        if (count($type->properties) === 1 && $type->properties[0]->isArray()) {
            $class->setImplementedInterfaces([
                IteratorAggregate::class,
                Countable::class,
            ]);

            $class->addMethodFromGenerator($this->createCountMethod($type->properties[0]));
            $class->addMethodFromGenerator($this->createGetIteratorMethod($type->properties[0]));

            $docGenerator->setTag(
                new GenericTag(
                    name: 'implements',
                    content: sprintf(
                        '\\IteratorAggregate<int, %s>',
                        TypeUtil::extractListItemType($type->properties[0]->asDocBlockType()),
                    ),
                ),
            );
        }

        $file->setClass($class);
    }

    private function createProperty(Property $property): PropertyGenerator
    {
        $generator = new PropertyGenerator($property->name);
        $generator->setVisibility(PropertyGenerator::VISIBILITY_PROTECTED);
        $generator->omitDefaultValue();
        $generator->setCanBeOmitted($property->canBeOmitted());

        if (! $property->canBeOmitted()) {
            $generator->setType(LaminasTypeGenerator::fromTypeString($property->asPhpType()));
            $generator->setDocBlock(
                (new DocBlockGenerator())
                    ->setWordWrap(false)
                    ->setTag(new VarTag(types: TypeUtil::splitUnionTypes($property->asDocBlockType()))),
            );

            if ($property->isNullable()) {
                $generator->omitDefaultValue(false);
            }
        }

        return $generator;
    }

    private function createGetterFor(Property $property): MethodGenerator
    {
        $generator = (new MethodGenerator())
            ->setName(Normalizer::normalizeMethodName('get' . ucfirst($property->name)))
            ->setVisibility(MethodGenerator::VISIBILITY_PUBLIC);

        if ($property->canBeOmitted()) {
            $code = sprintf(
                'return isset($this->%1$s) ? $this->%1$s : %2$s;',
                $property->name,
                ! $property->isNullable() && $property->isArray() ? '[]' : 'null',
            );
        } else {
            $code = sprintf('return $this->%s;', $property->name);
        }

        $generator
            ->setBody($code)
            ->setReturnType($property->asPhpType());

        $docGenerator = (new DocBlockGenerator('Get ' . $property->name))
            ->setWordWrap(false)
            ->setTag(new ReturnTag($property->asDocBlockType()));

        if ($property->type->isEnum() && $property->type->namespace !== null) {
            $docGenerator->setTag(new GenericTag('see', $property->type->getFQN()));
        }

        $generator->setDocBlock($docGenerator);

        return $generator;
    }

    private function createSetterFor(Property $property): MethodGenerator
    {
        $generator = (new MethodGenerator())
            ->setName(Normalizer::normalizeMethodName('set' . ucfirst($property->name)))
            ->setVisibility(MethodGenerator::VISIBILITY_PUBLIC);

        $code = [
            sprintf('$this->%s = $value;', $property->name),
            '',
            'return $this;',
        ];

        $generator
            ->setParameter(
                new ParameterGenerator(
                    name: 'value',
                    type: $property->asPhpType(),
                ),
            )
            ->setBody(implode(MethodGenerator::LINE_FEED, $code));

        $docGenerator = (new DocBlockGenerator('Set ' . $property->name))
            ->setWordWrap(false)
            ->setTag(new ParamTag('value', TypeUtil::splitUnionTypes($property->asDocBlockType())))
            ->setTag(new ReturnTag('$this'));

        if ($property->type->isEnum() && $property->type->namespace !== null) {
            $docGenerator->setTag(new GenericTag('see', $property->type->getFQN()));
        }

        $generator->setDocBlock($docGenerator);

        return $generator;
    }

    private function createCountMethod(Property $list): MethodGenerator
    {
        if ($list->canBeOmitted()) {
            $code = sprintf('return isset($this->%1$s) ? \\count($this->%1$s) : 0;', $list->name);
        } else {
            $code = sprintf('return \\count($this->%s);', $list->name);
        }

        return (new MethodGenerator('count'))
            ->setVisibility(MethodGenerator::VISIBILITY_PUBLIC)
            ->setReturnType('int')
            ->setDocBlock(
                (new DocBlockWithAttributesGenerator())
                    ->setAttributes(['\\Override'])
                    ->setWordWrap(false)
                    ->setTag(new ReturnTag('int')),
            )
            ->setBody($code);
    }

    private function createGetIteratorMethod(Property $list): MethodGenerator
    {
        if ($list->canBeOmitted()) {
            $code = sprintf('return new \\ArrayIterator(isset($this->%1$s) ? $this->%1$s : []);', $list->name);
        } else {
            $code = sprintf('return new \\ArrayIterator($this->%s);', $list->name);
        }

        return (new MethodGenerator('getIterator'))
            ->setVisibility(MethodGenerator::VISIBILITY_PUBLIC)
            ->setReturnType('\\ArrayIterator')
            ->setDocBlock(
                (new DocBlockWithAttributesGenerator())
                    ->setAttributes(['\\Override'])
                    ->setWordWrap(false)
                    ->setTag(
                        new ReturnTag(
                            sprintf(
                                '\\ArrayIterator<int, %s>',
                                TypeUtil::extractListItemType($list->asDocBlockType()),
                            ),
                        ),
                    ),
            )
            ->setBody($code);
    }

    private function createFactoryMethod(): MethodGenerator
    {
        return (new MethodGenerator('create'))
            ->setVisibility(MethodGenerator::VISIBILITY_PUBLIC)
            ->setStatic(true)
            ->setBody('return new static();')
            ->setReturnType('static')
            ->setDocBlock(
                (new DocBlockWithAttributesGenerator('Create a new instance.'))
                    ->setTag(new ReturnTag('static')),
            );
    }
}
