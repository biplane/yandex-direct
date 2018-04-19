<?php

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
     * @return float|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }

    /**
     * Sets Value.
     *
     * @param float|null $value
     * @return $this
     */
    public function setValue($value = null)
    {
        $this->Value = $value;

        return $this;
    }

    /**
     * Gets References.
     *
     * @return int[]|null
     */
    public function getReferences()
    {
        return isset($this->References) ? $this->References : null;
    }

    /**
     * Sets References.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setReferences(array $value = null)
    {
        $this->References = $value;

        return $this;
    }


}

