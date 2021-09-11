<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordUpdateItem
{
    protected $Id = null;

//    Can be omit.
//    protected $Keyword = null;

//    Can be omit.
//    protected $UserParam1 = null;

//    Can be omit.
//    protected $UserParam2 = null;

    /**
     * Creates a new instance of KeywordUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Keyword.
     */
    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * Sets Keyword.
     *
     * @return $this
     */
    public function setKeyword(?string $value = null)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Gets UserParam1.
     */
    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * Sets UserParam1.
     *
     * @return $this
     */
    public function setUserParam1(?string $value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Gets UserParam2.
     */
    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * Sets UserParam2.
     *
     * @return $this
     */
    public function setUserParam2(?string $value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }
}
