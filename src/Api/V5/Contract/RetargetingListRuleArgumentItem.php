<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingListRuleArgumentItem
{
//    Can be omitted.
//    protected $MembershipLifeSpan;

    /** @var int */
    protected $ExternalId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get MembershipLifeSpan
     */
    public function getMembershipLifeSpan(): ?int
    {
        return $this->MembershipLifeSpan ?? null;
    }

    /**
     * Set MembershipLifeSpan
     *
     * @return $this
     */
    public function setMembershipLifeSpan(?int $value)
    {
        $this->MembershipLifeSpan = $value;

        return $this;
    }

    /**
     * Get ExternalId
     */
    public function getExternalId(): int
    {
        return $this->ExternalId;
    }

    /**
     * Set ExternalId
     *
     * @return $this
     */
    public function setExternalId(int $value)
    {
        $this->ExternalId = $value;

        return $this;
    }
}
