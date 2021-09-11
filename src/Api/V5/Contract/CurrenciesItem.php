<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CurrenciesItem
{
    protected $Currency = null;

    protected $Properties = [];

    /**
     * Creates a new instance of CurrenciesItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Properties.
     *
     * @return ConstantsItem[]
     */
    public function getProperties(): array
    {
        return $this->Properties;
    }

    /**
     * Sets Properties.
     *
     * @param ConstantsItem[] $value
     *
     * @return $this
     */
    public function setProperties(array $value)
    {
        $this->Properties = $value;

        return $this;
    }
}
