<?php

declare(strict_types=1);

namespace Biplane\Build\Model;

final readonly class Parameter
{
    /** @param non-empty-string $name */
    public function __construct(public string $name, public TypeDescriptor $type)
    {
    }
}
