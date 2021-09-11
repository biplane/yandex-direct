<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidSetAutoItem
{
//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $KeywordId = null;

//    Can be omit.
//    protected $MaxBid = null;

//    Can be omit.
//    protected $Position = null;

//    Can be omit.
//    protected $IncreasePercent = null;

//    Can be omit.
//    protected $CalculateBy = null;

//    Can be omit.
//    protected $ContextCoverage = null;

    protected $Scope = [];

    /**
     * Creates a new instance of BidSetAutoItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets KeywordId.
     */
    public function getKeywordId(): ?int
    {
        return $this->KeywordId ?? null;
    }

    /**
     * Sets KeywordId.
     *
     * @return $this
     */
    public function setKeywordId(?int $value = null)
    {
        $this->KeywordId = $value;

        return $this;
    }

    /**
     * Gets MaxBid.
     */
    public function getMaxBid(): ?int
    {
        return $this->MaxBid ?? null;
    }

    /**
     * Sets MaxBid.
     *
     * @return $this
     */
    public function setMaxBid(?int $value = null)
    {
        $this->MaxBid = $value;

        return $this;
    }

    /**
     * Gets Position.
     *
     * @see PositionEnum
     */
    public function getPosition(): ?string
    {
        return $this->Position ?? null;
    }

    /**
     * Sets Position.
     *
     * @see PositionEnum
     *
     * @return $this
     */
    public function setPosition(?string $value = null)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Gets IncreasePercent.
     */
    public function getIncreasePercent(): ?int
    {
        return $this->IncreasePercent ?? null;
    }

    /**
     * Sets IncreasePercent.
     *
     * @return $this
     */
    public function setIncreasePercent(?int $value = null)
    {
        $this->IncreasePercent = $value;

        return $this;
    }

    /**
     * Gets CalculateBy.
     *
     * @see CalculateByEnum
     */
    public function getCalculateBy(): ?string
    {
        return $this->CalculateBy ?? null;
    }

    /**
     * Sets CalculateBy.
     *
     * @see CalculateByEnum
     *
     * @return $this
     */
    public function setCalculateBy(?string $value = null)
    {
        $this->CalculateBy = $value;

        return $this;
    }

    /**
     * Gets ContextCoverage.
     */
    public function getContextCoverage(): ?int
    {
        return $this->ContextCoverage ?? null;
    }

    /**
     * Sets ContextCoverage.
     *
     * @return $this
     */
    public function setContextCoverage(?int $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Gets Scope.
     *
     * @see ScopeEnum
     *
     * @return string[]
     */
    public function getScope(): array
    {
        return $this->Scope;
    }

    /**
     * Sets Scope.
     *
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
