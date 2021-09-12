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

//    Can be omitted.
//    protected $Data = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): string
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(string $value)
    {
        $this->Id = $value;

        return $this;
    }

    public function getSubmittedAt(): string
    {
        return $this->SubmittedAt;
    }

    /**
     * @return $this
     */
    public function setSubmittedAt(string $value)
    {
        $this->SubmittedAt = $value;

        return $this;
    }

    public function getTurboPageId(): int
    {
        return $this->TurboPageId;
    }

    /**
     * @return $this
     */
    public function setTurboPageId(int $value)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    public function getTurboPageName(): string
    {
        return $this->TurboPageName;
    }

    /**
     * @return $this
     */
    public function setTurboPageName(string $value)
    {
        $this->TurboPageName = $value;

        return $this;
    }

    /**
     * @return LeadDataItem[]|null
     */
    public function getData(): ?array
    {
        return $this->Data ?? null;
    }

    /**
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
