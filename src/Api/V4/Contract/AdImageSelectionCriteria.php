<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageSelectionCriteria
{
//    Can be omitted.
//    protected $Logins;

//    Can be omitted.
//    protected $AdImageHashes;

//    Can be omitted.
//    protected $AdImageUploadTaskIDS;

//    Can be omitted.
//    protected $Assigned;

    /** @var int|null */
    protected $Limit = null;

    /** @var int|null */
    protected $Offset = null;

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
     * Get Logins
     *
     * @return list<string>|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins ?? null;
    }

    /**
     * Set Logins
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Get AdImageHashes
     *
     * @return list<string>|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes ?? null;
    }

    /**
     * Set AdImageHashes
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setAdImageHashes(?array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Get AdImageUploadTaskIDS
     *
     * @return list<int>|null
     */
    public function getAdImageUploadTaskIDS(): ?array
    {
        return $this->AdImageUploadTaskIDS ?? null;
    }

    /**
     * Set AdImageUploadTaskIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setAdImageUploadTaskIDS(?array $value)
    {
        $this->AdImageUploadTaskIDS = $value;

        return $this;
    }

    /**
     * Get Assigned
     *
     * @return list<string>|null
     */
    public function getAssigned(): ?array
    {
        return $this->Assigned ?? null;
    }

    /**
     * Set Assigned
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setAssigned(?array $value)
    {
        $this->Assigned = $value;

        return $this;
    }

    /**
     * Get Limit
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * Set Limit
     *
     * @return $this
     */
    public function setLimit(?int $value)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Get Offset
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * Set Offset
     *
     * @return $this
     */
    public function setOffset(?int $value)
    {
        $this->Offset = $value;

        return $this;
    }
}
