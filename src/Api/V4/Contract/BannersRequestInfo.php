<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BannersRequestInfo
{
//    Can be omitted.
//    protected $CampaignIDS;

//    Can be omitted.
//    protected $BannerIDS;

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
     * @return list<int>|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS ?? null;
    }

    /**
     * Set CampaignIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setCampaignIDS(?array $value)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * Get BannerIDS
     *
     * @return list<int>|null
     */
    public function getBannerIDS(): ?array
    {
        return $this->BannerIDS ?? null;
    }

    /**
     * Set BannerIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setBannerIDS(?array $value)
    {
        $this->BannerIDS = $value;

        return $this;
    }
}
