<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidActionResult extends ActionResultBase
{
//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $KeywordId = null;

    /**
     * Creates a new instance of KeywordBidActionResult.
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
}
