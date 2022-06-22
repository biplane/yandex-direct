<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

final class Page
{
    /** @var int */
    private $limit;
    /** @var int */
    private $offset;

    private function __construct(int $limit, int $offset)
    {
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public static function create(int $limit, int $offset = 0): self
    {
        return new self($limit, $offset);
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
