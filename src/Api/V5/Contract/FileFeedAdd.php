<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FileFeedAdd
{
    protected $Data = null;

    protected $Filename = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getData(): string
    {
        return $this->Data;
    }

    /**
     * @return $this
     */
    public function setData(string $value)
    {
        $this->Data = $value;

        return $this;
    }

    public function getFilename(): string
    {
        return $this->Filename;
    }

    /**
     * @return $this
     */
    public function setFilename(string $value)
    {
        $this->Filename = $value;

        return $this;
    }
}
