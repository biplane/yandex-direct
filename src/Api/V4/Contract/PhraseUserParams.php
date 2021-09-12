<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PhraseUserParams
{
    protected $Param1 = null;

    protected $Param2 = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getParam1(): ?string
    {
        return $this->Param1;
    }

    /**
     * @return $this
     */
    public function setParam1(?string $value = null)
    {
        $this->Param1 = $value;

        return $this;
    }

    public function getParam2(): ?string
    {
        return $this->Param2;
    }

    /**
     * @return $this
     */
    public function setParam2(?string $value = null)
    {
        $this->Param2 = $value;

        return $this;
    }
}
