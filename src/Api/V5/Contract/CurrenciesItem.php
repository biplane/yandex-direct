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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * @return ConstantsItem[]
     */
    public function getProperties(): array
    {
        return $this->Properties;
    }

    /**
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
