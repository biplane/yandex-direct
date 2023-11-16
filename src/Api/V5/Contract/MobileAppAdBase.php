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
//    protected $Title = null;

//    Can be omitted.
//    protected $Text = null;

//    Can be omitted.
//    protected $TrackingUrl = null;

//    Can be omitted.
//    protected $Action = null;

//    Can be omitted.
//    protected $AdImageHash = null;

//    Can be omitted.
//    protected $ErirAdDescription = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * @return $this
     */
    public function setTitle(?string $value = null)
    {
        $this->Title = $value;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * @return $this
     */
    public function setText(?string $value = null)
    {
        $this->Text = $value;

        return $this;
    }

    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setTrackingUrl(?string $value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }

    /**
     * @see MobileAppAdActionEnum
     */
    public function getAction(): ?string
    {
        return $this->Action ?? null;
    }

    /**
     * @see MobileAppAdActionEnum
     *
     * @return $this
     */
    public function setAction(?string $value = null)
    {
        $this->Action = $value;

        return $this;
    }

    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setErirAdDescription(?string $value = null)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
