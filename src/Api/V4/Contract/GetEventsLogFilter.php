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
    protected $CampaignIDS = null;

    protected $BannerIDS = null;

    protected $PhraseIDS = null;

    protected $AccountIDS = null;

    protected $EventType = null;

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

    /**
     * @return int[]|null
     */
    public function getPhraseIDS(): ?array
    {
        return $this->PhraseIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setPhraseIDS(?array $value = null)
    {
        $this->PhraseIDS = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAccountIDS(): ?array
    {
        return $this->AccountIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAccountIDS(?array $value = null)
    {
        $this->AccountIDS = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getEventType(): ?array
    {
        return $this->EventType;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setEventType(?array $value = null)
    {
        $this->EventType = $value;

        return $this;
    }
}
