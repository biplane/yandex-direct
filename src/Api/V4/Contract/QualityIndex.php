<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class QualityIndex
{

    protected $Value = null;

    protected $References = [];

    /**
     * Creates a new instance of QualityIndex.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Gets References.
     *
     * @return int[]
     */
    public function getReferences()
    {
        return $this->References;
    }

    /**
     * Sets References.
     *
     * @param int[] $value
     * @return self
     */
    public function setReferences(array $value)
    {
        $this->References = $value;

        return $this;
    }


}

