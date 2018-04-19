<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageSelectionCriteria
{

//    Can be omit.
//    protected $AdImageHashes = null;

//    Can be omit.
//    protected $Associated = null;

    /**
     * Creates a new instance of AdImageSelectionCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes()
    {
        return isset($this->AdImageHashes) ? $this->AdImageHashes : null;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setAdImageHashes(array $value = null)
    {
        $this->AdImageHashes = $value;

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

