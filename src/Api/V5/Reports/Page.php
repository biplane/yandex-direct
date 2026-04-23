<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use InvalidArgumentException;

final class Page
{
    private function __construct(private int $limit, private ?int $offset = null)
    {
        if ($offset !== null && $offset < 0) {
            throw new InvalidArgumentException('Offset must be more than or equal to 0');
        }
    }

    public static function create(int $limit, ?int $offset = null): self
    {
        return new self($limit, $offset);
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset ?? 0;
    }

    public function hasOffset(): bool
    {
        return $this->offset !== null;
    }
}
