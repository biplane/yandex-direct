<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageSelectionCriteria
{
    /**
     * @var string[]
     */
    protected $Logins;
    /**
     * @var string[]
     */
    protected $AdImageHashes;
    /**
     * @var int[]
     */
    protected $AdImageUploadTaskIDS;
    /**
     * @var string[]
     */
    protected $Assigned;
    /**
     * @var int
     */
    protected $Limit;
    /**
     * @var int
     */
    protected $Offset;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return AdImageSelectionCriteria
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the AdImageHashes.
     *
     * @return string[]
     */
    public function getAdImageHashes()
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets the AdImageHashes.
     *
     * @param string[] $AdImageHashes
     *
     * @return AdImageSelectionCriteria
     */
    public function setAdImageHashes(array $AdImageHashes)
    {
        $this->AdImageHashes = $AdImageHashes;

        return $this;
    }

    /**
     * Gets the AdImageUploadTaskIDS.
     *
     * @return int[]
     */
    public function getAdImageUploadTaskIDS()
    {
        return $this->AdImageUploadTaskIDS;
    }

    /**
     * Sets the AdImageUploadTaskIDS.
     *
     * @param int[] $AdImageUploadTaskIDS
     *
     * @return AdImageSelectionCriteria
     */
    public function setAdImageUploadTaskIDS(array $AdImageUploadTaskIDS)
    {
        $this->AdImageUploadTaskIDS = $AdImageUploadTaskIDS;

        return $this;
    }

    /**
     * Gets the Assigned.
     *
     * @return string[]
     */
    public function getAssigned()
    {
        return $this->Assigned;
    }

    /**
     * Sets the Assigned.
     *
     * @param string[] $Assigned
     *
     * @return AdImageSelectionCriteria
     */
    public function setAssigned(array $Assigned)
    {
        $this->Assigned = $Assigned;

        return $this;
    }

    /**
     * Gets the Limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets the Limit.
     *
     * @param int $Limit
     *
     * @return AdImageSelectionCriteria
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * Gets the Offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets the Offset.
     *
     * @param int $Offset
     *
     * @return AdImageSelectionCriteria
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }
}