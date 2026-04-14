<?php

declare(strict_types=1);

namespace Biplane\Build\Config;

use Psl\Type;

final readonly class ServiceConfig
{
    /**
     * @param non-empty-string       $wsdl
     * @param non-empty-string       $serviceName
     * @param non-empty-string       $namespace
     * @param list<non-empty-string> $excludeOperations
     */
    public function __construct(public string $wsdl, public string $serviceName, public string $namespace, public array $excludeOperations = [])
    {
    }

    /** @return Type\TypeInterface<self> */
    public static function type(): Type\TypeInterface
    {
        return Type\converted(
            Type\shape([
                'wsdl' => Type\non_empty_string(),
                'service_name' => Type\non_empty_string(),
                'namespace' => Type\non_empty_string(),
                'exclude_operations' => Type\optional(Type\vec(Type\non_empty_string())),
            ]),
            Type\instance_of(self::class),
            static fn (array $data): ServiceConfig => new ServiceConfig(
                wsdl: $data['wsdl'],
                serviceName: $data['service_name'],
                namespace: $data['namespace'],
                excludeOperations: $data['exclude_operations'] ?? [],
            ),
        );
    }
}
