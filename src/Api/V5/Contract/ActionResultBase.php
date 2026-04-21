<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ActionResultBase
{
//    Can be omitted.
//    protected $Warnings;

//    Can be omitted.
//    protected $Errors;

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
     * @return list<ExceptionNotification>
     */
    public function getWarnings(): array
    {
        return $this->Warnings ?? [];
    }

    /**
     * Set Warnings
     *
     * @param list<ExceptionNotification> $value
     *
     * @return $this
     */
    public function setWarnings(array $value)
    {
        $this->Warnings = $value;

        return $this;
    }

    /**
     * Get Errors
     *
     * @return list<ExceptionNotification>
     */
    public function getErrors(): array
    {
        return $this->Errors ?? [];
    }

    /**
     * Set Errors
     *
     * @param list<ExceptionNotification> $value
     *
     * @return $this
     */
    public function setErrors(array $value)
    {
        $this->Errors = $value;

        return $this;
    }
}
