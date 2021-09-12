<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignsSelectionCriteria
{
//    Can be omitted.
//    protected $Ids = null;

//    Can be omitted.
//    protected $Types = null;

//    Can be omitted.
//    protected $States = null;

//    Can be omitted.
//    protected $Statuses = null;

//    Can be omitted.
//    protected $StatusesPayment = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
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
     * @see CampaignTypeEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
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
     * @see CampaignStateEnum
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->States ?? null;
    }

    /**
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
     * @see CampaignStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
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
     * @see CampaignStatusPaymentEnum
     *
     * @return string[]|null
     */
    public function getStatusesPayment(): ?array
    {
        return $this->StatusesPayment ?? null;
    }

    /**
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
