<?php

declare(strict_types=1);

namespace Biplane\Build\Model;

final readonly class Service
{
    /**
     * @param non-empty-string    $wsdl
     * @param non-empty-string    $name
     * @param non-empty-string    $namespace
     * @param list<Type>          $types
     * @param list<ServiceMethod> $methods
     */
    public function __construct(
        public string $wsdl,
        public string $name,
        public string $namespace,
        public array $types,
        public array $methods,
    ) {
    }
}
