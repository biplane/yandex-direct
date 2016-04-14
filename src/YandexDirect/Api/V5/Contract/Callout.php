<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Callout
{

    protected $CalloutText = null;

    /**
     * Creates a new instance of Callout.
     *
     * @return Callout
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CalloutText.
     *
     * @return string
     */
    public function getCalloutText()
    {
        return $this->CalloutText;
    }

    /**
     * Sets CalloutText.
     *
     * @param string $value
     * @return $this
     */
    public function setCalloutText($value)
    {
        $this->CalloutText = $value;

        return $this;
    }


}

