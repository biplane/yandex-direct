<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AutotargetingCategories
{
//    Can be omitted.
//    protected $Exact;

//    Can be omitted.
//    protected $Narrow;

//    Can be omitted.
//    protected $Alternative;

//    Can be omitted.
//    protected $Accessory;

//    Can be omitted.
//    protected $Broader;

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
     * Get Exact
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getExact(): ?string
    {
        return $this->Exact ?? null;
    }

    /**
     * Set Exact
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setExact(?string $value)
    {
        $this->Exact = $value;

        return $this;
    }

    /**
     * Get Narrow
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getNarrow(): ?string
    {
        return $this->Narrow ?? null;
    }

    /**
     * Set Narrow
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setNarrow(?string $value)
    {
        $this->Narrow = $value;

        return $this;
    }

    /**
     * Get Alternative
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAlternative(): ?string
    {
        return $this->Alternative ?? null;
    }

    /**
     * Set Alternative
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAlternative(?string $value)
    {
        $this->Alternative = $value;

        return $this;
    }

    /**
     * Get Accessory
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAccessory(): ?string
    {
        return $this->Accessory ?? null;
    }

    /**
     * Set Accessory
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAccessory(?string $value)
    {
        $this->Accessory = $value;

        return $this;
    }

    /**
     * Get Broader
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getBroader(): ?string
    {
        return $this->Broader ?? null;
    }

    /**
     * Set Broader
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setBroader(?string $value)
    {
        $this->Broader = $value;

        return $this;
    }
}
