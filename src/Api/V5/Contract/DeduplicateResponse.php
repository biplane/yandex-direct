<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateResponse
{
//    Can be omitted.
//    protected $Add = null;

//    Can be omitted.
//    protected $Update = null;

//    Can be omitted.
//    protected $Delete = null;

//    Can be omitted.
//    protected $Failure = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return DeduplicateResponseAddItem[]|null
     */
    public function getAdd(): ?array
    {
        return $this->Add ?? null;
    }

    /**
     * @param DeduplicateResponseAddItem[]|null $value
     *
     * @return $this
     */
    public function setAdd(?array $value = null)
    {
        $this->Add = $value;

        return $this;
    }

    /**
     * @return DeduplicateResponseUpdateItem[]|null
     */
    public function getUpdate(): ?array
    {
        return $this->Update ?? null;
    }

    /**
     * @param DeduplicateResponseUpdateItem[]|null $value
     *
     * @return $this
     */
    public function setUpdate(?array $value = null)
    {
        $this->Update = $value;

        return $this;
    }

    public function getDelete(): ?IdsCriteria
    {
        return $this->Delete ?? null;
    }

    /**
     * @return $this
     */
    public function setDelete(?IdsCriteria $value = null)
    {
        $this->Delete = $value;

        return $this;
    }

    /**
     * @return DeduplicateErrorItem[]|null
     */
    public function getFailure(): ?array
    {
        return $this->Failure ?? null;
    }

    /**
     * @param DeduplicateErrorItem[]|null $value
     *
     * @return $this
     */
    public function setFailure(?array $value = null)
    {
        $this->Failure = $value;

        return $this;
    }
}
