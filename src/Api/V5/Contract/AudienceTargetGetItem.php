<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetGetItem extends AudienceTargetBase
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $RetargetingListId = null;

//    Can be omitted.
//    protected $InterestId = null;

//    Can be omitted.
//    protected $State = null;

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

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

    public function getRetargetingListId(): ?int
    {
        return $this->RetargetingListId ?? null;
    }

    /**
     * @return $this
     */
    public function setRetargetingListId(?int $value = null)
    {
        $this->RetargetingListId = $value;

        return $this;
    }

    public function getInterestId(): ?int
    {
        return $this->InterestId ?? null;
    }

    /**
     * @return $this
     */
    public function setInterestId(?int $value = null)
    {
        $this->InterestId = $value;

        return $this;
    }

    /**
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * @see StateEnum
     *
     * @return $this
     */
    public function setState(?string $value = null)
    {
        $this->State = $value;

        return $this;
    }
}
