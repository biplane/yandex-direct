<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RubricInfo
{
    /**
     * @var int
     */
    protected $ParentID;
    /**
     * @var int
     */
    protected $RubricID;
    /**
     * @var string
     */
    protected $Url;
    /**
     * @var string
     */
    protected $RubricFullName;
    /**
     * @var string
     */
    protected $RubricName;
    /**
     * @var string
     */
    protected $Checkable;

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
     * Gets the ParentID.
     *
     * @return int
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * Sets the ParentID.
     *
     * @param int $ParentID
     *
     * @return RubricInfo
     */
    public function setParentID($ParentID)
    {
        $this->ParentID = $ParentID;

        return $this;
    }

    /**
     * Gets the RubricID.
     *
     * @return int
     */
    public function getRubricID()
    {
        return $this->RubricID;
    }

    /**
     * Sets the RubricID.
     *
     * @param int $RubricID
     *
     * @return RubricInfo
     */
    public function setRubricID($RubricID)
    {
        $this->RubricID = $RubricID;

        return $this;
    }

    /**
     * Gets the Url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * Sets the Url.
     *
     * @param string $Url
     *
     * @return RubricInfo
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;

        return $this;
    }

    /**
     * Gets the RubricFullName.
     *
     * @return string
     */
    public function getRubricFullName()
    {
        return $this->RubricFullName;
    }

    /**
     * Sets the RubricFullName.
     *
     * @param string $RubricFullName
     *
     * @return RubricInfo
     */
    public function setRubricFullName($RubricFullName)
    {
        $this->RubricFullName = $RubricFullName;

        return $this;
    }

    /**
     * Gets the RubricName.
     *
     * @return string
     */
    public function getRubricName()
    {
        return $this->RubricName;
    }

    /**
     * Sets the RubricName.
     *
     * @param string $RubricName
     *
     * @return RubricInfo
     */
    public function setRubricName($RubricName)
    {
        $this->RubricName = $RubricName;

        return $this;
    }

    /**
     * Gets the Checkable.
     *
     * @return string
     */
    public function getCheckable()
    {
        return $this->Checkable;
    }

    /**
     * Sets the Checkable.
     *
     * @param string $Checkable
     *
     * @return RubricInfo
     */
    public function setCheckable($Checkable)
    {
        $this->Checkable = $Checkable;

        return $this;
    }
}