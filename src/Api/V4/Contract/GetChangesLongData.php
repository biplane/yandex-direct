<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetChangesLongData
{
    protected $Updated = [];

    protected $NotUpdated = [];

    protected $NotFound = [];

    /**
     * Creates a new instance of GetChangesLongData.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Updated.
     *
     * @return int[]
     */
    public function getUpdated(): array
    {
        return $this->Updated;
    }

    /**
     * Sets Updated.
     *
     * @param int[] $value
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
     * @return int[]
     */
    public function getNotUpdated(): array
    {
        return $this->NotUpdated;
    }

    /**
     * Sets NotUpdated.
     *
     * @param int[] $value
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
     * @return int[]
     */
    public function getNotFound(): array
    {
        return $this->NotFound;
    }

    /**
     * Sets NotFound.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setNotFound(array $value)
    {
        $this->NotFound = $value;

        return $this;
    }
}
