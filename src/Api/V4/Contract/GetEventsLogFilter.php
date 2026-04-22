<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetEventsLogFilter
{
//    Can be omitted.
//    protected $CampaignIDS;

//    Can be omitted.
//    protected $BannerIDS;

//    Can be omitted.
//    protected $PhraseIDS;

//    Can be omitted.
//    protected $AccountIDS;

//    Can be omitted.
//    protected $EventType;

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

    /**
     * Get PhraseIDS
     *
     * @return list<int>|null
     */
    public function getPhraseIDS(): ?array
    {
        return $this->PhraseIDS ?? null;
    }

    /**
     * Set PhraseIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setPhraseIDS(?array $value)
    {
        $this->PhraseIDS = $value;

        return $this;
    }

    /**
     * Get AccountIDS
     *
     * @return list<int>|null
     */
    public function getAccountIDS(): ?array
    {
        return $this->AccountIDS ?? null;
    }

    /**
     * Set AccountIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setAccountIDS(?array $value)
    {
        $this->AccountIDS = $value;

        return $this;
    }

    /**
     * Get EventType
     *
     * @return list<string>|null
     */
    public function getEventType(): ?array
    {
        return $this->EventType ?? null;
    }

    /**
     * Set EventType
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setEventType(?array $value)
    {
        $this->EventType = $value;

        return $this;
    }
}
