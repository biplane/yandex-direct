<?php

declare(strict_types=1);

namespace Biplane\Build\Code;

use Biplane\Build\Model\Service;
use Biplane\Build\Model\ServiceMethod;
use Biplane\Build\Model\Type;
use Biplane\Build\Util\TypeUtil;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlock\Tag\ParamTag;
use Laminas\Code\Generator\DocBlock\Tag\ReturnTag;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\FileGenerator;
use Laminas\Code\Generator\MethodGenerator;
use Laminas\Code\Generator\ParameterGenerator;
use Psl\Regex;
use Psl\Vec;
use RuntimeException;

use function implode;
use function sprintf;

final class ServiceGenerator
{
    private string $indentation = '    ';

    private const string CONFIG_CLASS = 'Biplane\\YandexDirect\\Config';

    private const array SOAP_CLIENT_CLASS_MAP = [
        '@/v4/@' => 'Biplane\\YandexDirect\\Api\\ApiSoapClientV4',
        '@/(v5|v501)/@' => 'Biplane\\YandexDirect\\Api\\ApiSoapClientV5',
    ];

    public function generate(FileGenerator $file, Service $model): void
    {
        $class = new ClassGenerator();
        $class->setIndentation($this->indentation);

        $class
            ->setDocBlock(new DocBlockGenerator('Auto-generated code.'))
            ->setName($model->name)
            ->setNamespaceName($model->namespace)
            ->setExtendedClass($this->getSoapClientClass($model->wsdl))
            ->addConstant('ENDPOINT', $model->wsdl)
            ->addMethodFromGenerator($this->createConstructor($model->types));

        foreach ($model->methods as $method) {
            $class->addMethodFromGenerator($this->createMethod($method));
        }

        $file->setClass($class);
    }

    /**
     * @param non-empty-string $wsdl
     *
     * @return class-string
     */
    private function getSoapClientClass(string $wsdl): string
    {
        foreach (self::SOAP_CLIENT_CLASS_MAP as $pattern => $className) {
            if (Regex\matches($wsdl, $pattern)) {
                return $className;
            }
        }

        throw new RuntimeException(sprintf('Could not determine SOAP client class for WSDL: %s', $wsdl));
    }

    /** @param list<Type> $types */
    private function createConstructor(array $types): MethodGenerator
    {
        $code = [
            '$options[\'classmap\'] = [',
            implode(ClassGenerator::LINE_FEED, $this->generateClassMap($types)),
            '];',
            'parent::__construct(self::ENDPOINT, $config, $options);',
        ];

        $generator = new MethodGenerator('__construct');

        $generator
            ->setVisibility(MethodGenerator::VISIBILITY_PUBLIC)
            ->setParameter(new ParameterGenerator('config', self::CONFIG_CLASS))
            ->setParameter(new ParameterGenerator('options', 'array'))
            ->setDocBlock(
                (new DocBlockGenerator())
                    ->setShortDescription('Constructor')
                    ->setTag(new ParamTag('options', ['array<string, mixed>'])),
            )
            ->setBody(implode(ClassGenerator::LINE_FEED, $code));

        return $generator;
    }

    private function createMethod(ServiceMethod $method): MethodGenerator
    {
        $docGenerator = (new DocBlockGenerator())
            ->setShortDescription(sprintf('Calls operation: %s', $method->getOperationName()))
            ->setLongDescription($method->getDoc());

        $generator = (new MethodGenerator($method->name))
            ->setVisibility(MethodGenerator::VISIBILITY_PUBLIC)
            ->setDocBlock($docGenerator);

        $args = [];

        foreach ($method->parameters as $param) {
            $generator->setParameter(new ParameterGenerator($param->name, $param->type->asPhpType()));
            $docGenerator->setTag(
                new ParamTag(
                    $param->name,
                    TypeUtil::splitUnionTypes($param->type->asDocBlockType()),
                ),
            );

            $args[] = '$' . $param->name;
        }

        $generator->setBody(sprintf(
            'return $this->__soapCall(\'%s\', [%s]);',
            $method->getOperationName(),
            implode(', ', $args),
        ));

        $generator->setReturnType($method->returnType->asPhpType());
        $docGenerator->setTag(new ReturnTag($method->returnType->asDocBlockType()));

        return $generator;
    }

    /**
     * @param list<Type> $types
     *
     * @return list<non-empty-string>
     */
    private function generateClassMap(array $types): array
    {
        return Vec\map(
            Vec\filter($types, static fn (Type $type): bool => ! $type->isEnum()),
            fn (Type $type) => sprintf(
                "%s'%s' => '%s',",
                $this->indentation,
                $type->getXsdTypeName(),
                $type->getFQN(),
            ),
        );
    }
}
