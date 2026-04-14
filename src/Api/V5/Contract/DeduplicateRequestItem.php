<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeduplicateRequestItem
{
//    Can be omitted.
//    protected $Id;

    /** @var string */
    protected $Keyword;

//    Can be omitted.
//    protected $Weight;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Keyword
     */
    public function getKeyword(): string
    {
        return $this->Keyword;
    }

    /**
     * Set Keyword
     *
     * @return $this
     */
    public function setKeyword(string $value)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Get Weight
     */
    public function getWeight(): ?int
    {
        return $this->Weight ?? null;
    }

    /**
     * Set Weight
     *
     * @return $this
     */
    public function setWeight(?int $value)
    {
        $this->Weight = $value;

        return $this;
    }
}
