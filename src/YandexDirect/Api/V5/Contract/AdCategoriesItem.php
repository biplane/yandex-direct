<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdCategoriesItem
{

    protected $AdCategory = null;

    protected $Description = null;

    protected $Message = null;

    /**
     * Creates a new instance of AdCategoriesItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdCategory.
     *
     * @return string
     */
    public function getAdCategory()
    {
        return $this->AdCategory;
    }

    /**
     * Sets AdCategory.
     *
     * @param string $value
     * @return self
     */
    public function setAdCategory($value)
    {
        $this->AdCategory = $value;

        return $this;
    }

    /**
     * Gets Description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @param string $value
     * @return self
     */
    public function setDescription($value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Gets Message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Sets Message.
     *
     * @param string $value
     * @return self
     */
    public function setMessage($value)
    {
        $this->Message = $value;

        return $this;
    }


}

