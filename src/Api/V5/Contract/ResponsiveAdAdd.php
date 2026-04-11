<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ResponsiveAdAdd
{
    protected $Texts = [];

    protected $Titles = [];

//    Can be omitted.
//    protected $AdImageHashes = null;

//    Can be omitted.
//    protected $VideoExtensionIds = null;

//    Can be omitted.
//    protected $Href = null;

//    Can be omitted.
//    protected $AgeLabel = null;

//    Can be omitted.
//    protected $DisplayUrlPath = null;

//    Can be omitted.
//    protected $SitelinkSetId = null;

//    Can be omitted.
//    protected $AdExtensionIds = null;

//    Can be omitted.
//    protected $PriceExtension = null;

//    Can be omitted.
//    protected $BusinessId = null;

//    Can be omitted.
//    protected $ErirAdDescription = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]
     */
    public function getTexts(): array
    {
        return $this->Texts;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setTexts(array $value)
    {
        $this->Texts = $value;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTitles(): array
    {
        return $this->Titles;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setTitles(array $value)
    {
        $this->Titles = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAdImageHashes(?array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getVideoExtensionIds(): ?array
    {
        return $this->VideoExtensionIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setVideoExtensionIds(?array $value = null)
    {
        $this->VideoExtensionIds = $value;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * @return $this
     */
    public function setHref(?string $value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * @see AgeLabelEnum
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * @see AgeLabelEnum
     *
     * @return $this
     */
    public function setAgeLabel(?string $value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    public function getDisplayUrlPath(): ?string
    {
        return $this->DisplayUrlPath ?? null;
    }

    /**
     * @return $this
     */
    public function setDisplayUrlPath(?string $value = null)
    {
        $this->DisplayUrlPath = $value;

        return $this;
    }

    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * @return $this
     */
    public function setSitelinkSetId(?int $value = null)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdExtensionIds(): ?array
    {
        return $this->AdExtensionIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdExtensionIds(?array $value = null)
    {
        $this->AdExtensionIds = $value;

        return $this;
    }

    public function getPriceExtension(): ?PriceExtensionAddItem
    {
        return $this->PriceExtension ?? null;
    }

    /**
     * @return $this
     */
    public function setPriceExtension(?PriceExtensionAddItem $value = null)
    {
        $this->PriceExtension = $value;

        return $this;
    }

    public function getBusinessId(): ?int
    {
        return $this->BusinessId ?? null;
    }

    /**
     * @return $this
     */
    public function setBusinessId(?int $value = null)
    {
        $this->BusinessId = $value;

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
