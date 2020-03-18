<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignBase
{

//    Can be omit.
//    protected $CounterId = null;

//    Can be omit.
//    protected $AttributionModel = null;

    /**
     * Creates a new instance of SmartCampaignBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CounterId.
     *
     * @return int|null
     */
    public function getCounterId()
    {
        return isset($this->CounterId) ? $this->CounterId : null;
    }

    /**
     * Sets CounterId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCounterId($value = null)
    {
        $this->CounterId = $value;

        return $this;
    }

    /**
     * Gets AttributionModel.
     *
     * @return string|null
     * @see AttributionModelEnum
     */
    public function getAttributionModel()
    {
        return isset($this->AttributionModel) ? $this->AttributionModel : null;
    }

    /**
     * Sets AttributionModel.
     *
     * @param string|null $value
     * @return $this
     * @see AttributionModelEnum
     */
    public function setAttributionModel($value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }


}

