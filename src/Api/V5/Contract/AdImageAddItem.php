<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageAddItem
{

    protected $ImageData = null;

    protected $Name = null;

    /**
     * Creates a new instance of AdImageAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ImageData.
     *
     * @return string
     */
    public function getImageData()
    {
        return $this->ImageData;
    }

    /**
     * Sets ImageData.
     *
     * @param string $value
     * @return self
     */
    public function setImageData($value)
    {
        $this->ImageData = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return self
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }


}

