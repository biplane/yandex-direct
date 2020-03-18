<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FileFeedGet
{

//    Can be omit.
//    protected $Filename = null;

    /**
     * Creates a new instance of FileFeedGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Filename.
     *
     * @return string|null
     */
    public function getFilename()
    {
        return isset($this->Filename) ? $this->Filename : null;
    }

    /**
     * Sets Filename.
     *
     * @param string|null $value
     * @return $this
     */
    public function setFilename($value = null)
    {
        $this->Filename = $value;

        return $this;
    }


}

