<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordProductivity
{
//    Can be omit.
//    protected $Value = null;

//    Can be omit.
//    protected $References = null;

    /**
     * Creates a new instance of KeywordProductivity.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Value.
     */
    public function getValue(): ?float
    {
        return $this->Value ?? null;
    }

    /**
     * Sets Value.
     *
     * @return $this
     */
    public function setValue(?float $value = null)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Gets References.
     *
     * @return int[]|null
     */
    public function getReferences(): ?array
    {
        return $this->References ?? null;
    }

    /**
     * Sets References.
     *
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
