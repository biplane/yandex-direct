<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignBase
{
//    Can be omit.
//    protected $CounterId = null;

//    Can be omit.
//    protected $AttributionModel = null;

    /**
     * Creates a new instance of SmartCampaignBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CounterId.
     */
    public function getCounterId(): ?int
    {
        return $this->CounterId ?? null;
    }

    /**
     * Sets CounterId.
     *
     * @return $this
     */
    public function setCounterId(?int $value = null)
    {
        $this->CounterId = $value;

        return $this;
    }

    /**
     * Gets AttributionModel.
     *
     * @see AttributionModelEnum
     */
    public function getAttributionModel(): ?string
    {
        return $this->AttributionModel ?? null;
    }

    /**
     * Sets AttributionModel.
     *
     * @see AttributionModelEnum
     *
     * @return $this
     */
    public function setAttributionModel(?string $value = null)
    {
        $this->AttributionModel = $value;

        return $this;
    }
}
