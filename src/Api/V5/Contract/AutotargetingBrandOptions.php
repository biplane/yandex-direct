<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AutotargetingBrandOptions
{
//    Can be omitted.
//    protected $WithoutBrands;

//    Can be omitted.
//    protected $WithAdvertiserBrand;

//    Can be omitted.
//    protected $WithCompetitorsBrand;

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
     * Get WithoutBrands
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getWithoutBrands(): ?string
    {
        return $this->WithoutBrands ?? null;
    }

    /**
     * Set WithoutBrands
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setWithoutBrands(?string $value)
    {
        $this->WithoutBrands = $value;

        return $this;
    }

    /**
     * Get WithAdvertiserBrand
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getWithAdvertiserBrand(): ?string
    {
        return $this->WithAdvertiserBrand ?? null;
    }

    /**
     * Set WithAdvertiserBrand
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setWithAdvertiserBrand(?string $value)
    {
        $this->WithAdvertiserBrand = $value;

        return $this;
    }

    /**
     * Get WithCompetitorsBrand
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getWithCompetitorsBrand(): ?string
    {
        return $this->WithCompetitorsBrand ?? null;
    }

    /**
     * Set WithCompetitorsBrand
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setWithCompetitorsBrand(?string $value)
    {
        $this->WithCompetitorsBrand = $value;

        return $this;
    }
}
