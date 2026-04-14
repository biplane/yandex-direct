<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageAssociationActionResult
{
//    Can be omitted.
//    protected $Warnings;

//    Can be omitted.
//    protected $Errors;

    /** @var int|null */
    protected $AdID = null;

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
     * Get AdID
     */
    public function getAdID(): ?int
    {
        return $this->AdID;
    }

    /**
     * Set AdID
     *
     * @return $this
     */
    public function setAdID(?int $value)
    {
        $this->AdID = $value;

        return $this;
    }
}
