<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateRequestItem
{
//    Can be omit.
//    protected $Id = null;

    protected $Keyword = null;

//    Can be omit.
//    protected $Weight = null;

    /**
     * Creates a new instance of DeduplicateRequestItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Keyword.
     */
    public function getKeyword(): string
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @return $this
     */
    public function setKeyword(string $value)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Gets Weight.
     */
    public function getWeight(): ?int
    {
        return $this->Weight ?? null;
    }

    /**
     * Sets Weight.
     *
     * @return $this
     */
    public function setWeight(?int $value = null)
    {
        $this->Weight = $value;

        return $this;
    }
}
