<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NegativeKeywordSharedSetBase
{
//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $NegativeKeywords;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get NegativeKeywords
     *
     * @return list<string>
     */
    public function getNegativeKeywords(): array
    {
        return $this->NegativeKeywords ?? [];
    }

    /**
     * Set NegativeKeywords
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setNegativeKeywords(array $value)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }
}
