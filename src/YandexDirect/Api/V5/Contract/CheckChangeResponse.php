<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckChangeResponse
{

    protected $Modified = null;

    protected $NotFound = null;

    protected $Unprocessed = null;

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckChangeResponse.
     *
     * @return CheckChangeResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Modified.
     *
     * @return CheckResponseModified|null
     */
    public function getModified()
    {
        return $this->Modified;
    }

    /**
     * Sets Modified.
     *
     * @param CheckResponseModified|null $value
     * @return $this
     */
    public function setModified(CheckResponseModified $value = null)
    {
        $this->Modified = $value;

        return $this;
    }

    /**
     * Gets NotFound.
     *
     * @return CheckResponseIds|null
     */
    public function getNotFound()
    {
        return $this->NotFound;
    }

    /**
     * Sets NotFound.
     *
     * @param CheckResponseIds|null $value
     * @return $this
     */
    public function setNotFound(CheckResponseIds $value = null)
    {
        $this->NotFound = $value;

        return $this;
    }

    /**
     * Gets Unprocessed.
     *
     * @return CheckResponseIds|null
     */
    public function getUnprocessed()
    {
        return $this->Unprocessed;
    }

    /**
     * Sets Unprocessed.
     *
     * @param CheckResponseIds|null $value
     * @return $this
     */
    public function setUnprocessed(CheckResponseIds $value = null)
    {
        $this->Unprocessed = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTimestamp($value = null)
    {
        $this->Timestamp = $value;

        return $this;
    }


}

