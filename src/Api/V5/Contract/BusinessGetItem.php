<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BusinessGetItem
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $Address;

//    Can be omitted.
//    protected $Phone;

//    Can be omitted.
//    protected $ProfileUrl;

//    Can be omitted.
//    protected $InternalUrl;

//    Can be omitted.
//    protected $IsPublished;

//    Can be omitted.
//    protected $MergedIds;

//    Can be omitted.
//    protected $Rubric;

//    Can be omitted.
//    protected $Urls;

//    Can be omitted.
//    protected $HasOffice;

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
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

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
     * Get Address
     */
    public function getAddress(): ?string
    {
        return $this->Address ?? null;
    }

    /**
     * Set Address
     *
     * @return $this
     */
    public function setAddress(?string $value)
    {
        $this->Address = $value;

        return $this;
    }

    /**
     * Get Phone
     */
    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }

    /**
     * Set Phone
     *
     * @return $this
     */
    public function setPhone(?string $value)
    {
        $this->Phone = $value;

        return $this;
    }

    /**
     * Get ProfileUrl
     */
    public function getProfileUrl(): ?string
    {
        return $this->ProfileUrl ?? null;
    }

    /**
     * Set ProfileUrl
     *
     * @return $this
     */
    public function setProfileUrl(?string $value)
    {
        $this->ProfileUrl = $value;

        return $this;
    }

    /**
     * Get InternalUrl
     */
    public function getInternalUrl(): ?string
    {
        return $this->InternalUrl ?? null;
    }

    /**
     * Set InternalUrl
     *
     * @return $this
     */
    public function setInternalUrl(?string $value)
    {
        $this->InternalUrl = $value;

        return $this;
    }

    /**
     * Get IsPublished
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getIsPublished(): ?string
    {
        return $this->IsPublished ?? null;
    }

    /**
     * Set IsPublished
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setIsPublished(?string $value)
    {
        $this->IsPublished = $value;

        return $this;
    }

    /**
     * Get MergedIds
     *
     * @return non-empty-list<int>|null
     */
    public function getMergedIds(): ?array
    {
        return $this->MergedIds ?? null;
    }

    /**
     * Set MergedIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setMergedIds(?array $value)
    {
        $this->MergedIds = $value;

        return $this;
    }

    /**
     * Get Rubric
     */
    public function getRubric(): ?string
    {
        return $this->Rubric ?? null;
    }

    /**
     * Set Rubric
     *
     * @return $this
     */
    public function setRubric(?string $value)
    {
        $this->Rubric = $value;

        return $this;
    }

    /**
     * Get Urls
     *
     * @return non-empty-list<string>|null
     */
    public function getUrls(): ?array
    {
        return $this->Urls ?? null;
    }

    /**
     * Set Urls
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setUrls(?array $value)
    {
        $this->Urls = $value;

        return $this;
    }

    /**
     * Get HasOffice
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getHasOffice(): ?string
    {
        return $this->HasOffice ?? null;
    }

    /**
     * Set HasOffice
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setHasOffice(?string $value)
    {
        $this->HasOffice = $value;

        return $this;
    }
}
