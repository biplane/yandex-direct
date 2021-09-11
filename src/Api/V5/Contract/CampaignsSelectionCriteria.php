<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * Sets Ids.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @see CampaignTypeEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * Sets Types.
     *
     * @see CampaignTypeEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTypes(?array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @see CampaignStateEnum
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->States ?? null;
    }

    /**
     * Sets States.
     *
     * @see CampaignStateEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStates(?array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @see CampaignStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
     * Sets Statuses.
     *
     * @see CampaignStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatuses(?array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets StatusesPayment.
     *
     * @see CampaignStatusPaymentEnum
     *
     * @return string[]|null
     */
    public function getStatusesPayment(): ?array
    {
        return $this->StatusesPayment ?? null;
    }

    /**
     * Sets StatusesPayment.
     *
     * @see CampaignStatusPaymentEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusesPayment(?array $value = null)
    {
        $this->StatusesPayment = $value;

        return $this;
    }
}
