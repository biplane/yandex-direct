<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdFeatureItem
{
    protected $Feature = null;

    protected $Enabled = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see MobileAppFeatureEnum
     */
    public function getFeature(): string
    {
        return $this->Feature;
    }

    /**
     * @see MobileAppFeatureEnum
     *
     * @return $this
     */
    public function setFeature(string $value)
    {
        $this->Feature = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getEnabled(): string
    {
        return $this->Enabled;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setEnabled(string $value)
    {
        $this->Enabled = $value;

        return $this;
    }
}
