<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class EnumFilterFieldProps
{

    protected $Values = [];

    /**
     * Creates a new instance of EnumFilterFieldProps.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Values.
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->Values;
    }

    /**
     * Sets Values.
     *
     * @param string[] $value
     * @return $this
     */
    public function setValues(array $value)
    {
        $this->Values = $value;

        return $this;
    }


}

