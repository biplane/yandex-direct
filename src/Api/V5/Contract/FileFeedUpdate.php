<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FileFeedUpdate
{
    protected $Data = null;

    protected $Filename = null;

    /**
     * Creates a new instance of FileFeedUpdate.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Data.
     */
    public function getData(): string
    {
        return $this->Data;
    }

    /**
     * Sets Data.
     *
     * @return $this
     */
    public function setData(string $value)
    {
        $this->Data = $value;

        return $this;
    }

    /**
     * Gets Filename.
     */
    public function getFilename(): string
    {
        return $this->Filename;
    }

    /**
     * Sets Filename.
     *
     * @return $this
     */
    public function setFilename(string $value)
    {
        $this->Filename = $value;

        return $this;
    }
}
