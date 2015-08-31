<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Updated.
     *
     * @return int[]
     */
    public function getUpdated()
    {
        return $this->Updated;
    }

    /**
     * Sets the Updated.
     *
     * @param int[] $Updated
     *
     * @return GetChangesIntData
     */
    public function setUpdated(array $Updated)
    {
        $this->Updated = $Updated;

        return $this;
    }

    /**
     * Gets the NotUpdated.
     *
     * @return int[]
     */
    public function getNotUpdated()
    {
        return $this->NotUpdated;
    }

    /**
     * Sets the NotUpdated.
     *
     * @param int[] $NotUpdated
     *
     * @return GetChangesIntData
     */
    public function setNotUpdated(array $NotUpdated)
    {
        $this->NotUpdated = $NotUpdated;

        return $this;
    }

    /**
     * Gets the NotFound.
     *
     * @return int[]
     */
    public function getNotFound()
    {
        return $this->NotFound;
    }

    /**
     * Sets the NotFound.
     *
     * @param int[] $NotFound
     *
     * @return GetChangesIntData
     */
    public function setNotFound(array $NotFound)
    {
        $this->NotFound = $NotFound;

        return $this;
    }
}