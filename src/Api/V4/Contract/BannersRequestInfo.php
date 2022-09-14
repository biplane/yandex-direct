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
    protected $CampaignIDS = null;

    protected $BannerIDS = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIDS(?array $value = null)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getBannerIDS(): ?array
    {
        return $this->BannerIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setBannerIDS(?array $value = null)
    {
        $this->BannerIDS = $value;

        return $this;
    }
}
