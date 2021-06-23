<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StringFilterFieldProps
{

    protected $MaxLength = null;

    protected $MinLength = null;

    /**
     * Creates a new instance of StringFilterFieldProps.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets MaxLength.
     *
     * @return int
     */
    public function getMaxLength()
    {
        return $this->MaxLength;
    }

    /**
     * Sets MaxLength.
     *
     * @param int $value
     * @return $this
     */
    public function setMaxLength($value)
    {
        $this->MaxLength = $value;

        return $this;
    }

    /**
     * Gets MinLength.
     *
     * @return int
     */
    public function getMinLength()
    {
        return $this->MinLength;
    }

    /**
     * Sets MinLength.
     *
     * @param int $value
     * @return $this
     */
    public function setMinLength($value)
    {
        $this->MinLength = $value;

        return $this;
    }


}

