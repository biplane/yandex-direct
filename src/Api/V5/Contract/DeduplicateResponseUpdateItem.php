<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeduplicateResponseUpdateItem
{
    /** @var int */
    protected $Id;

    /** @var string */
    protected $Keyword;

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
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
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
}
