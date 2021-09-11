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
     * Creates a new instance of MobileAppAdFeatureItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Feature.
     *
     * @see MobileAppFeatureEnum
     */
    public function getFeature(): string
    {
        return $this->Feature;
    }

    /**
     * Sets Feature.
     *
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
     * Gets Enabled.
     *
     * @see YesNoEnum
     */
    public function getEnabled(): string
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
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
