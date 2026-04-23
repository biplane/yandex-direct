<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

use Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum;
use Biplane\YandexDirect\Api\V5\Contract\YesNoEnum;

use function array_values;
use function count;
use function is_bool;

final class ReportDefinition
{
    /** @phpcsSuppress SlevomatCodingStandard.Classes.RequireConstructorPropertyPromotion.RequiredConstructorPropertyPromotion */
    private SelectionCriteria $selectionCriteria;

    /** @var array<string>|null */
    private ?array $goals = null;

    /** @var array<string>|null */
    private ?array $attributionModels = null;

    /** @var array<string> */
    private array $fieldNames = [];

    private ?Page $page = null;

    /** @var array<OrderBy>|null */
    private ?array $orderBy = null;

    private ?string $reportName = null;

    private ?string $reportType = null;

    private ?string $dateRangeType = null;

    private string $format = 'TSV';

    private ?string $includeVAT = null;

    private function __construct(SelectionCriteria $selectionCriteria)
    {
        $this->selectionCriteria = $selectionCriteria;
    }

    public static function create(?SelectionCriteria $selectionCriteria = null): self
    {
        return new self($selectionCriteria ?? SelectionCriteria::create());
    }

    public function getSelectionCriteria(): SelectionCriteria
    {
        return $this->selectionCriteria;
    }

    public function setSelectionCriteria(SelectionCriteria $selectionCriteria): self
    {
        $this->selectionCriteria = $selectionCriteria;

        return $this;
    }

    /** @return array<string> */
    public function getGoals(): array
    {
        return $this->goals ?? [];
    }

    /** @param array<string> $goals */
    public function setGoals(array $goals): self
    {
        if (count($goals) === 0) {
            $this->goals = null;
        } else {
            $this->goals = array_values($goals);
        }

        return $this;
    }

    /** @return array<string> */
    public function getAttributionModels(): array
    {
        return $this->attributionModels ?? [];
    }

    /**
     * @param array<string> $attributionModels
     * @psalm-param array<AttributionModelEnum::*> $attributionModels
     */
    public function setAttributionModels(array $attributionModels): self
    {
        if (count($attributionModels) === 0) {
            $this->attributionModels = null;
        } else {
            $this->attributionModels = array_values($attributionModels);
        }

        return $this;
    }

    /** @return array<string> */
    public function getFieldNames(): array
    {
        return $this->fieldNames;
    }

    /**
     * @param array<string> $names
     * @psalm-param array<FieldEnum::*> $names
     */
    public function setFieldNames(array $names): self
    {
        $this->fieldNames = array_values($names);

        return $this;
    }

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    /** @return array<OrderBy> */
    public function getOrderBy(): array
    {
        return $this->orderBy ?? [];
    }

    /** @param array<OrderBy> $items */
    public function setOrderBy(array $items): self
    {
        if (count($items) === 0) {
            $this->orderBy = null;
        } else {
            $this->orderBy = array_values($items);
        }

        return $this;
    }

    public function addOrderBy(OrderBy $item): self
    {
        $this->orderBy[] = $item;

        return $this;
    }

    public function getReportName(): ?string
    {
        return $this->reportName;
    }

    public function setReportName(string $name): self
    {
        $this->reportName = $name;

        return $this;
    }

    public function getReportType(): ?string
    {
        return $this->reportType;
    }

    /** @psalm-param ReportTypeEnum::* $reportType */
    public function setReportType(string $reportType): self
    {
        $this->reportType = $reportType;

        return $this;
    }

    public function getDateRangeType(): ?string
    {
        return $this->dateRangeType;
    }

    /** @psalm-param DateRangeTypeEnum::* $dateRangeType */
    public function setDateRangeType(string $dateRangeType): self
    {
        $this->dateRangeType = $dateRangeType;

        return $this;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function getIncludeVAT(): ?string
    {
        return $this->includeVAT;
    }

    /** @psalm-param YesNoEnum::*|bool $includeVAT */
    public function setIncludeVAT(string|bool $includeVAT): self
    {
        if (is_bool($includeVAT)) {
            $includeVAT = $includeVAT ? YesNoEnum::YES : YesNoEnum::NO;
        }

        $this->includeVAT = $includeVAT;

        return $this;
    }
}
