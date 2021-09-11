<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdFeatureGetItem extends MobileAppAdFeatureItem
{
    protected $IsAvailable = null;

    /**
     * Creates a new instance of MobileAppAdFeatureGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets IsAvailable.
     *
     * @see YesNoUnknownEnum
     */
    public function getIsAvailable(): string
    {
        return $this->IsAvailable;
    }

    /**
     * Sets IsAvailable.
     *
     * @see YesNoUnknownEnum
     *
     * @return $this
     */
    public function setIsAvailable(string $value)
    {
        $this->IsAvailable = $value;

        return $this;
    }
}
