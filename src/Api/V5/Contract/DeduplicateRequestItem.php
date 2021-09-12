<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateRequestItem
{
//    Can be omitted.
//    protected $Id = null;

    protected $Keyword = null;

//    Can be omitted.
//    protected $Weight = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    public function getKeyword(): string
    {
        return $this->Keyword;
    }

    /**
     * @return $this
     */
    public function setKeyword(string $value)
    {
        $this->Keyword = $value;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->Weight ?? null;
    }

    /**
     * @return $this
     */
    public function setWeight(?int $value = null)
    {
        $this->Weight = $value;

        return $this;
    }
}
