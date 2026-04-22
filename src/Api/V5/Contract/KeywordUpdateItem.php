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
    /** @var int */
    protected $Id;

//    Can be omitted.
//    protected $Keyword;

//    Can be omitted.
//    protected $UserParam1;

//    Can be omitted.
//    protected $UserParam2;

//    Can be omitted.
//    protected $AutotargetingCategories;

//    Can be omitted.
//    protected $AutotargetingBrandOptions;

//    Can be omitted.
//    protected $AutotargetingSettings;

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
     * Get Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Keyword
     */
    public function getKeyword(): ?string
    {
        return $this->Keyword ?? null;
    }

    /**
     * Set Keyword
     *
     * @return $this
     */
    public function setKeyword(?string $value)
    {
        $this->Keyword = $value;

        return $this;
    }

    /**
     * Get UserParam1
     */
    public function getUserParam1(): ?string
    {
        return $this->UserParam1 ?? null;
    }

    /**
     * Set UserParam1
     *
     * @return $this
     */
    public function setUserParam1(?string $value)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Get UserParam2
     */
    public function getUserParam2(): ?string
    {
        return $this->UserParam2 ?? null;
    }

    /**
     * Set UserParam2
     *
     * @return $this
     */
    public function setUserParam2(?string $value)
    {
        $this->UserParam2 = $value;

        return $this;
    }

    /**
     * Get AutotargetingCategories
     *
     * @return list<AutotargetingCategory>
     */
    public function getAutotargetingCategories(): array
    {
        return $this->AutotargetingCategories ?? [];
    }

    /**
     * Set AutotargetingCategories
     *
     * @param list<AutotargetingCategory> $value
     *
     * @return $this
     */
    public function setAutotargetingCategories(array $value)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }

    /**
     * Get AutotargetingBrandOptions
     *
     * @return list<AutotargetingBrandOption>
     */
    public function getAutotargetingBrandOptions(): array
    {
        return $this->AutotargetingBrandOptions ?? [];
    }

    /**
     * Set AutotargetingBrandOptions
     *
     * @param list<AutotargetingBrandOption> $value
     *
     * @return $this
     */
    public function setAutotargetingBrandOptions(array $value)
    {
        $this->AutotargetingBrandOptions = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettings
     */
    public function getAutotargetingSettings(): ?AutotargetingSettings
    {
        return $this->AutotargetingSettings ?? null;
    }

    /**
     * Set AutotargetingSettings
     *
     * @return $this
     */
    public function setAutotargetingSettings(?AutotargetingSettings $value)
    {
        $this->AutotargetingSettings = $value;

        return $this;
    }
}
