<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSetAddItem
{
    protected $Name = null;

    protected $NegativeKeywords = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getNegativeKeywords(): array
    {
        return $this->NegativeKeywords;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setNegativeKeywords(array $value)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }
}
