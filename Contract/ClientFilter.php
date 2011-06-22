<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class ClientFilter
{
    /**
     * @var string
     */
    protected $StatusArch;

    /**
     * @return string
     */
    public function getStatusArch()
    {
        return $this->StatusArch;
    }

    /**
     * @param string $StatusArch
     * @return ClientFilter
     */
    public function setStatusArch($StatusArch)
    {
        $this->StatusArch = $StatusArch;

        return $this;
    }
}