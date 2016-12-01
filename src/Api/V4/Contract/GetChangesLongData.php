<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Updated.
     *
     * @return int[]
     */
    public function getUpdated()
    {
        return $this->Updated;
    }

    /**
     * Sets Updated.
     *
     * @param int[] $value
     * @return self
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
    public function getNotUpdated()
    {
        return $this->NotUpdated;
    }

    /**
     * Sets NotUpdated.
     *
     * @param int[] $value
     * @return self
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
    public function getNotFound()
    {
        return $this->NotFound;
    }

    /**
     * Sets NotFound.
     *
     * @param int[] $value
     * @return self
     */
    public function setNotFound(array $value)
    {
        $this->NotFound = $value;

        return $this;
    }


}

