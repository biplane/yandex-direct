<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use function array_values;
use function is_string;

final class FilterItem
{
    /** @var string */
    private $field;

    /** @var string */
    private $operator;

    /** @var array<string> */
    private $values;

    /**
     * @param array<string> $values
     */
    private function __construct(string $field, string $operator, array $values)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
    }

    /**
     * @param array<string>|string $values
     * @psalm-param FilterOperatorEnum::* $operator
     */
    public static function create(string $field, string $operator, $values): self
    {
        return new self($field, $operator, is_string($values) ? [$values] : array_values($values));
    }

    public function getField(): string
    {
        return $this->field;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @return array<string>
     */
    public function getValues(): array
    {
        return $this->values;
    }
}
