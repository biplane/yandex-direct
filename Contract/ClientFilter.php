<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ClientFilter
{
    /**
     * @var string
     */
    protected $StatusArch;

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
     * Gets the StatusArch.
     *
     * @return string
     */
    public function getStatusArch()
    {
        return $this->StatusArch;
    }

    /**
     * Sets the StatusArch.
     *
     * @param string $StatusArch
     *
     * @return ClientFilter
     */
    public function setStatusArch($StatusArch)
    {
        $this->StatusArch = $StatusArch;

        return $this;
    }
}