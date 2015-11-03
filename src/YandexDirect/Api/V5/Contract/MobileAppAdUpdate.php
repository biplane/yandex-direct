<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdUpdate extends MobileAppAdBase
{

    protected $Features = null;

    protected $AgeLabel = null;

    /**
     * Creates a new instance of MobileAppAdUpdate.
     *
     * @return MobileAppAdUpdate
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Features.
     *
     * @return MobileAppAdFeatureItem[]|null
     */
    public function getFeatures()
    {
        return $this->Features;
    }

    /**
     * Sets Features.
     *
     * @param MobileAppAdFeatureItem[]|null $value
     * @return $this
     */
    public function setFeatures(array $value = null)
    {
        $this->Features = $value;

        return $this;
    }

    /**
     * Gets AgeLabel.
     *
     * @return MobAppAgeLabelEnum|null
     */
    public function getAgeLabel()
    {
        return $this->AgeLabel;
    }

    /**
     * Sets AgeLabel.
     *
     * @param MobAppAgeLabelEnum|null $value
     * @return $this
     */
    public function setAgeLabel(MobAppAgeLabelEnum $value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }


}

