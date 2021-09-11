<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannersRequestInfo
{
    protected $CampaignIDS = null;

    protected $BannerIDS = null;

    /**
     * Creates a new instance of BannersRequestInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
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
     * Gets BannerIDS.
     *
     * @return int[]|null
     */
    public function getBannerIDS(): ?array
    {
        return $this->BannerIDS;
    }

    /**
     * Sets BannerIDS.
     *
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
