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
    protected $CampaignIDS = [];

    protected $Currency = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]
     */
    public function getCampaignIDS(): array
    {
        return $this->CampaignIDS;
    }

    /**
     * @param int[] $value
     *
     * @return $this
     */
    public function setCampaignIDS(array $value)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
