<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingActionResult
{
    protected $Warnings = null;

    protected $Errors = null;

    protected $RetargetingID = null;

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

    public function getRetargetingID(): ?int
    {
        return $this->RetargetingID;
    }

    /**
     * @return $this
     */
    public function setRetargetingID(?int $value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }
}
