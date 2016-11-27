<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RubricInfo
{

    protected $ParentID = null;

    protected $RubricID = null;

    protected $Url = null;

    protected $RubricFullName = null;

    protected $RubricName = null;

    protected $Checkable = null;

    /**
     * Creates a new instance of RubricInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ParentID.
     *
     * @return int
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * Sets ParentID.
     *
     * @param int $value
     * @return self
     */
    public function setParentID($value)
    {
        $this->ParentID = $value;

        return $this;
    }

    /**
     * Gets RubricID.
     *
     * @return int
     */
    public function getRubricID()
    {
        return $this->RubricID;
    }

    /**
     * Sets RubricID.
     *
     * @param int $value
     * @return self
     */
    public function setRubricID($value)
    {
        $this->RubricID = $value;

        return $this;
    }

    /**
     * Gets Url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * Sets Url.
     *
     * @param string $value
     * @return self
     */
    public function setUrl($value)
    {
        $this->Url = $value;

        return $this;
    }

    /**
     * Gets RubricFullName.
     *
     * @return string
     */
    public function getRubricFullName()
    {
        return $this->RubricFullName;
    }

    /**
     * Sets RubricFullName.
     *
     * @param string $value
     * @return self
     */
    public function setRubricFullName($value)
    {
        $this->RubricFullName = $value;

        return $this;
    }

    /**
     * Gets RubricName.
     *
     * @return string
     */
    public function getRubricName()
    {
        return $this->RubricName;
    }

    /**
     * Sets RubricName.
     *
     * @param string $value
     * @return self
     */
    public function setRubricName($value)
    {
        $this->RubricName = $value;

        return $this;
    }

    /**
     * Gets Checkable.
     *
     * @return string
     */
    public function getCheckable()
    {
        return $this->Checkable;
    }

    /**
     * Sets Checkable.
     *
     * @param string $value
     * @return self
     */
    public function setCheckable($value)
    {
        $this->Checkable = $value;

        return $this;
    }


}

