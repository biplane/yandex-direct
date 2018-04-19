<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignStatChangeItem
{

    protected $CampaignID = null;

    protected $BorderDate = null;

    /**
     * Creates a new instance of CampaignStatChangeItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

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

