<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignIDSInfo
{
//    Can be omitted.
//    protected $CampaignIDS;

    /** @var string|null */
    protected $Currency = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get CampaignIDS
     *
     * @return list<int>
     */
    public function getCampaignIDS(): array
    {
        return $this->CampaignIDS ?? [];
    }

    /**
     * Set CampaignIDS
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setCampaignIDS(array $value)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * Get Currency
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }
}
