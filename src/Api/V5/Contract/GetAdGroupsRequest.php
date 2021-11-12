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

//    Can be omitted.
//    protected $MobileAppAdGroupFieldNames = null;

//    Can be omitted.
//    protected $DynamicTextAdGroupFieldNames = null;

//    Can be omitted.
//    protected $DynamicTextFeedAdGroupFieldNames = null;

//    Can be omitted.
//    protected $SmartAdGroupFieldNames = null;

//    Can be omitted.
//    protected $TextAdGroupFeedParamsFieldNames = null;

    public function getSelectionCriteria(): AdGroupsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(AdGroupsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see AdGroupFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
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
     * @see MobileAppAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppAdGroupFieldNames(): ?array
    {
        return $this->MobileAppAdGroupFieldNames ?? null;
    }

    /**
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
     * @see DynamicTextAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextAdGroupFieldNames(): ?array
    {
        return $this->DynamicTextAdGroupFieldNames ?? null;
    }

    /**
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
     * @see DynamicTextFeedAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextFeedAdGroupFieldNames(): ?array
    {
        return $this->DynamicTextFeedAdGroupFieldNames ?? null;
    }

    /**
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
     * @see SmartAdGroupFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartAdGroupFieldNames(): ?array
    {
        return $this->SmartAdGroupFieldNames ?? null;
    }

    /**
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

    /**
     * @see TextAdGroupFeedParamsFieldEnum
     *
     * @return string[]|null
     */
    public function getTextAdGroupFeedParamsFieldNames(): ?array
    {
        return $this->TextAdGroupFeedParamsFieldNames ?? null;
    }

    /**
     * @see TextAdGroupFeedParamsFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTextAdGroupFeedParamsFieldNames(?array $value = null)
    {
        $this->TextAdGroupFeedParamsFieldNames = $value;

        return $this;
    }
}
