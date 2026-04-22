<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdBase
{
//    Can be omitted.
//    protected $Title;

//    Can be omitted.
//    protected $Text;

//    Can be omitted.
//    protected $TrackingUrl;

//    Can be omitted.
//    protected $Action;

//    Can be omitted.
//    protected $AdImageHash;

//    Can be omitted.
//    protected $ErirAdDescription;

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
     * Get Title
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Set Title
     *
     * @return $this
     */
    public function setTitle(?string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Get Text
     */
    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * Set Text
     *
     * @return $this
     */
    public function setText(?string $value)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Get TrackingUrl
     */
    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * Set TrackingUrl
     *
     * @return $this
     */
    public function setTrackingUrl(?string $value)
    {
        $this->TrackingUrl = $value;

        return $this;
    }

    /**
     * Get Action
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum
     *
     * @return 'DOWNLOAD'|'GET'|'INSTALL'|'MORE'|'OPEN'|'UPDATE'|'PLAY'|'BUY_AUTODETECT'|null
     */
    public function getAction(): ?string
    {
        return $this->Action ?? null;
    }

    /**
     * Set Action
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum
     *
     * @param 'DOWNLOAD'|'GET'|'INSTALL'|'MORE'|'OPEN'|'UPDATE'|'PLAY'|'BUY_AUTODETECT'|null $value
     *
     * @return $this
     */
    public function setAction(?string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Get AdImageHash
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * Set AdImageHash
     *
     * @return $this
     */
    public function setAdImageHash(?string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Get ErirAdDescription
     */
    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * Set ErirAdDescription
     *
     * @return $this
     */
    public function setErirAdDescription(?string $value)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
