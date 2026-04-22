<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

final class FilterOperatorEnum
{
    public const string DOES_NOT_START_WITH_ALL_IGNORE_CASE = 'DOES_NOT_START_WITH_ALL_IGNORE_CASE';
    public const string DOES_NOT_START_WITH_IGNORE_CASE = 'DOES_NOT_START_WITH_IGNORE_CASE';
    public const string EQUALS = 'EQUALS';
    public const string GREATER_THAN = 'GREATER_THAN';
    public const string IN = 'IN';
    public const string LESS_THAN = 'LESS_THAN';
    public const string NOT_EQUALS = 'NOT_EQUALS';
    public const string NOT_IN = 'NOT_IN';
    public const string STARTS_WITH_ANY_IGNORE_CASE = 'STARTS_WITH_ANY_IGNORE_CASE';
    public const string STARTS_WITH_IGNORE_CASE = 'STARTS_WITH_IGNORE_CASE';
}
