<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CheckPaymentInfo
{

    protected $CustomTransactionID = null;

    /**
     * Creates a new instance of CheckPaymentInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CustomTransactionID.
     *
     * @return string
     */
    public function getCustomTransactionID()
    {
        return $this->CustomTransactionID;
    }

    /**
     * Sets CustomTransactionID.
     *
     * @param string $value
     * @return self
     */
    public function setCustomTransactionID($value)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }


}

