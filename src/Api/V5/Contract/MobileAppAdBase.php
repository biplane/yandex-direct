<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdBase
{
//    Can be omit.
//    protected $Title = null;

//    Can be omit.
//    protected $Text = null;

//    Can be omit.
//    protected $TrackingUrl = null;

//    Can be omit.
//    protected $Action = null;

//    Can be omit.
//    protected $AdImageHash = null;

    /**
     * Creates a new instance of MobileAppAdBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Title.
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Sets Title.
     *
     * @return $this
     */
    public function setTitle(?string $value = null)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Text.
     */
    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * Sets Text.
     *
     * @return $this
     */
    public function setText(?string $value = null)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Gets TrackingUrl.
     */
    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * Sets TrackingUrl.
     *
     * @return $this
     */
    public function setTrackingUrl(?string $value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }

    /**
     * Gets Action.
     *
     * @see MobileAppAdActionEnum
     */
    public function getAction(): ?string
    {
        return $this->Action ?? null;
    }

    /**
     * Sets Action.
     *
     * @see MobileAppAdActionEnum
     *
     * @return $this
     */
    public function setAction(?string $value = null)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets AdImageHash.
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * Sets AdImageHash.
     *
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }
}
