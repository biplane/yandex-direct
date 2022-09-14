<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordBidActionResult extends ActionResultBase
{
//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $KeywordId = null;

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
}
