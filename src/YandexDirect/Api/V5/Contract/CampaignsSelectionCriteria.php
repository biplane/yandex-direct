<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignsSelectionCriteria
{

    protected $Ids = null;

    protected $Types = null;

    protected $States = null;

    protected $Statuses = null;

    protected $StatusesPayment = null;

    /**
     * Creates a new instance of CampaignsSelectionCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return string[]|null
     * @see CampaignTypeEnum
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets Types.
     *
     * @param string[]|null $value
     * @return self
     * @see CampaignTypeEnum
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @return string[]|null
     * @see CampaignStateEnum
     */
    public function getStates()
    {
        return $this->States;
    }

    /**
     * Sets States.
     *
     * @param string[]|null $value
     * @return self
     * @see CampaignStateEnum
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return string[]|null
     * @see CampaignStatusSelectionEnum
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * Sets Statuses.
     *
     * @param string[]|null $value
     * @return self
     * @see CampaignStatusSelectionEnum
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets StatusesPayment.
     *
     * @return string[]|null
     * @see CampaignStatusPaymentEnum
     */
    public function getStatusesPayment()
    {
        return $this->StatusesPayment;
    }

    /**
     * Sets StatusesPayment.
     *
     * @param string[]|null $value
     * @return self
     * @see CampaignStatusPaymentEnum
     */
    public function setStatusesPayment(array $value = null)
    {
        $this->StatusesPayment = $value;

        return $this;
    }


}

