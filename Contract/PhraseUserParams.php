<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return string
     */
    public function getParam1()
    {
        return $this->Param1;
    }

    /**
     * @param string $Param1
     * @return PhraseUserParams
     */
    public function setParam1($Param1)
    {
        $this->Param1 = $Param1;

        return $this;
    }

    /**
     * @return string
     */
    public function getParam2()
    {
        return $this->Param2;
    }

    /**
     * @param string $Param2
     * @return PhraseUserParams
     */
    public function setParam2($Param2)
    {
        $this->Param2 = $Param2;

        return $this;
    }
}