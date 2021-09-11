<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSetBase
{
//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $NegativeKeywords = null;

    /**
     * Creates a new instance of NegativeKeywordSharedSetBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywords(?array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }
}
