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
     * @return CampaignsSelectionCriteria
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
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return CampaignTypeEnum[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets Types.
     *
     * @param CampaignTypeEnum[]|null $value
     * @return $this
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @return CampaignStateEnum[]|null
     */
    public function getStates()
    {
        return $this->States;
    }

    /**
     * Sets States.
     *
     * @param CampaignStateEnum[]|null $value
     * @return $this
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return CampaignStatusSelectionEnum[]|null
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * Sets Statuses.
     *
     * @param CampaignStatusSelectionEnum[]|null $value
     * @return $this
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets StatusesPayment.
     *
     * @return CampaignStatusPaymentEnum[]|null
     */
    public function getStatusesPayment()
    {
        return $this->StatusesPayment;
    }

    /**
     * Sets StatusesPayment.
     *
     * @param CampaignStatusPaymentEnum[]|null $value
     * @return $this
     */
    public function setStatusesPayment(array $value = null)
    {
        $this->StatusesPayment = $value;

        return $this;
    }


}

