<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetSelectionCriteria
{
//    Can be omitted.
//    protected $Ids = null;

//    Can be omitted.
//    protected $AdGroupIds = null;

//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $RetargetingListIds = null;

//    Can be omitted.
//    protected $InterestIds = null;

//    Can be omitted.
//    protected $States = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdGroupIds(?array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getRetargetingListIds(): ?array
    {
        return $this->RetargetingListIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setRetargetingListIds(?array $value = null)
    {
        $this->RetargetingListIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getInterestIds(): ?array
    {
        return $this->InterestIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setInterestIds(?array $value = null)
    {
        $this->InterestIds = $value;

        return $this;
    }

    /**
     * @see AudienceTargetStateEnum
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->States ?? null;
    }

    /**
     * @see AudienceTargetStateEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStates(?array $value = null)
    {
        $this->States = $value;

        return $this;
    }
}
