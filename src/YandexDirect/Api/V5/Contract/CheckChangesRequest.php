<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckChangesRequest
{

    protected $CampaignIds = null;

    protected $AdGroupIds = null;

    protected $AdIds = null;

    protected $Timestamp = null;

    protected $FieldNames = array(
        
    );

    /**
     * Creates a new instance of CheckChangesRequest.
     *
     * @return CheckChangesRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * Sets CampaignIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return $this->AdGroupIds;
    }

    /**
     * Sets AdGroupIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setAdGroupIds(array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Gets AdIds.
     *
     * @return int[]|null
     */
    public function getAdIds()
    {
        return $this->AdIds;
    }

    /**
     * Sets AdIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setAdIds(array $value = null)
    {
        $this->AdIds = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @param string $value
     * @return $this
     */
    public function setTimestamp($value)
    {
        $this->Timestamp = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return CheckFieldEnum[]
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param CheckFieldEnum[] $value
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }


}

