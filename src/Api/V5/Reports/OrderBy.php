<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum;

final class OrderBy
{
    /** @var string */
    private $field;

    /** @var string */
    private $sortOrder;

    private function __construct(string $field, string $sortOrder)
    {
        $this->field = $field;
        $this->sortOrder = $sortOrder;
    }

    /**
     * @psalm-param SortOrderEnum::* $sortOrder
     */
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
