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
     * Creates a new instance of RubricInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ParentID.
     */
    public function getParentID(): int
    {
        return $this->ParentID;
    }

    /**
     * Sets ParentID.
     *
     * @return $this
     */
    public function setParentID(int $value)
    {
        $this->ParentID = $value;

        return $this;
    }

    /**
     * Gets RubricID.
     */
    public function getRubricID(): int
    {
        return $this->RubricID;
    }

    /**
     * Sets RubricID.
     *
     * @return $this
     */
    public function setRubricID(int $value)
    {
        $this->RubricID = $value;

        return $this;
    }

    /**
     * Gets Url.
     */
    public function getUrl(): string
    {
        return $this->Url;
    }

    /**
     * Sets Url.
     *
     * @return $this
     */
    public function setUrl(string $value)
    {
        $this->Url = $value;

        return $this;
    }

    /**
     * Gets RubricFullName.
     */
    public function getRubricFullName(): string
    {
        return $this->RubricFullName;
    }

    /**
     * Sets RubricFullName.
     *
     * @return $this
     */
    public function setRubricFullName(string $value)
    {
        $this->RubricFullName = $value;

        return $this;
    }

    /**
     * Gets RubricName.
     */
    public function getRubricName(): string
    {
        return $this->RubricName;
    }

    /**
     * Sets RubricName.
     *
     * @return $this
     */
    public function setRubricName(string $value)
    {
        $this->RubricName = $value;

        return $this;
    }

    /**
     * Gets Checkable.
     */
    public function getCheckable(): string
    {
        return $this->Checkable;
    }

    /**
     * Sets Checkable.
     *
     * @return $this
     */
    public function setCheckable(string $value)
    {
        $this->Checkable = $value;

        return $this;
    }
}
