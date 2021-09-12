<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetChangesIntData
{
    protected $Updated = [];

    protected $NotUpdated = [];

    protected $NotFound = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]
     */
    public function getUpdated(): array
    {
        return $this->Updated;
    }

    /**
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
     * @return int[]
     */
    public function getNotUpdated(): array
    {
        return $this->NotUpdated;
    }

    /**
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
     * @return int[]
     */
    public function getNotFound(): array
    {
        return $this->NotFound;
    }

    /**
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
