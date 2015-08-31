<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class PhraseUserParams
{
    /**
     * @var string
     */
    protected $Param1;
    /**
     * @var string
     */
    protected $Param2;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Param1.
     *
     * @return string
     */
    public function getParam1()
    {
        return $this->Param1;
    }

    /**
     * Sets the Param1.
     *
     * @param string $Param1
     *
     * @return PhraseUserParams
     */
    public function setParam1($Param1)
    {
        $this->Param1 = $Param1;

        return $this;
    }

    /**
     * Gets the Param2.
     *
     * @return string
     */
    public function getParam2()
    {
        return $this->Param2;
    }

    /**
     * Sets the Param2.
     *
     * @param string $Param2
     *
     * @return PhraseUserParams
     */
    public function setParam2($Param2)
    {
        $this->Param2 = $Param2;

        return $this;
    }
}