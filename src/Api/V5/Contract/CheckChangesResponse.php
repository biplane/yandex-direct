<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Modified.
     */
    public function getModified(): ?CheckResponseModified
    {
        return $this->Modified ?? null;
    }

    /**
     * Sets Modified.
     *
     * @return $this
     */
    public function setModified(?CheckResponseModified $value = null)
    {
        $this->Modified = $value;

        return $this;
    }

    /**
     * Gets NotFound.
     */
    public function getNotFound(): ?CheckResponseIds
    {
        return $this->NotFound ?? null;
    }

    /**
     * Sets NotFound.
     *
     * @return $this
     */
    public function setNotFound(?CheckResponseIds $value = null)
    {
        $this->NotFound = $value;

        return $this;
    }

    /**
     * Gets Unprocessed.
     */
    public function getUnprocessed(): ?CheckResponseIds
    {
        return $this->Unprocessed ?? null;
    }

    /**
     * Sets Unprocessed.
     *
     * @return $this
     */
    public function setUnprocessed(?CheckResponseIds $value = null)
    {
        $this->Unprocessed = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     */
    public function getTimestamp(): ?string
    {
        return $this->Timestamp ?? null;
    }

    /**
     * Sets Timestamp.
     *
     * @return $this
     */
    public function setTimestamp(?string $value = null)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
