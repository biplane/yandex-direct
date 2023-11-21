<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class KeywordUpdateItem
{
    protected $Id = null;

//    Can be omitted.
//    protected $Keyword = null;

//    Can be omitted.
//    protected $UserParam1 = null;

//    Can be omitted.
//    protected $UserParam2 = null;

//    Can be omitted.
//    protected $AutotargetingCategories = null;

//    Can be omitted.
//    protected $AutotargetingBrandOptions = null;

//    Can be omitted.
//    protected $AutotargetingSettings = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * @return $this
     */
    public function setKeyword(?string $value = null)
    {
        $this->Keyword = $value;

        return $this;
    }

    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * @return $this
     */
    public function setUserParam1(?string $value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * @return $this
     */
    public function setUserParam2(?string $value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }

    /**
     * @return AutotargetingCategory[]|null
     */
    public function getAutotargetingCategories(): ?array
    {
        return $this->AutotargetingCategories ?? null;
    }

    /**
     * @param AutotargetingCategory[]|null $value
     *
     * @return $this
     */
    public function setAutotargetingCategories(?array $value = null)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }

    /**
     * @return AutotargetingBrandOption[]|null
     */
    public function getAutotargetingBrandOptions(): ?array
    {
        return $this->AutotargetingBrandOptions ?? null;
    }

    /**
     * @param AutotargetingBrandOption[]|null $value
     *
     * @return $this
     */
    public function setAutotargetingBrandOptions(?array $value = null)
    {
        $this->AutotargetingBrandOptions = $value;

        return $this;
    }

    public function getAutotargetingSettings(): ?AutotargetingSettings
    {
        return $this->AutotargetingSettings ?? null;
    }

    /**
     * @return $this
     */
    public function setAutotargetingSettings(?AutotargetingSettings $value = null)
    {
        $this->AutotargetingSettings = $value;

        return $this;
    }
}
