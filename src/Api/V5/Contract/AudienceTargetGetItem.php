<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetGetItem extends AudienceTargetBase
{
//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $RetargetingListId = null;

//    Can be omit.
//    protected $InterestId = null;

//    Can be omit.
//    protected $State = null;

    /**
     * Creates a new instance of AudienceTargetGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

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
     * Gets RetargetingListId.
     */
    public function getRetargetingListId(): ?int
    {
        return $this->RetargetingListId ?? null;
    }

    /**
     * Sets RetargetingListId.
     *
     * @return $this
     */
    public function setRetargetingListId(?int $value = null)
    {
        $this->RetargetingListId = $value;

        return $this;
    }

    /**
     * Gets InterestId.
     */
    public function getInterestId(): ?int
    {
        return $this->InterestId ?? null;
    }

    /**
     * Sets InterestId.
     *
     * @return $this
     */
    public function setInterestId(?int $value = null)
    {
        $this->InterestId = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @see StateEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Sets State.
     *
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
