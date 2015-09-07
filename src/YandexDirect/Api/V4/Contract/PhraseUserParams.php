<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PhraseUserParams
{

    protected $Param1 = null;

    protected $Param2 = null;

    /**
     * Creates a new instance of PhraseUserParams.
     *
     * @return PhraseUserParams
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Param1.
     *
     * @return string|null
     */
    public function getParam1()
    {
        return $this->Param1;
    }

    /**
     * Sets Param1.
     *
     * @param string|null $value
     * @return $this
     */
    public function setParam1($value = null)
    {
        $this->Param1 = $value;

        return $this;
    }

    /**
     * Gets Param2.
     *
     * @return string|null
     */
    public function getParam2()
    {
        return $this->Param2;
    }

    /**
     * Sets Param2.
     *
     * @param string|null $value
     * @return $this
     */
    public function setParam2($value = null)
    {
        $this->Param2 = $value;

        return $this;
    }


}

