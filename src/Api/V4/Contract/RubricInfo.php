<?php

declare(strict_types=1);

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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getParentID(): int
    {
        return $this->ParentID;
    }

    /**
     * @return $this
     */
    public function setParentID(int $value)
    {
        $this->ParentID = $value;

        return $this;
    }

    public function getRubricID(): int
    {
        return $this->RubricID;
    }

    /**
     * @return $this
     */
    public function setRubricID(int $value)
    {
        $this->RubricID = $value;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->Url;
    }

    /**
     * @return $this
     */
    public function setUrl(string $value)
    {
        $this->Url = $value;

        return $this;
    }

    public function getRubricFullName(): string
    {
        return $this->RubricFullName;
    }

    /**
     * @return $this
     */
    public function setRubricFullName(string $value)
    {
        $this->RubricFullName = $value;

        return $this;
    }

    public function getRubricName(): string
    {
        return $this->RubricName;
    }

    /**
     * @return $this
     */
    public function setRubricName(string $value)
    {
        $this->RubricName = $value;

        return $this;
    }

    public function getCheckable(): string
    {
        return $this->Checkable;
    }

    /**
     * @return $this
     */
    public function setCheckable(string $value)
    {
        $this->Checkable = $value;

        return $this;
    }
}
