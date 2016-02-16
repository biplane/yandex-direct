<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = array(
        
    );

    protected $TextCampaignFieldNames = null;

    protected $MobileAppCampaignFieldNames = null;

    protected $DynamicTextCampaignFieldNames = null;

    /**
     * Creates a new instance of GetCampaignsRequest.
     *
     * @return GetCampaignsRequest
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
     * @return $this
     */
    public function setSelectionCriteria(CampaignsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return CampaignFieldEnum[]
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param CampaignFieldEnum[] $value
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets TextCampaignFieldNames.
     *
     * @return TextCampaignFieldEnum[]|null
     */
    public function getTextCampaignFieldNames()
    {
        return $this->TextCampaignFieldNames;
    }

    /**
     * Sets TextCampaignFieldNames.
     *
     * @param TextCampaignFieldEnum[]|null $value
     * @return $this
     */
    public function setTextCampaignFieldNames(array $value = null)
    {
        $this->TextCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaignFieldNames.
     *
     * @return MobileAppCampaignFieldEnum[]|null
     */
    public function getMobileAppCampaignFieldNames()
    {
        return $this->MobileAppCampaignFieldNames;
    }

    /**
     * Sets MobileAppCampaignFieldNames.
     *
     * @param MobileAppCampaignFieldEnum[]|null $value
     * @return $this
     */
    public function setMobileAppCampaignFieldNames(array $value = null)
    {
        $this->MobileAppCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaignFieldNames.
     *
     * @return DynamicTextCampaignFieldEnum[]|null
     */
    public function getDynamicTextCampaignFieldNames()
    {
        return $this->DynamicTextCampaignFieldNames;
    }

    /**
     * Sets DynamicTextCampaignFieldNames.
     *
     * @param DynamicTextCampaignFieldEnum[]|null $value
     * @return $this
     */
    public function setDynamicTextCampaignFieldNames(array $value = null)
    {
        $this->DynamicTextCampaignFieldNames = $value;

        return $this;
    }


}

