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
     * @return int
     */
    public function getParentID()
    {
        return $this->ParentID;
    }

    /**
     * @param int $ParentID
     * @return RubricInfo
     */
    public function setParentID($ParentID)
    {
        $this->ParentID = $ParentID;

        return $this;
    }

    /**
     * @return int
     */
    public function getRubricID()
    {
        return $this->RubricID;
    }

    /**
     * @param int $RubricID
     * @return RubricInfo
     */
    public function setRubricID($RubricID)
    {
        $this->RubricID = $RubricID;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return RubricInfo
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;

        return $this;
    }

    /**
     * @return string
     */
    public function getRubricFullName()
    {
        return $this->RubricFullName;
    }

    /**
     * @param string $RubricFullName
     * @return RubricInfo
     */
    public function setRubricFullName($RubricFullName)
    {
        $this->RubricFullName = $RubricFullName;

        return $this;
    }

    /**
     * @return string
     */
    public function getRubricName()
    {
        return $this->RubricName;
    }

    /**
     * @param string $RubricName
     * @return RubricInfo
     */
    public function setRubricName($RubricName)
    {
        $this->RubricName = $RubricName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckable()
    {
        return $this->Checkable;
    }

    /**
     * @param string $Checkable
     * @return RubricInfo
     */
    public function setCheckable($Checkable)
    {
        $this->Checkable = $Checkable;

        return $this;
    }
}