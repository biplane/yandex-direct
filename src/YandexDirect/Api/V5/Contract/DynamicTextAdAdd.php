<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdAdd extends TextAdAddBase
{

    protected $Text = null;

    /**
     * Creates a new instance of DynamicTextAdAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Sets Text.
     *
     * @param string $value
     * @return self
     */
    public function setText($value)
    {
        $this->Text = $value;

        return $this;
    }


}

