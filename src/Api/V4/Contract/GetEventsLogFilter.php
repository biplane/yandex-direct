<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetEventsLogFilter
{
    protected $CampaignIDS = null;

    protected $BannerIDS = null;

    protected $PhraseIDS = null;

    protected $AccountIDS = null;

    protected $EventType = null;

    /**
     * Creates a new instance of GetEventsLogFilter.
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

    /**
     * Gets PhraseIDS.
     *
     * @return int[]|null
     */
    public function getPhraseIDS(): ?array
    {
        return $this->PhraseIDS;
    }

    /**
     * Sets PhraseIDS.
     *
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
     * Gets AccountIDS.
     *
     * @return int[]|null
     */
    public function getAccountIDS(): ?array
    {
        return $this->AccountIDS;
    }

    /**
     * Sets AccountIDS.
     *
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
     * Gets EventType.
     *
     * @return string[]|null
     */
    public function getEventType(): ?array
    {
        return $this->EventType;
    }

    /**
     * Sets EventType.
     *
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
