<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CurrenciesItem
{
    /** @var string */
    protected $Currency;

    /** @var non-empty-list<ConstantsItem> */
    protected $Properties;

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
     * Get Currency
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get Properties
     *
     * @return non-empty-list<ConstantsItem>
     */
    public function getProperties(): array
    {
        return $this->Properties;
    }

    /**
     * Set Properties
     *
     * @param non-empty-list<ConstantsItem> $value
     *
     * @return $this
     */
    public function setProperties(array $value)
    {
        $this->Properties = $value;

        return $this;
    }
}
