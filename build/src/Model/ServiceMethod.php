<?php

declare(strict_types=1);

namespace Biplane\Build\Model;

use Psl\Type;
use Soap\Engine\Metadata\Model\Method;

final readonly class ServiceMethod
{
    /**
     * @param non-empty-string $name
     * @param list<Parameter>  $parameters
     */
    public function __construct(public string $name, public array $parameters, public TypeDescriptor $returnType, private Method $metadata)
    {
    }

    /** @return non-empty-string */
    public function getOperationName(): string
    {
        return Type\non_empty_string()->assert($this->metadata->getName());
    }

    public function getDoc(): string
    {
        return $this->metadata->getMeta()->docs()->unwrapOr('');
    }
}
