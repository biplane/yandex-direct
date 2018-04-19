<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignStatItem
{

    protected $CampaignId = null;

    protected $BorderDate = null;

    /**
     * Creates a new instance of CampaignStatItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignId($value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets BorderDate.
     *
     * @return string
     */
    public function getBorderDate()
    {
        return $this->BorderDate;
    }

    /**
     * Sets BorderDate.
     *
     * @param string $value
     * @return $this
     */
    public function setBorderDate($value)
    {
        $this->BorderDate = $value;

        return $this;
    }


}

