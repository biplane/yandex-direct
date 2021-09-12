<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageActionResult
{
    protected $Warnings = null;

    protected $Errors = null;

    protected $AdImageUploadTaskID = null;

    protected $AdImageHash = null;

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

    public function getAdImageUploadTaskID(): ?int
    {
        return $this->AdImageUploadTaskID;
    }

    /**
     * @return $this
     */
    public function setAdImageUploadTaskID(?int $value = null)
    {
        $this->AdImageUploadTaskID = $value;

        return $this;
    }

    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }
}
