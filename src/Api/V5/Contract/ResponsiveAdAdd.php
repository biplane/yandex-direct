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
    /** @var non-empty-list<string> */
    protected $Texts;

    /** @var non-empty-list<string> */
    protected $Titles;

//    Can be omitted.
//    protected $AdImageHashes;

//    Can be omitted.
//    protected $VideoExtensionIds;

//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $AgeLabel;

//    Can be omitted.
//    protected $DisplayUrlPath;

//    Can be omitted.
//    protected $SitelinkSetId;

//    Can be omitted.
//    protected $AdExtensionIds;

//    Can be omitted.
//    protected $PriceExtension;

//    Can be omitted.
//    protected $BusinessId;

//    Can be omitted.
//    protected $ErirAdDescription;

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
     * Get Texts
     *
     * @return non-empty-list<string>
     */
    public function getTexts(): array
    {
        return $this->Texts;
    }

    /**
     * Set Texts
     *
     * @param non-empty-list<string> $value
     *
     * @return $this
     */
    public function setTexts(array $value)
    {
        $this->Texts = $value;

        return $this;
    }

    /**
     * Get Titles
     *
     * @return non-empty-list<string>
     */
    public function getTitles(): array
    {
        return $this->Titles;
    }

    /**
     * Set Titles
     *
     * @param non-empty-list<string> $value
     *
     * @return $this
     */
    public function setTitles(array $value)
    {
        $this->Titles = $value;

        return $this;
    }

    /**
     * Get AdImageHashes
     *
     * @return list<string>
     */
    public function getAdImageHashes(): array
    {
        return $this->AdImageHashes ?? [];
    }

    /**
     * Set AdImageHashes
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setAdImageHashes(array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Get VideoExtensionIds
     *
     * @return list<int>
     */
    public function getVideoExtensionIds(): array
    {
        return $this->VideoExtensionIds ?? [];
    }

    /**
     * Set VideoExtensionIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setVideoExtensionIds(array $value)
    {
        $this->VideoExtensionIds = $value;

        return $this;
    }

    /**
     * Get Href
     */
    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * Set Href
     *
     * @return $this
     */
    public function setHref(?string $value)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Get AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum
     *
     * @return 'MONTHS_0'|'MONTHS_1'|'MONTHS_2'|'MONTHS_3'|'MONTHS_4'|'MONTHS_5'|'MONTHS_6'|'MONTHS_7'|'MONTHS_8'|'MONTHS_9'|'MONTHS_10'|'MONTHS_11'|'MONTHS_12'|'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * Set AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum
     *
     * @param 'MONTHS_0'|'MONTHS_1'|'MONTHS_2'|'MONTHS_3'|'MONTHS_4'|'MONTHS_5'|'MONTHS_6'|'MONTHS_7'|'MONTHS_8'|'MONTHS_9'|'MONTHS_10'|'MONTHS_11'|'MONTHS_12'|'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null $value
     *
     * @return $this
     */
    public function setAgeLabel(?string $value)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Get DisplayUrlPath
     */
    public function getDisplayUrlPath(): ?string
    {
        return $this->DisplayUrlPath ?? null;
    }

    /**
     * Set DisplayUrlPath
     *
     * @return $this
     */
    public function setDisplayUrlPath(?string $value)
    {
        $this->DisplayUrlPath = $value;

        return $this;
    }

    /**
     * Get SitelinkSetId
     */
    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * Set SitelinkSetId
     *
     * @return $this
     */
    public function setSitelinkSetId(?int $value)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    /**
     * Get AdExtensionIds
     *
     * @return list<int>
     */
    public function getAdExtensionIds(): array
    {
        return $this->AdExtensionIds ?? [];
    }

    /**
     * Set AdExtensionIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setAdExtensionIds(array $value)
    {
        $this->AdExtensionIds = $value;

        return $this;
    }

    /**
     * Get PriceExtension
     */
    public function getPriceExtension(): ?PriceExtensionAddItem
    {
        return $this->PriceExtension ?? null;
    }

    /**
     * Set PriceExtension
     *
     * @return $this
     */
    public function setPriceExtension(?PriceExtensionAddItem $value)
    {
        $this->PriceExtension = $value;

        return $this;
    }

    /**
     * Get BusinessId
     */
    public function getBusinessId(): ?int
    {
        return $this->BusinessId ?? null;
    }

    /**
     * Set BusinessId
     *
     * @return $this
     */
    public function setBusinessId(?int $value)
    {
        $this->BusinessId = $value;

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
