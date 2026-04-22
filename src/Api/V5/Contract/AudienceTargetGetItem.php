<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AudienceTargetGetItem extends AudienceTargetBase
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $RetargetingListId;

//    Can be omitted.
//    protected $InterestId;

//    Can be omitted.
//    protected $State;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

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
     * Get RetargetingListId
     */
    public function getRetargetingListId(): ?int
    {
        return $this->RetargetingListId ?? null;
    }

    /**
     * Set RetargetingListId
     *
     * @return $this
     */
    public function setRetargetingListId(?int $value)
    {
        $this->RetargetingListId = $value;

        return $this;
    }

    /**
     * Get InterestId
     */
    public function getInterestId(): ?int
    {
        return $this->InterestId ?? null;
    }

    /**
     * Set InterestId
     *
     * @return $this
     */
    public function setInterestId(?int $value)
    {
        $this->InterestId = $value;

        return $this;
    }

    /**
     * Get State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @return 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Set State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StateEnum
     *
     * @param 'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'|'DELETED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setState(?string $value)
    {
        $this->State = $value;

        return $this;
    }
}
