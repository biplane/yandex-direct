<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BidSetAutoItem
{
//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $KeywordId;

//    Can be omitted.
//    protected $MaxBid;

//    Can be omitted.
//    protected $Position;

//    Can be omitted.
//    protected $IncreasePercent;

//    Can be omitted.
//    protected $CalculateBy;

//    Can be omitted.
//    protected $ContextCoverage;

    /** @var non-empty-list<'SEARCH'|'NETWORK'> */
    protected $Scope;

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
     * Get CampaignId
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(?int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get AdGroupId
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Set AdGroupId
     *
     * @return $this
     */
    public function setAdGroupId(?int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Get KeywordId
     */
    public function getKeywordId(): ?int
    {
        return $this->KeywordId ?? null;
    }

    /**
     * Set KeywordId
     *
     * @return $this
     */
    public function setKeywordId(?int $value)
    {
        $this->KeywordId = $value;

        return $this;
    }

    /**
     * Get MaxBid
     */
    public function getMaxBid(): ?int
    {
        return $this->MaxBid ?? null;
    }

    /**
     * Set MaxBid
     *
     * @return $this
     */
    public function setMaxBid(?int $value)
    {
        $this->MaxBid = $value;

        return $this;
    }

    /**
     * Get Position
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PositionEnum
     *
     * @return 'PREMIUMFIRST'|'PREMIUMBLOCK'|'FOOTERFIRST'|'FOOTERBLOCK'|'P11'|'P12'|'P13'|'P14'|'P21'|'P22'|'P23'|'P24'|null
     */
    public function getPosition(): ?string
    {
        return $this->Position ?? null;
    }

    /**
     * Set Position
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PositionEnum
     *
     * @param 'PREMIUMFIRST'|'PREMIUMBLOCK'|'FOOTERFIRST'|'FOOTERBLOCK'|'P11'|'P12'|'P13'|'P14'|'P21'|'P22'|'P23'|'P24'|null $value
     *
     * @return $this
     */
    public function setPosition(?string $value)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Get IncreasePercent
     */
    public function getIncreasePercent(): ?int
    {
        return $this->IncreasePercent ?? null;
    }

    /**
     * Set IncreasePercent
     *
     * @return $this
     */
    public function setIncreasePercent(?int $value)
    {
        $this->IncreasePercent = $value;

        return $this;
    }

    /**
     * Get CalculateBy
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CalculateByEnum
     *
     * @return 'VALUE'|'DIFF'|null
     */
    public function getCalculateBy(): ?string
    {
        return $this->CalculateBy ?? null;
    }

    /**
     * Set CalculateBy
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CalculateByEnum
     *
     * @param 'VALUE'|'DIFF'|null $value
     *
     * @return $this
     */
    public function setCalculateBy(?string $value)
    {
        $this->CalculateBy = $value;

        return $this;
    }

    /**
     * Get ContextCoverage
     */
    public function getContextCoverage(): ?int
    {
        return $this->ContextCoverage ?? null;
    }

    /**
     * Set ContextCoverage
     *
     * @return $this
     */
    public function setContextCoverage(?int $value)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Get Scope
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ScopeEnum
     *
     * @return non-empty-list<'SEARCH'|'NETWORK'>
     */
    public function getScope(): array
    {
        return $this->Scope;
    }

    /**
     * Set Scope
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ScopeEnum
     *
     * @param non-empty-list<'SEARCH'|'NETWORK'> $value
     *
     * @return $this
     */
    public function setScope(array $value)
    {
        $this->Scope = $value;

        return $this;
    }
}
