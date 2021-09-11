<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetChangesStringData
{
    protected $Updated = [];

    protected $NotUpdated = [];

    protected $NotFound = [];

    /**
     * Creates a new instance of GetChangesStringData.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Updated.
     *
     * @return string[]
     */
    public function getUpdated(): array
    {
        return $this->Updated;
    }

    /**
     * Sets Updated.
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setUpdated(array $value)
    {
        $this->Updated = $value;

        return $this;
    }

    /**
     * Gets NotUpdated.
     *
     * @return string[]
     */
    public function getNotUpdated(): array
    {
        return $this->NotUpdated;
    }

    /**
     * Sets NotUpdated.
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setNotUpdated(array $value)
    {
        $this->NotUpdated = $value;

        return $this;
    }

    /**
     * Gets NotFound.
     *
     * @return string[]
     */
    public function getNotFound(): array
    {
        return $this->NotFound;
    }

    /**
     * Sets NotFound.
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setNotFound(array $value)
    {
        $this->NotFound = $value;

        return $this;
    }
}
