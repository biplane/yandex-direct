<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSetGetItem extends NegativeKeywordSharedSetBase
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Associated = null;

    /**
     * Creates a new instance of NegativeKeywordSharedSetGetItem.
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
        return isset($this->Id) ? $this->Id : null;
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
     * @return string|null
     * @see YesNoEnum
     */
    public function getAssociated()
    {
        return isset($this->Associated) ? $this->Associated : null;
    }

    /**
     * Sets Associated.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setAssociated($value = null)
    {
        $this->Associated = $value;

        return $this;
    }


}

