<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceTargetAddItem extends AudienceTargetBase
{
    protected $AdGroupId = null;

//    Can be omit.
//    protected $RetargetingListId = null;

//    Can be omit.
//    protected $InterestId = null;

    /**
     * Creates a new instance of AudienceTargetAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

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
}
