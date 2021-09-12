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
     * @see YesNoUnknownEnum
     */
    public function getIsAvailable(): string
    {
        return $this->IsAvailable;
    }

    /**
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
