<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets the Type.
     *
     * @param string $Type
     *
     * @return RejectReason
     */
    public function setType($Type)
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * Gets the Text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Sets the Text.
     *
     * @param string $Text
     *
     * @return RejectReason
     */
    public function setText($Text)
    {
        $this->Text = $Text;

        return $this;
    }
}