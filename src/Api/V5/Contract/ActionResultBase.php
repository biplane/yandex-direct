<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ActionResultBase
{
//    Can be omit.
//    protected $Warnings = null;

//    Can be omit.
//    protected $Errors = null;

    /**
     * Creates a new instance of ActionResultBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Warnings.
     *
     * @return ExceptionNotification[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->Warnings ?? null;
    }

    /**
     * Sets Warnings.
     *
     * @param ExceptionNotification[]|null $value
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
     * @return ExceptionNotification[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors ?? null;
    }

    /**
     * Sets Errors.
     *
     * @param ExceptionNotification[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }
}
