<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageGetItem
{
//    Can be omitted.
//    protected $AdImageHash;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $Associated;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $Subtype;

//    Can be omitted.
//    protected $OriginalUrl;

//    Can be omitted.
//    protected $PreviewUrl;

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
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get Associated
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAssociated(): ?string
    {
        return $this->Associated ?? null;
    }

    /**
     * Set Associated
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAssociated(?string $value)
    {
        $this->Associated = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdImageTypeEnum
     *
     * @return 'SMALL'|'REGULAR'|'WIDE'|'FIXED_IMAGE'|'UNFIT'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdImageTypeEnum
     *
     * @param 'SMALL'|'REGULAR'|'WIDE'|'FIXED_IMAGE'|'UNFIT'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Subtype
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdImageSubtypeEnum
     *
     * @return 'IMG_240_400'|'IMG_300_250'|'IMG_300_500'|'IMG_300_600'|'IMG_320_50'|'IMG_320_100'|'IMG_320_480'|'IMG_336_280'|'IMG_480_320'|'IMG_728_90'|'IMG_970_250'|'IMG_516_272'|'IMG_223_159'|'IMG_480_800'|'IMG_600_500'|'IMG_600_1000'|'IMG_600_1200'|'IMG_640_100'|'IMG_640_200'|'IMG_640_960'|'IMG_672_560'|'IMG_960_640'|'IMG_1456_180'|'IMG_1940_500'|'IMG_1032_544'|'IMG_446_318'|'IMG_720_1200'|'IMG_900_750'|'IMG_900_1500'|'IMG_900_1800'|'IMG_960_150'|'IMG_960_300'|'IMG_960_1440'|'IMG_1008_840'|'IMG_1440_960'|'IMG_2184_270'|'IMG_2910_750'|'IMG_1548_816'|'IMG_669_477'|'IMG_960_1600'|'IMG_1200_1000'|'IMG_1200_2000'|'IMG_1200_2400'|'IMG_1280_200'|'IMG_1280_400'|'IMG_1280_1920'|'IMG_1344_1120'|'IMG_1920_1280'|'IMG_2912_360'|'IMG_3880_1000'|'IMG_2064_1088'|'IMG_892_636'|'NONE'|null
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * Set Subtype
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdImageSubtypeEnum
     *
     * @param 'IMG_240_400'|'IMG_300_250'|'IMG_300_500'|'IMG_300_600'|'IMG_320_50'|'IMG_320_100'|'IMG_320_480'|'IMG_336_280'|'IMG_480_320'|'IMG_728_90'|'IMG_970_250'|'IMG_516_272'|'IMG_223_159'|'IMG_480_800'|'IMG_600_500'|'IMG_600_1000'|'IMG_600_1200'|'IMG_640_100'|'IMG_640_200'|'IMG_640_960'|'IMG_672_560'|'IMG_960_640'|'IMG_1456_180'|'IMG_1940_500'|'IMG_1032_544'|'IMG_446_318'|'IMG_720_1200'|'IMG_900_750'|'IMG_900_1500'|'IMG_900_1800'|'IMG_960_150'|'IMG_960_300'|'IMG_960_1440'|'IMG_1008_840'|'IMG_1440_960'|'IMG_2184_270'|'IMG_2910_750'|'IMG_1548_816'|'IMG_669_477'|'IMG_960_1600'|'IMG_1200_1000'|'IMG_1200_2000'|'IMG_1200_2400'|'IMG_1280_200'|'IMG_1280_400'|'IMG_1280_1920'|'IMG_1344_1120'|'IMG_1920_1280'|'IMG_2912_360'|'IMG_3880_1000'|'IMG_2064_1088'|'IMG_892_636'|'NONE'|null $value
     *
     * @return $this
     */
    public function setSubtype(?string $value)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Get OriginalUrl
     */
    public function getOriginalUrl(): ?string
    {
        return $this->OriginalUrl ?? null;
    }

    /**
     * Set OriginalUrl
     *
     * @return $this
     */
    public function setOriginalUrl(?string $value)
    {
        $this->OriginalUrl = $value;

        return $this;
    }

    /**
     * Get PreviewUrl
     */
    public function getPreviewUrl(): ?string
    {
        return $this->PreviewUrl ?? null;
    }

    /**
     * Set PreviewUrl
     *
     * @return $this
     */
    public function setPreviewUrl(?string $value)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
