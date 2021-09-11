<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListRuleArgumentItem
{
//    Can be omit.
//    protected $MembershipLifeSpan = null;

    protected $ExternalId = null;

    /**
     * Creates a new instance of RetargetingListRuleArgumentItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets MembershipLifeSpan.
     */
    public function getMembershipLifeSpan(): ?int
    {
        return $this->MembershipLifeSpan ?? null;
    }

    /**
     * Sets MembershipLifeSpan.
     *
     * @return $this
     */
    public function setMembershipLifeSpan(?int $value = null)
    {
        $this->MembershipLifeSpan = $value;

        return $this;
    }

    /**
     * Gets ExternalId.
     */
    public function getExternalId(): int
    {
        return $this->ExternalId;
    }

    /**
     * Sets ExternalId.
     *
     * @return $this
     */
    public function setExternalId(int $value)
    {
        $this->ExternalId = $value;

        return $this;
    }
}
