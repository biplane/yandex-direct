<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListRuleArgumentItem
{
//    Can be omitted.
//    protected $MembershipLifeSpan = null;

    protected $ExternalId = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMembershipLifeSpan(): ?int
    {
        return $this->MembershipLifeSpan ?? null;
    }

    /**
     * @return $this
     */
    public function setMembershipLifeSpan(?int $value = null)
    {
        $this->MembershipLifeSpan = $value;

        return $this;
    }

    public function getExternalId(): int
    {
        return $this->ExternalId;
    }

    /**
     * @return $this
     */
    public function setExternalId(int $value)
    {
        $this->ExternalId = $value;

        return $this;
    }
}
