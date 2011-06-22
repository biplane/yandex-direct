<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class RejectReason
{
    /**
     * @var string
     */
    protected $Type;
    /**
     * @var string
     */
    protected $Text;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return RejectReason
     */
    public function setType($Type)
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return RejectReason
     */
    public function setText($Text)
    {
        $this->Text = $Text;

        return $this;
    }
}