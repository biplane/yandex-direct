<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ExceptionNotification
{

    protected $Code = null;

    protected $Message = null;

//    Can be omit.
//    protected $Details = null;

    /**
     * Creates a new instance of ExceptionNotification.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Code.
     *
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Sets Code.
     *
     * @param int $value
     * @return self
     */
    public function setCode($value)
    {
        $this->Code = $value;

        return $this;
    }

    /**
     * Gets Message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Sets Message.
     *
     * @param string $value
     * @return self
     */
    public function setMessage($value)
    {
        $this->Message = $value;

        return $this;
    }

    /**
     * Gets Details.
     *
     * @return string|null
     */
    public function getDetails()
    {
        return isset($this->Details) ? $this->Details : null;
    }

    /**
     * Sets Details.
     *
     * @param string|null $value
     * @return self
     */
    public function setDetails($value = null)
    {
        $this->Details = $value;

        return $this;
    }


}

