<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordAddItem
{
    /** @var string */
    protected $Keyword;

    /** @var int */
    protected $AdGroupId;

//    Can be omitted.
//    protected $Bid;

//    Can be omitted.
//    protected $AutotargetingSearchBidIsAuto;

//    Can be omitted.
//    protected $ContextBid;

//    Can be omitted.
//    protected $StrategyPriority;

//    Can be omitted.
//    protected $UserParam1;

//    Can be omitted.
//    protected $UserParam2;

//    Can be omitted.
//    protected $AutotargetingCategories;

//    Can be omitted.
//    protected $AutotargetingBrandOptions;

//    Can be omitted.
//    protected $AutotargetingSettings;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Keyword
     */
    public function getKeyword(): string
    {
        return $this->Keyword;
    }

    /**
     * Set Keyword
     *
     * @return $this
     */
    public function setKeyword(string $value)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Get AdGroupId
     */
    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * Set AdGroupId
     *
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Get Bid
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(?int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Get AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAutotargetingSearchBidIsAuto(): ?string
    {
        return $this->AutotargetingSearchBidIsAuto ?? null;
    }

    /**
     * Set AutotargetingSearchBidIsAuto
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAutotargetingSearchBidIsAuto(?string $value)
    {
        $this->AutotargetingSearchBidIsAuto = $value;

        return $this;
    }

    /**
     * Get ContextBid
     */
    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * Set ContextBid
     *
     * @return $this
     */
    public function setContextBid(?int $value)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Get StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @return 'LOW'|'NORMAL'|'HIGH'|null
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * Set StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @param 'LOW'|'NORMAL'|'HIGH'|null $value
     *
     * @return $this
     */
    public function setStrategyPriority(?string $value)
    {
        $this->StrategyPriority = $value;

        return $this;
    }

    /**
     * Get UserParam1
     */
    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * Set UserParam1
     *
     * @return $this
     */
    public function setUserParam1(?string $value)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Get UserParam2
     */
    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * Set UserParam2
     *
     * @return $this
     */
    public function setUserParam2(?string $value)
    {
        $this->UserParam2 = $value;

        return $this;
    }

    /**
     * Get AutotargetingCategories
     *
     * @return list<AutotargetingCategory>
     */
    public function getAutotargetingCategories(): array
    {
        return $this->AutotargetingCategories ?? [];
    }

    /**
     * Set AutotargetingCategories
     *
     * @param list<AutotargetingCategory> $value
     *
     * @return $this
     */
    public function setAutotargetingCategories(array $value)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }

    /**
     * Get AutotargetingBrandOptions
     *
     * @return list<AutotargetingBrandOption>
     */
    public function getAutotargetingBrandOptions(): array
    {
        return $this->AutotargetingBrandOptions ?? [];
    }

    /**
     * Set AutotargetingBrandOptions
     *
     * @param list<AutotargetingBrandOption> $value
     *
     * @return $this
     */
    public function setAutotargetingBrandOptions(array $value)
    {
        $this->AutotargetingBrandOptions = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettings
     */
    public function getAutotargetingSettings(): ?AutotargetingSettings
    {
        return $this->AutotargetingSettings ?? null;
    }

    /**
     * Set AutotargetingSettings
     *
     * @return $this
     */
    public function setAutotargetingSettings(?AutotargetingSettings $value)
    {
        $this->AutotargetingSettings = $value;

        return $this;
    }
}
