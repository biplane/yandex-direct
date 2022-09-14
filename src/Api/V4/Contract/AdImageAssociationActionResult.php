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
    protected $Warnings = null;

    protected $Errors = null;

    protected $AdID = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return Warning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->Warnings;
    }

    /**
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
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    /**
     * @param Error[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    public function getAdID(): ?int
    {
        return $this->AdID;
    }

    /**
     * @return $this
     */
    public function setAdID(?int $value = null)
    {
        $this->AdID = $value;

        return $this;
    }
}
