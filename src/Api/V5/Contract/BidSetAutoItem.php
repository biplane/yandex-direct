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
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $KeywordId = null;

//    Can be omitted.
//    protected $MaxBid = null;

//    Can be omitted.
//    protected $Position = null;

//    Can be omitted.
//    protected $IncreasePercent = null;

//    Can be omitted.
//    protected $CalculateBy = null;

//    Can be omitted.
//    protected $ContextCoverage = null;

    protected $Scope = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    public function getKeywordId(): ?int
    {
        return $this->KeywordId ?? null;
    }

    /**
     * @return $this
     */
    public function setKeywordId(?int $value = null)
    {
        $this->KeywordId = $value;

        return $this;
    }

    public function getMaxBid(): ?int
    {
        return $this->MaxBid ?? null;
    }

    /**
     * @return $this
     */
    public function setMaxBid(?int $value = null)
    {
        $this->MaxBid = $value;

        return $this;
    }

    /**
     * @see PositionEnum
     */
    public function getPosition(): ?string
    {
        return $this->Position ?? null;
    }

    /**
     * @see PositionEnum
     *
     * @return $this
     */
    public function setPosition(?string $value = null)
    {
        $this->Position = $value;

        return $this;
    }

    public function getIncreasePercent(): ?int
    {
        return $this->IncreasePercent ?? null;
    }

    /**
     * @return $this
     */
    public function setIncreasePercent(?int $value = null)
    {
        $this->IncreasePercent = $value;

        return $this;
    }

    /**
     * @see CalculateByEnum
     */
    public function getCalculateBy(): ?string
    {
        return $this->CalculateBy ?? null;
    }

    /**
     * @see CalculateByEnum
     *
     * @return $this
     */
    public function setCalculateBy(?string $value = null)
    {
        $this->CalculateBy = $value;

        return $this;
    }

    public function getContextCoverage(): ?int
    {
        return $this->ContextCoverage ?? null;
    }

    /**
     * @return $this
     */
    public function setContextCoverage(?int $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * @see ScopeEnum
     *
     * @return string[]
     */
    public function getScope(): array
    {
        return $this->Scope;
    }

    /**
     * @see ScopeEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setScope(array $value)
    {
        $this->Scope = $value;

        return $this;
    }
}
