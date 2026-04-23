<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

final class OrderBy
{
    private function __construct(private string $field, private string $sortOrder)
    {
    }

    /** @psalm-param SortOrderEnum::* $sortOrder */
    public static function create(string $field, string $sortOrder = SortOrderEnum::ASCENDING): self
    {
        return new self($field, $sortOrder);
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function getSortOrder(): string
    {
        return $this->sortOrder;
    }
}
