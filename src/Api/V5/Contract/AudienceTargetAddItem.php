<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AudienceTargetAddItem extends AudienceTargetBase
{
    /** @var int */
    protected $AdGroupId;

//    Can be omitted.
//    protected $RetargetingListId;

//    Can be omitted.
//    protected $InterestId;

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
}
