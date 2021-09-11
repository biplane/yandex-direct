<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupUpdateItem extends AdGroupBase
{
    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $MobileAppAdGroup = null;

//    Can be omit.
//    protected $DynamicTextAdGroup = null;

//    Can be omit.
//    protected $SmartAdGroup = null;

    /**
     * Creates a new instance of AdGroupUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroup.
     */
    public function getMobileAppAdGroup(): ?MobileAppAdGroupUpdate
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupUpdate $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroup.
     */
    public function getDynamicTextAdGroup(): ?DynamicTextAdGroup
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroup $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Gets SmartAdGroup.
     */
    public function getSmartAdGroup(): ?SmartAdGroupUpdate
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * Sets SmartAdGroup.
     *
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupUpdate $value = null)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }
}
