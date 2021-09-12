<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordProductivity
{
//    Can be omitted.
//    protected $Value = null;

//    Can be omitted.
//    protected $References = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getValue(): ?float
    {
        return $this->Value ?? null;
    }

    /**
     * @return $this
     */
    public function setValue(?float $value = null)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getReferences(): ?array
    {
        return $this->References ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setReferences(?array $value = null)
    {
        $this->References = $value;

        return $this;
    }
}
