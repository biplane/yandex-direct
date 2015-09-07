<?php

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
     *
     * @return AdImageSelectionCriteria
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param array|null $value
     * @return $this
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes()
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param array|null $value
     * @return $this
     */
    public function setAdImageHashes(array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Gets AdImageUploadTaskIDS.
     *
     * @return int[]|null
     */
    public function getAdImageUploadTaskIDS()
    {
        return $this->AdImageUploadTaskIDS;
    }

    /**
     * Sets AdImageUploadTaskIDS.
     *
     * @param array|null $value
     * @return $this
     */
    public function setAdImageUploadTaskIDS(array $value = null)
    {
        $this->AdImageUploadTaskIDS = $value;

        return $this;
    }

    /**
     * Gets Assigned.
     *
     * @return string[]|null
     */
    public function getAssigned()
    {
        return $this->Assigned;
    }

    /**
     * Sets Assigned.
     *
     * @param array|null $value
     * @return $this
     */
    public function setAssigned(array $value = null)
    {
        $this->Assigned = $value;

        return $this;
    }

    /**
     * Gets Limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setLimit($value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOffset($value = null)
    {
        $this->Offset = $value;

        return $this;
    }


}

