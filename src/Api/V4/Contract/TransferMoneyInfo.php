<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TransferMoneyInfo
{
    protected $FromCampaigns = [];

    protected $ToCampaigns = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return PayCampElement[]
     */
    public function getFromCampaigns(): array
    {
        return $this->FromCampaigns;
    }

    /**
     * @param PayCampElement[] $value
     *
     * @return $this
     */
    public function setFromCampaigns(array $value)
    {
        $this->FromCampaigns = $value;

        return $this;
    }

    /**
     * @return PayCampElement[]
     */
    public function getToCampaigns(): array
    {
        return $this->ToCampaigns;
    }

    /**
     * @param PayCampElement[] $value
     *
     * @return $this
     */
    public function setToCampaigns(array $value)
    {
        $this->ToCampaigns = $value;

        return $this;
    }
}
