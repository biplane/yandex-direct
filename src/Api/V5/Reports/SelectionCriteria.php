<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use function array_values;
use function count;

final class SelectionCriteria
{
    /** @var string|null */
    private $dateFrom;

    /** @var string|null */
    private $dateTo;

    /** @var array<FilterItem>|null */
    private $filter;

    private function __construct()
    {
    }

    public static function create(): self
    {
        return new self();
    }

    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }

    public function setDateFrom(?string $value): self
    {
        $this->dateFrom = $value;

        return $this;
    }

    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }

    public function setDateTo(?string $value): self
    {
        $this->dateTo = $value;

        return $this;
    }

    /**
     * @return array<FilterItem>
     */
    public function getFilter(): array
    {
        return $this->filter ?? [];
    }

    /**
     * @param array<FilterItem> $filter
     */
    public function setFilter(array $filter): self
    {
        if (count($filter) === 0) {
            $this->filter = null;
        } else {
            $this->filter = array_values($filter);
        }

        return $this;
    }

    public function addFilter(FilterItem $item): self
    {
        $this->filter[] = $item;

        return $this;
    }
}
