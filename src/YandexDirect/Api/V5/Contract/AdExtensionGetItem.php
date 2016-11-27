<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionGetItem extends AdExtensionBase
{

    protected $Id = null;

    protected $Associated = null;

    /**
     * Creates a new instance of AdExtensionGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return self
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Associated.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getAssociated()
    {
        return $this->Associated;
    }

    /**
     * Sets Associated.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setAssociated($value = null)
    {
        $this->Associated = $value;

        return $this;
    }


}

