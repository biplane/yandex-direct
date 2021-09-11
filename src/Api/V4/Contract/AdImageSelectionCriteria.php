<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageSelectionCriteria
{
    protected $Logins = null;

    protected $AdImageHashes = null;

    protected $AdImageUploadTaskIDS = null;

    protected $Assigned = null;

    protected $Limit = null;

    protected $Offset = null;

    /**
     * Creates a new instance of AdImageSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
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
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets AdImageHashes.
     *
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
     * Gets AdImageUploadTaskIDS.
     *
     * @return int[]|null
     */
    public function getAdImageUploadTaskIDS(): ?array
    {
        return $this->AdImageUploadTaskIDS;
    }

    /**
     * Sets AdImageUploadTaskIDS.
     *
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
     * Gets Assigned.
     *
     * @return string[]|null
     */
    public function getAssigned(): ?array
    {
        return $this->Assigned;
    }

    /**
     * Sets Assigned.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAssigned(?array $value = null)
    {
        $this->Assigned = $value;

        return $this;
    }

    /**
     * Gets Limit.
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }
}
