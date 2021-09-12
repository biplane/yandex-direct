<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ActionResultBase
{
//    Can be omitted.
//    protected $Warnings = null;

//    Can be omitted.
//    protected $Errors = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ExceptionNotification[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->Warnings ?? null;
    }

    /**
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
     * @return ExceptionNotification[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors ?? null;
    }

    /**
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
