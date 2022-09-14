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
    protected $AdGroupId = null;

//    Can be omitted.
//    protected $RetargetingListId = null;

//    Can be omitted.
//    protected $InterestId = null;

    public function getAdGroupId(): int
    {
        return $this->AdGroupId;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(int $value)
    {
        $this->AdGroupId = $value;

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
}
