<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckChangesResponse
{

//    Can be omit.
//    protected $Modified = null;

//    Can be omit.
//    protected $NotFound = null;

//    Can be omit.
//    protected $Unprocessed = null;

//    Can be omit.
//    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckChangesResponse.
     *
     * @return self
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
        return isset($this->Modified) ? $this->Modified : null;
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
        return isset($this->NotFound) ? $this->NotFound : null;
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
        return isset($this->Unprocessed) ? $this->Unprocessed : null;
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
        return isset($this->Timestamp) ? $this->Timestamp : null;
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

