<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreateOfflineReportRequest
{

    protected $Type = null;

    protected $CampaignIds = [];

    protected $StartDate = null;

    protected $EndDate = null;

    protected $ImpressionsThreshold = null;

    protected $ClicksThreshold = null;

    protected $GroupByDate = null;

    protected $FieldNames = [];

    /**
     * Creates a new instance of CreateOfflineReportRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string $value
     * @return self
     */
    public function setType($value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * Sets CampaignIds.
     *
     * @param int[] $value
     * @return self
     */
    public function setCampaignIds(array $value)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @param string $value
     * @return self
     */
    public function setStartDate($value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @param string $value
     * @return self
     */
    public function setEndDate($value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets ImpressionsThreshold.
     *
     * @return int|null
     */
    public function getImpressionsThreshold()
    {
        return $this->ImpressionsThreshold;
    }

    /**
     * Sets ImpressionsThreshold.
     *
     * @param int|null $value
     * @return self
     */
    public function setImpressionsThreshold($value = null)
    {
        $this->ImpressionsThreshold = $value;

        return $this;
    }

    /**
     * Gets ClicksThreshold.
     *
     * @return int|null
     */
    public function getClicksThreshold()
    {
        return $this->ClicksThreshold;
    }

    /**
     * Sets ClicksThreshold.
     *
     * @param int|null $value
     * @return self
     */
    public function setClicksThreshold($value = null)
    {
        $this->ClicksThreshold = $value;

        return $this;
    }

    /**
     * Gets GroupByDate.
     *
     * @return string|null
     */
    public function getGroupByDate()
    {
        return $this->GroupByDate;
    }

    /**
     * Sets GroupByDate.
     *
     * @param string|null $value
     * @return self
     */
    public function setGroupByDate($value = null)
    {
        $this->GroupByDate = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
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
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }


}

