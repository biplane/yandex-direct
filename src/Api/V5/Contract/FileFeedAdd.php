<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FileFeedAdd
{

    protected $Data = null;

    protected $Filename = null;

    /**
     * Creates a new instance of FileFeedAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Data.
     *
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Sets Data.
     *
     * @param string $value
     * @return $this
     */
    public function setData($value)
    {
        $this->Data = $value;

        return $this;
    }

    /**
     * Gets Filename.
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->Filename;
    }

    /**
     * Sets Filename.
     *
     * @param string $value
     * @return $this
     */
    public function setFilename($value)
    {
        $this->Filename = $value;

        return $this;
    }


}

