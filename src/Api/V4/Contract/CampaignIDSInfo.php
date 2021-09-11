<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignIDSInfo
{
    protected $CampaignIDS = [];

    protected $Currency = null;

    /**
     * Creates a new instance of CampaignIDSInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS(): array
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setCampaignIDS(array $value)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
