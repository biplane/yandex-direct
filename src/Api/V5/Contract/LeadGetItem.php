<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class LeadGetItem
{
    protected $Id = null;

    protected $SubmittedAt = null;

    protected $TurboPageId = null;

    protected $TurboPageName = null;

//    Can be omit.
//    protected $Data = null;

    /**
     * Creates a new instance of LeadGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): string
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(string $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets SubmittedAt.
     */
    public function getSubmittedAt(): string
    {
        return $this->SubmittedAt;
    }

    /**
     * Sets SubmittedAt.
     *
     * @return $this
     */
    public function setSubmittedAt(string $value)
    {
        $this->SubmittedAt = $value;

        return $this;
    }

    /**
     * Gets TurboPageId.
     */
    public function getTurboPageId(): int
    {
        return $this->TurboPageId;
    }

    /**
     * Sets TurboPageId.
     *
     * @return $this
     */
    public function setTurboPageId(int $value)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    /**
     * Gets TurboPageName.
     */
    public function getTurboPageName(): string
    {
        return $this->TurboPageName;
    }

    /**
     * Sets TurboPageName.
     *
     * @return $this
     */
    public function setTurboPageName(string $value)
    {
        $this->TurboPageName = $value;

        return $this;
    }

    /**
     * Gets Data.
     *
     * @return LeadDataItem[]|null
     */
    public function getData(): ?array
    {
        return $this->Data ?? null;
    }

    /**
     * Sets Data.
     *
     * @param LeadDataItem[]|null $value
     *
     * @return $this
     */
    public function setData(?array $value = null)
    {
        $this->Data = $value;

        return $this;
    }
}
