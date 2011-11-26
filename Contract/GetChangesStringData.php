<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetChangesStringData
{
    /**
     * @var string[]
     */
    protected $Updated;
    /**
     * @var string[]
     */
    protected $NotUpdated;
    /**
     * @var string[]
     */
    protected $NotFound;

    /**
     * @return string[]
     */
    public function getUpdated()
    {
        return $this->Updated;
    }

    /**
     * @param string[] $Updated
     * @return GetChangesStringData
     */
    public function setUpdated(array $Updated)
    {
        $this->Updated = $Updated;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getNotUpdated()
    {
        return $this->NotUpdated;
    }

    /**
     * @param string[] $NotUpdated
     * @return GetChangesStringData
     */
    public function setNotUpdated(array $NotUpdated)
    {
        $this->NotUpdated = $NotUpdated;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getNotFound()
    {
        return $this->NotFound;
    }

    /**
     * @param string[] $NotFound
     * @return GetChangesStringData
     */
    public function setNotFound(array $NotFound)
    {
        $this->NotFound = $NotFound;

        return $this;
    }
}