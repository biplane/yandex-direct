<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageActionResult
{
//    Can be omitted.
//    protected $Warnings;

//    Can be omitted.
//    protected $Errors;

    /** @var int|null */
    protected $AdImageUploadTaskID = null;

    /** @var string|null */
    protected $AdImageHash = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Warnings
     *
     * @return list<Warning>|null
     */
    public function getWarnings(): ?array
    {
        return $this->Warnings ?? null;
    }

    /**
     * Set Warnings
     *
     * @param list<Warning>|null $value
     *
     * @return $this
     */
    public function setWarnings(?array $value)
    {
        $this->Warnings = $value;

        return $this;
    }

    /**
     * Get Errors
     *
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors ?? null;
    }

    /**
     * Set Errors
     *
     * @param list<Error>|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Get AdImageUploadTaskID
     */
    public function getAdImageUploadTaskID(): ?int
    {
        return $this->AdImageUploadTaskID;
    }

    /**
     * Set AdImageUploadTaskID
     *
     * @return $this
     */
    public function setAdImageUploadTaskID(?int $value)
    {
        $this->AdImageUploadTaskID = $value;

        return $this;
    }

    /**
     * Get AdImageHash
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash;
    }

    /**
     * Set AdImageHash
     *
     * @return $this
     */
    public function setAdImageHash(?string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }
}
