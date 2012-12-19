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
     * @return string[]
     */
    public function getUpdated()
    {
        return $this->Updated;
    }

    /**
     * Sets the Updated.
     *
     * @param string[] $Updated
     *
     * @return GetChangesStringData
     */
    public function setUpdated(array $Updated)
    {
        $this->Updated = $Updated;

        return $this;
    }

    /**
     * Gets the NotUpdated.
     *
     * @return string[]
     */
    public function getNotUpdated()
    {
        return $this->NotUpdated;
    }

    /**
     * Sets the NotUpdated.
     *
     * @param string[] $NotUpdated
     *
     * @return GetChangesStringData
     */
    public function setNotUpdated(array $NotUpdated)
    {
        $this->NotUpdated = $NotUpdated;

        return $this;
    }

    /**
     * Gets the NotFound.
     *
     * @return string[]
     */
    public function getNotFound()
    {
        return $this->NotFound;
    }

    /**
     * Sets the NotFound.
     *
     * @param string[] $NotFound
     *
     * @return GetChangesStringData
     */
    public function setNotFound(array $NotFound)
    {
        $this->NotFound = $NotFound;

        return $this;
    }
}