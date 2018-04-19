<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionAddItem
{

//    Can be omit.
//    protected $Callout = null;

    /**
     * Creates a new instance of AdExtensionAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Callout.
     *
     * @return Callout|null
     */
    public function getCallout()
    {
        return isset($this->Callout) ? $this->Callout : null;
    }

    /**
     * Sets Callout.
     *
     * @param Callout|null $value
     * @return $this
     */
    public function setCallout(Callout $value = null)
    {
        $this->Callout = $value;

        return $this;
    }


}

