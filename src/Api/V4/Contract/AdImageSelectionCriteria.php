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
    protected $Logins = null;

    protected $AdImageHashes = null;

    protected $AdImageUploadTaskIDS = null;

    protected $Assigned = null;

    protected $Limit = null;

    protected $Offset = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAdImageHashes(?array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdImageUploadTaskIDS(): ?array
    {
        return $this->AdImageUploadTaskIDS;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdImageUploadTaskIDS(?array $value = null)
    {
        $this->AdImageUploadTaskIDS = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAssigned(): ?array
    {
        return $this->Assigned;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAssigned(?array $value = null)
    {
        $this->Assigned = $value;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }
}
