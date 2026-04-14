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
//    Can be omitted.
//    protected $FromCampaigns;

//    Can be omitted.
//    protected $ToCampaigns;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get FromCampaigns
     *
     * @return list<PayCampElement>
     */
    public function getFromCampaigns(): array
    {
        return $this->FromCampaigns ?? [];
    }

    /**
     * Set FromCampaigns
     *
     * @param list<PayCampElement> $value
     *
     * @return $this
     */
    public function setFromCampaigns(array $value)
    {
        $this->FromCampaigns = $value;

        return $this;
    }

    /**
     * Get ToCampaigns
     *
     * @return list<PayCampElement>
     */
    public function getToCampaigns(): array
    {
        return $this->ToCampaigns ?? [];
    }

    /**
     * Set ToCampaigns
     *
     * @param list<PayCampElement> $value
     *
     * @return $this
     */
    public function setToCampaigns(array $value)
    {
        $this->ToCampaigns = $value;

        return $this;
    }
}
