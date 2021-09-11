<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageAssociationActionResult
{
    protected $Warnings = null;

    protected $Errors = null;

    protected $AdID = null;

    /**
     * Creates a new instance of AdImageAssociationActionResult.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Warnings.
     *
     * @return Warning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->Warnings;
    }

    /**
     * Sets Warnings.
     *
     * @param Warning[]|null $value
     *
     * @return $this
     */
    public function setWarnings(?array $value = null)
    {
        $this->Warnings = $value;

        return $this;
    }

    /**
     * Gets Errors.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    /**
     * Sets Errors.
     *
     * @param Error[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Gets AdID.
     */
    public function getAdID(): ?int
    {
        return $this->AdID;
    }

    /**
     * Sets AdID.
     *
     * @return $this
     */
    public function setAdID(?int $value = null)
    {
        $this->AdID = $value;

        return $this;
    }
}
