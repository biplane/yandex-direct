<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use function array_map;
use function array_values;
use function is_array;

final class FilterItem
{
    /** @param array<string> $values */
    private function __construct(private string $field, private string $operator, private array $values)
    {
    }

    /**
     * @param array<int|string>|int|string $values
     * @psalm-param FilterOperatorEnum::* $operator
     */
    public static function create(string $field, string $operator, array|int|string $values): self
    {
        return new self(
            $field,
            $operator,
            array_map('strval', is_array($values) ? array_values($values) : [$values]),
        );
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    /** @return array<string> */
    public function getValues(): array
    {
        return $this->values;
    }
}
