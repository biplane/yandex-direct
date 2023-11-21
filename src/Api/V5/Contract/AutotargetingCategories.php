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
//    protected $Exact = null;

//    Can be omitted.
//    protected $Narrow = null;

//    Can be omitted.
//    protected $Alternative = null;

//    Can be omitted.
//    protected $Accessory = null;

//    Can be omitted.
//    protected $Broader = null;

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
    public function getExact(): ?string
    {
        return $this->Exact ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setExact(?string $value = null)
    {
        $this->Exact = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getNarrow(): ?string
    {
        return $this->Narrow ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setNarrow(?string $value = null)
    {
        $this->Narrow = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getAlternative(): ?string
    {
        return $this->Alternative ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAlternative(?string $value = null)
    {
        $this->Alternative = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getAccessory(): ?string
    {
        return $this->Accessory ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAccessory(?string $value = null)
    {
        $this->Accessory = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getBroader(): ?string
    {
        return $this->Broader ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setBroader(?string $value = null)
    {
        $this->Broader = $value;

        return $this;
    }
}
