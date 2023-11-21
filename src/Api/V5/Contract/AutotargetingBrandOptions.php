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
//    protected $WithoutBrands = null;

//    Can be omitted.
//    protected $WithAdvertiserBrand = null;

//    Can be omitted.
//    protected $WithCompetitorsBrand = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see YesNoEnum
     */
    public function getWithoutBrands(): ?string
    {
        return $this->WithoutBrands ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setWithoutBrands(?string $value = null)
    {
        $this->WithoutBrands = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getWithAdvertiserBrand(): ?string
    {
        return $this->WithAdvertiserBrand ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setWithAdvertiserBrand(?string $value = null)
    {
        $this->WithAdvertiserBrand = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getWithCompetitorsBrand(): ?string
    {
        return $this->WithCompetitorsBrand ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setWithCompetitorsBrand(?string $value = null)
    {
        $this->WithCompetitorsBrand = $value;

        return $this;
    }
}
