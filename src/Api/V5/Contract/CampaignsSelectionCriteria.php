<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignsSelectionCriteria
{

//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $Types = null;

//    Can be omit.
//    protected $States = null;

//    Can be omit.
//    protected $Statuses = null;

//    Can be omit.
//    protected $StatusesPayment = null;

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
        return isset($this->Ids) ? $this->Ids : null;
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
     * @return string[]|null
     * @see CampaignTypeEnum
     */
    public function getTypes()
    {
        return isset($this->Types) ? $this->Types : null;
    }

    /**
     * Sets Types.
     *
     * @param string[]|null $value
     * @return $this
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
        return isset($this->States) ? $this->States : null;
    }

    /**
     * Sets States.
     *
     * @param string[]|null $value
     * @return $this
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
        return isset($this->Statuses) ? $this->Statuses : null;
    }

    /**
     * Sets Statuses.
     *
     * @param string[]|null $value
     * @return $this
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
        return isset($this->StatusesPayment) ? $this->StatusesPayment : null;
    }

    /**
     * Sets StatusesPayment.
     *
     * @param string[]|null $value
     * @return $this
     * @see CampaignStatusPaymentEnum
     */
    public function setStatusesPayment(array $value = null)
    {
        $this->StatusesPayment = $value;

        return $this;
    }


}

