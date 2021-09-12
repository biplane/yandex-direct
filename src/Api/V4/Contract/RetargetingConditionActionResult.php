<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionActionResult
{
    protected $Warnings = null;

    protected $Errors = null;

    protected $RetargetingConditionID = null;

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

    public function getRetargetingConditionID(): ?int
    {
        return $this->RetargetingConditionID;
    }

    /**
     * @return $this
     */
    public function setRetargetingConditionID(?int $value = null)
    {
        $this->RetargetingConditionID = $value;

        return $this;
    }
}
