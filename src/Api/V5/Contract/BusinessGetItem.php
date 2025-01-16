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
//    protected $Id = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $Address = null;

//    Can be omitted.
//    protected $Phone = null;

//    Can be omitted.
//    protected $ProfileUrl = null;

//    Can be omitted.
//    protected $InternalUrl = null;

//    Can be omitted.
//    protected $IsPublished = null;

//    Can be omitted.
//    protected $MergedIds = null;

//    Can be omitted.
//    protected $Rubric = null;

//    Can be omitted.
//    protected $Urls = null;

//    Can be omitted.
//    protected $HasOffice = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address ?? null;
    }

    /**
     * @return $this
     */
    public function setAddress(?string $value = null)
    {
        $this->Address = $value;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }

    /**
     * @return $this
     */
    public function setPhone(?string $value = null)
    {
        $this->Phone = $value;

        return $this;
    }

    public function getProfileUrl(): ?string
    {
        return $this->ProfileUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setProfileUrl(?string $value = null)
    {
        $this->ProfileUrl = $value;

        return $this;
    }

    public function getInternalUrl(): ?string
    {
        return $this->InternalUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setInternalUrl(?string $value = null)
    {
        $this->InternalUrl = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getIsPublished(): ?string
    {
        return $this->IsPublished ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setIsPublished(?string $value = null)
    {
        $this->IsPublished = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getMergedIds(): ?array
    {
        return $this->MergedIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setMergedIds(?array $value = null)
    {
        $this->MergedIds = $value;

        return $this;
    }

    public function getRubric(): ?string
    {
        return $this->Rubric ?? null;
    }

    /**
     * @return $this
     */
    public function setRubric(?string $value = null)
    {
        $this->Rubric = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getUrls(): ?array
    {
        return $this->Urls ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setUrls(?array $value = null)
    {
        $this->Urls = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getHasOffice(): ?string
    {
        return $this->HasOffice ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setHasOffice(?string $value = null)
    {
        $this->HasOffice = $value;

        return $this;
    }
}
