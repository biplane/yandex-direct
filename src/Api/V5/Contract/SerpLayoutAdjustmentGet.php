<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SerpLayoutAdjustmentGet
{

//    Can be omit.
//    protected $SerpLayout = null;

//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $Enabled = null;

    /**
     * Creates a new instance of SerpLayoutAdjustmentGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SerpLayout.
     *
     * @return string|null
     * @see SerpLayoutEnum
     */
    public function getSerpLayout()
    {
        return isset($this->SerpLayout) ? $this->SerpLayout : null;
    }

    /**
     * Sets SerpLayout.
     *
     * @param string|null $value
     * @return $this
     * @see SerpLayoutEnum
     */
    public function setSerpLayout($value = null)
    {
        $this->SerpLayout = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     *
     * @return int|null
     */
    public function getBidModifier()
    {
        return isset($this->BidModifier) ? $this->BidModifier : null;
    }

    /**
     * Sets BidModifier.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getEnabled()
    {
        return isset($this->Enabled) ? $this->Enabled : null;
    }

    /**
     * Sets Enabled.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setEnabled($value = null)
    {
        $this->Enabled = $value;

        return $this;
    }


}

