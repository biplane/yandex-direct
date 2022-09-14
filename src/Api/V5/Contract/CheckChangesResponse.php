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
//    protected $Modified = null;

//    Can be omitted.
//    protected $NotFound = null;

//    Can be omitted.
//    protected $Unprocessed = null;

//    Can be omitted.
//    protected $Timestamp = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getModified(): ?CheckResponseModified
    {
        return $this->Modified ?? null;
    }

    /**
     * @return $this
     */
    public function setModified(?CheckResponseModified $value = null)
    {
        $this->Modified = $value;

        return $this;
    }

    public function getNotFound(): ?CheckResponseIds
    {
        return $this->NotFound ?? null;
    }

    /**
     * @return $this
     */
    public function setNotFound(?CheckResponseIds $value = null)
    {
        $this->NotFound = $value;

        return $this;
    }

    public function getUnprocessed(): ?CheckResponseIds
    {
        return $this->Unprocessed ?? null;
    }

    /**
     * @return $this
     */
    public function setUnprocessed(?CheckResponseIds $value = null)
    {
        $this->Unprocessed = $value;

        return $this;
    }

    public function getTimestamp(): ?string
    {
        return $this->Timestamp ?? null;
    }

    /**
     * @return $this
     */
    public function setTimestamp(?string $value = null)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
