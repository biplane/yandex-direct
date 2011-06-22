<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class GetChangesIntData
{
    /**
     * @var int[]
     */
    protected $Updated;
    /**
     * @var int[]
     */
    protected $NotUpdated;
    /**
     * @var int[]
     */
    protected $NotFound;

    /**
     * @return int[]
     */
    public function getUpdated()
    {
        return $this->Updated;
    }

    /**
     * @param int[] $Updated
     * @return GetChangesIntData
     */
    public function setUpdated(array $Updated)
    {
        $this->Updated = $Updated;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getNotUpdated()
    {
        return $this->NotUpdated;
    }

    /**
     * @param int[] $NotUpdated
     * @return GetChangesIntData
     */
    public function setNotUpdated(array $NotUpdated)
    {
        $this->NotUpdated = $NotUpdated;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getNotFound()
    {
        return $this->NotFound;
    }

    /**
     * @param int[] $NotFound
     * @return GetChangesIntData
     */
    public function setNotFound(array $NotFound)
    {
        $this->NotFound = $NotFound;

        return $this;
    }
}