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
     * @return AdExtensionGetItem
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
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Associated.
     *
     * @return YesNoEnum|null
     */
    public function getAssociated()
    {
        return $this->Associated;
    }

    /**
     * Sets Associated.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setAssociated(YesNoEnum $value = null)
    {
        $this->Associated = $value;

        return $this;
    }


}

