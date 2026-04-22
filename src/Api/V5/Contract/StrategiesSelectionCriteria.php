<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategiesSelectionCriteria
{
//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $Types;

//    Can be omitted.
//    protected $IsArchived;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Ids
     *
     * @return list<int>
     */
    public function getIds(): array
    {
        return $this->Ids ?? [];
    }

    /**
     * Set Ids
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Get Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StrategyType
     *
     * @return list<'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'WB_MAXIMUM_CLICKS'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'MAX_PROFIT'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'UNKNOWN'>
     */
    public function getTypes(): array
    {
        return $this->Types ?? [];
    }

    /**
     * Set Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StrategyType
     *
     * @param list<'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'WB_MAXIMUM_CLICKS'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPC_PER_CAMPAIGN'|'AVERAGE_CPC_PER_FILTER'|'AVERAGE_CPA_PER_CAMPAIGN'|'AVERAGE_CPA_PER_FILTER'|'PAY_FOR_CONVERSION_PER_CAMPAIGN'|'PAY_FOR_CONVERSION_PER_FILTER'|'MAX_PROFIT'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'UNKNOWN'> $value
     *
     * @return $this
     */
    public function setTypes(array $value)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Get IsArchived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getIsArchived(): ?string
    {
        return $this->IsArchived ?? null;
    }

    /**
     * Set IsArchived
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setIsArchived(?string $value)
    {
        $this->IsArchived = $value;

        return $this;
    }
}
