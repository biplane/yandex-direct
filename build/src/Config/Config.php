<?php

declare(strict_types=1);

namespace Biplane\Build\Config;

use Psl\Dict;
use Psl\Str;
use Psl\Type;
use RuntimeException;
use Symfony\Component\Filesystem\Path;

use function sprintf;
use function strlen;

final readonly class Config
{
    /** @var array<non-empty-string, non-empty-string> */
    private array $prefixNsToPathMap;

    /**
     * @param iterable<non-empty-string, non-empty-string>                       $psr4
     * @param array<non-empty-string, non-empty-string>                          $schemaNamespaceMap
     * @param array<non-empty-string, array<non-empty-string, non-empty-string>> $renameTypes,
     * @param list<ServiceConfig>                                                $services
     */
    public function __construct(iterable $psr4, public array $schemaNamespaceMap, public array $renameTypes, public array $services)
    {
        $this->prefixNsToPathMap = Dict\sort_by_key(
            $psr4,
            static fn (string $a, string $b): int => strlen($b) <=> strlen($a),
        );
    }

    /**
     * @param non-empty-string $namespace
     *
     * @return non-empty-string
     */
    public function resolvePathForNamespace(string $namespace): string
    {
        foreach ($this->prefixNsToPathMap as $prefix => $path) {
            if (! Str\starts_with($namespace, $prefix)) {
                continue;
            }

            $subNs = Str\strip_prefix($namespace, $prefix);

            if ($subNs === '') {
                return $path;
            }

            return Type\non_empty_string()->assert(Path::makeAbsolute($subNs, $path));
        }

        throw new RuntimeException(sprintf('Could not resolve path for namespace "%s"', $namespace));
    }

    /** @return Type\TypeInterface<self> */
    public static function type(): Type\TypeInterface
    {
        return Type\converted(
            Type\shape([
                'psr4' => Type\dict(Type\non_empty_string(), Type\non_empty_string()),
                'schema_ns_map' => Type\dict(Type\non_empty_string(), Type\non_empty_string()),
                'rename_types' => Type\dict(
                    Type\non_empty_string(),
                    Type\dict(Type\non_empty_string(), Type\non_empty_string()),
                ),
                'services' => Type\vec(ServiceConfig::type()),
            ]),
            Type\instance_of(self::class),
            static fn (array $data): Config => new Config(
                psr4: $data['psr4'],
                schemaNamespaceMap: $data['schema_ns_map'],
                renameTypes: $data['rename_types'],
                services: $data['services'],
            ),
        );
    }
}
