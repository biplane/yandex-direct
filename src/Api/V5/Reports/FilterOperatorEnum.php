<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

final class FilterOperatorEnum
{
    public const DOES_NOT_START_WITH_ALL_IGNORE_CASE = 'DOES_NOT_START_WITH_ALL_IGNORE_CASE';
    public const DOES_NOT_START_WITH_IGNORE_CASE = 'DOES_NOT_START_WITH_IGNORE_CASE';
    public const EQUALS = 'EQUALS';
    public const GREATER_THAN = 'GREATER_THAN';
    public const IN = 'IN';
    public const LESS_THAN = 'LESS_THAN';
    public const NOT_EQUALS = 'NOT_EQUALS';
    public const NOT_IN = 'NOT_IN';
    public const STARTS_WITH_ANY_IGNORE_CASE = 'STARTS_WITH_ANY_IGNORE_CASE';
    public const STARTS_WITH_IGNORE_CASE = 'STARTS_WITH_IGNORE_CASE';
}
