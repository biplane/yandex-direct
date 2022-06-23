<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use InvalidArgumentException;

final class Page
{
    /** @var int */
    private $limit;
    /** @var int|null */
    private $offset;

    private function __construct(int $limit, ?int $offset)
    {
        if ($offset !== null && $offset < 0) {
            throw new InvalidArgumentException('Offset must be more than or equal to 0');
        }

        $this->limit = $limit;
        $this->offset = $offset;
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
