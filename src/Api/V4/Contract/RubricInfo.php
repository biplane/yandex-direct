<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RubricInfo
{
    /** @var int */
    protected $ParentID;

    /** @var int */
    protected $RubricID;

    /** @var string */
    protected $Url;

    /** @var string */
    protected $RubricFullName;

    /** @var string */
    protected $RubricName;

    /** @var string */
    protected $Checkable;

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
     * Get ParentID
     */
    public function getParentID(): int
    {
        return $this->ParentID;
    }

    /**
     * Set ParentID
     *
     * @return $this
     */
    public function setParentID(int $value)
    {
        $this->ParentID = $value;

        return $this;
    }

    /**
     * Get RubricID
     */
    public function getRubricID(): int
    {
        return $this->RubricID;
    }

    /**
     * Set RubricID
     *
     * @return $this
     */
    public function setRubricID(int $value)
    {
        $this->RubricID = $value;

        return $this;
    }

    /**
     * Get Url
     */
    public function getUrl(): string
    {
        return $this->Url;
    }

    /**
     * Set Url
     *
     * @return $this
     */
    public function setUrl(string $value)
    {
        $this->Url = $value;

        return $this;
    }

    /**
     * Get RubricFullName
     */
    public function getRubricFullName(): string
    {
        return $this->RubricFullName;
    }

    /**
     * Set RubricFullName
     *
     * @return $this
     */
    public function setRubricFullName(string $value)
    {
        $this->RubricFullName = $value;

        return $this;
    }

    /**
     * Get RubricName
     */
    public function getRubricName(): string
    {
        return $this->RubricName;
    }

    /**
     * Set RubricName
     *
     * @return $this
     */
    public function setRubricName(string $value)
    {
        $this->RubricName = $value;

        return $this;
    }

    /**
     * Get Checkable
     */
    public function getCheckable(): string
    {
        return $this->Checkable;
    }

    /**
     * Set Checkable
     *
     * @return $this
     */
    public function setCheckable(string $value)
    {
        $this->Checkable = $value;

        return $this;
    }
}
