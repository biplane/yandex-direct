<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets MembershipLifeSpan.
     *
     * @return int|null
     */
    public function getMembershipLifeSpan()
    {
        return isset($this->MembershipLifeSpan) ? $this->MembershipLifeSpan : null;
    }

    /**
     * Sets MembershipLifeSpan.
     *
     * @param int|null $value
     * @return $this
     */
    public function setMembershipLifeSpan($value = null)
    {
        $this->MembershipLifeSpan = $value;

        return $this;
    }

    /**
     * Gets ExternalId.
     *
     * @return int
     */
    public function getExternalId()
    {
        return $this->ExternalId;
    }

    /**
     * Sets ExternalId.
     *
     * @param int $value
     * @return $this
     */
    public function setExternalId($value)
    {
        $this->ExternalId = $value;

        return $this;
    }


}

