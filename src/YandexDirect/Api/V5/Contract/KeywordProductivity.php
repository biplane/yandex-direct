<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordProductivity
{

    protected $Value = null;

    protected $References = null;

    /**
     * Creates a new instance of KeywordProductivity.
     *
     * @return KeywordProductivity
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
        return $this->Value;
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
        return $this->References;
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

