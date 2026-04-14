<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class LeadGetItem
{
    /** @var string */
    protected $Id;

    /** @var string */
    protected $SubmittedAt;

    /** @var int */
    protected $TurboPageId;

    /** @var string */
    protected $TurboPageName;

//    Can be omitted.
//    protected $Data;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): string
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(string $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get SubmittedAt
     */
    public function getSubmittedAt(): string
    {
        return $this->SubmittedAt;
    }

    /**
     * Set SubmittedAt
     *
     * @return $this
     */
    public function setSubmittedAt(string $value)
    {
        $this->SubmittedAt = $value;

        return $this;
    }

    /**
     * Get TurboPageId
     */
    public function getTurboPageId(): int
    {
        return $this->TurboPageId;
    }

    /**
     * Set TurboPageId
     *
     * @return $this
     */
    public function setTurboPageId(int $value)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    /**
     * Get TurboPageName
     */
    public function getTurboPageName(): string
    {
        return $this->TurboPageName;
    }

    /**
     * Set TurboPageName
     *
     * @return $this
     */
    public function setTurboPageName(string $value)
    {
        $this->TurboPageName = $value;

        return $this;
    }

    /**
     * Get Data
     *
     * @return list<LeadDataItem>
     */
    public function getData(): array
    {
        return $this->Data ?? [];
    }

    /**
     * Set Data
     *
     * @param list<LeadDataItem> $value
     *
     * @return $this
     */
    public function setData(array $value)
    {
        $this->Data = $value;

        return $this;
    }
}
