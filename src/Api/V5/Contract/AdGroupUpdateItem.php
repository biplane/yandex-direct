<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdGroupUpdateItem extends AdGroupBase
{
    /** @var int */
    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $MobileAppAdGroup;

//    Can be omitted.
//    protected $DynamicTextAdGroup;

//    Can be omitted.
//    protected $DynamicTextFeedAdGroup;

//    Can be omitted.
//    protected $SmartAdGroup;

//    Can be omitted.
//    protected $TextAdGroupFeedParams;

//    Can be omitted.
//    protected $UnifiedAdGroup;

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
     * Get Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get MobileAppAdGroup
     */
    public function getMobileAppAdGroup(): ?MobileAppAdGroupUpdate
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * Set MobileAppAdGroup
     *
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupUpdate $value)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Get DynamicTextAdGroup
     */
    public function getDynamicTextAdGroup(): ?DynamicTextAdGroup
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * Set DynamicTextAdGroup
     *
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroup $value)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Get DynamicTextFeedAdGroup
     */
    public function getDynamicTextFeedAdGroup(): ?DynamicTextFeedAdGroupUpdate
    {
        return $this->DynamicTextFeedAdGroup ?? null;
    }

    /**
     * Set DynamicTextFeedAdGroup
     *
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(?DynamicTextFeedAdGroupUpdate $value)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    /**
     * Get SmartAdGroup
     */
    public function getSmartAdGroup(): ?SmartAdGroupUpdate
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * Set SmartAdGroup
     *
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupUpdate $value)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    /**
     * Get TextAdGroupFeedParams
     */
    public function getTextAdGroupFeedParams(): ?TextAdGroupFeedParamsUpdate
    {
        return $this->TextAdGroupFeedParams ?? null;
    }

    /**
     * Set TextAdGroupFeedParams
     *
     * @return $this
     */
    public function setTextAdGroupFeedParams(?TextAdGroupFeedParamsUpdate $value)
    {
        $this->TextAdGroupFeedParams = $value;

        return $this;
    }

    /**
     * Get UnifiedAdGroup
     */
    public function getUnifiedAdGroup(): ?UnifiedAdGroupUpdate
    {
        return $this->UnifiedAdGroup ?? null;
    }

    /**
     * Set UnifiedAdGroup
     *
     * @return $this
     */
    public function setUnifiedAdGroup(?UnifiedAdGroupUpdate $value)
    {
        $this->UnifiedAdGroup = $value;

        return $this;
    }
}
