<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdGroupsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omit.
//    protected $MobileAppAdGroupFieldNames = null;

//    Can be omit.
//    protected $DynamicTextAdGroupFieldNames = null;

//    Can be omit.
//    protected $DynamicTextFeedAdGroupFieldNames = null;

//    Can be omit.
//    protected $SmartAdGroupFieldNames = null;

    /**
     * Creates a new instance of GetAdGroupsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): AdGroupsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(AdGroupsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see AdGroupFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @see AdGroupFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroupFieldNames.
     *
     * @see MobileAppAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppAdGroupFieldNames(): ?array
    {
        return $this->MobileAppAdGroupFieldNames ?? null;
    }

    /**
     * Sets MobileAppAdGroupFieldNames.
     *
     * @see MobileAppAdGroupFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobileAppAdGroupFieldNames(?array $value = null)
    {
        $this->MobileAppAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroupFieldNames.
     *
     * @see DynamicTextAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextAdGroupFieldNames(): ?array
    {
        return $this->DynamicTextAdGroupFieldNames ?? null;
    }

    /**
     * Sets DynamicTextAdGroupFieldNames.
     *
     * @see DynamicTextAdGroupFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setDynamicTextAdGroupFieldNames(?array $value = null)
    {
        $this->DynamicTextAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextFeedAdGroupFieldNames.
     *
     * @see DynamicTextFeedAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextFeedAdGroupFieldNames(): ?array
    {
        return $this->DynamicTextFeedAdGroupFieldNames ?? null;
    }

    /**
     * Sets DynamicTextFeedAdGroupFieldNames.
     *
     * @see DynamicTextFeedAdGroupFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setDynamicTextFeedAdGroupFieldNames(?array $value = null)
    {
        $this->DynamicTextFeedAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Gets SmartAdGroupFieldNames.
     *
     * @see SmartAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartAdGroupFieldNames(): ?array
    {
        return $this->SmartAdGroupFieldNames ?? null;
    }

    /**
     * Sets SmartAdGroupFieldNames.
     *
     * @see SmartAdGroupFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSmartAdGroupFieldNames(?array $value = null)
    {
        $this->SmartAdGroupFieldNames = $value;

        return $this;
    }
}
