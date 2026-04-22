<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckChangesResponse
{
//    Can be omitted.
//    protected $Modified;

//    Can be omitted.
//    protected $NotFound;

//    Can be omitted.
//    protected $Unprocessed;

//    Can be omitted.
//    protected $Timestamp;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Modified
     */
    public function getModified(): ?CheckResponseModified
    {
        return $this->Modified ?? null;
    }

    /**
     * Set Modified
     *
     * @return $this
     */
    public function setModified(?CheckResponseModified $value)
    {
        $this->Modified = $value;

        return $this;
    }

    /**
     * Get NotFound
     */
    public function getNotFound(): ?CheckResponseIds
    {
        return $this->NotFound ?? null;
    }

    /**
     * Set NotFound
     *
     * @return $this
     */
    public function setNotFound(?CheckResponseIds $value)
    {
        $this->NotFound = $value;

        return $this;
    }

    /**
     * Get Unprocessed
     */
    public function getUnprocessed(): ?CheckResponseIds
    {
        return $this->Unprocessed ?? null;
    }

    /**
     * Set Unprocessed
     *
     * @return $this
     */
    public function setUnprocessed(?CheckResponseIds $value)
    {
        $this->Unprocessed = $value;

        return $this;
    }

    /**
     * Get Timestamp
     */
    public function getTimestamp(): ?string
    {
        return $this->Timestamp ?? null;
    }

    /**
     * Set Timestamp
     *
     * @return $this
     */
    public function setTimestamp(?string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
