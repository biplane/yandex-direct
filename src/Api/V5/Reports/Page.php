<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

final class Page
{
    /** @var int */
    private $limit;

    private function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    public static function create(int $limit): self
    {
        return new self($limit);
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
