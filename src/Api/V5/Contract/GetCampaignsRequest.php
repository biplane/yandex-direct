<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omit.
//    protected $TextCampaignFieldNames = null;

//    Can be omit.
//    protected $MobileAppCampaignFieldNames = null;

//    Can be omit.
//    protected $DynamicTextCampaignFieldNames = null;

    /**
     * Creates a new instance of GetCampaignsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return CampaignsSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param CampaignsSelectionCriteria $value
     * @return self
     */
    public function setSelectionCriteria(CampaignsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see CampaignFieldEnum
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param string[] $value
     * @return self
     * @see CampaignFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets TextCampaignFieldNames.
     *
     * @return string[]|null
     * @see TextCampaignFieldEnum
     */
    public function getTextCampaignFieldNames()
    {
        return isset($this->TextCampaignFieldNames) ? $this->TextCampaignFieldNames : null;
    }

    /**
     * Sets TextCampaignFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see TextCampaignFieldEnum
     */
    public function setTextCampaignFieldNames(array $value = null)
    {
        $this->TextCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaignFieldNames.
     *
     * @return string[]|null
     * @see MobileAppCampaignFieldEnum
     */
    public function getMobileAppCampaignFieldNames()
    {
        return isset($this->MobileAppCampaignFieldNames) ? $this->MobileAppCampaignFieldNames : null;
    }

    /**
     * Sets MobileAppCampaignFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see MobileAppCampaignFieldEnum
     */
    public function setMobileAppCampaignFieldNames(array $value = null)
    {
        $this->MobileAppCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaignFieldNames.
     *
     * @return string[]|null
     * @see DynamicTextCampaignFieldEnum
     */
    public function getDynamicTextCampaignFieldNames()
    {
        return isset($this->DynamicTextCampaignFieldNames) ? $this->DynamicTextCampaignFieldNames : null;
    }

    /**
     * Sets DynamicTextCampaignFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see DynamicTextCampaignFieldEnum
     */
    public function setDynamicTextCampaignFieldNames(array $value = null)
    {
        $this->DynamicTextCampaignFieldNames = $value;

        return $this;
    }


}

