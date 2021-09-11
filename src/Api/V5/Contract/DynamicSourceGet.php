<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicSourceGet
{
//    Can be omit.
//    protected $Source = null;

//    Can be omit.
//    protected $FeedId = null;

//    Can be omit.
//    protected $SourceType = null;

//    Can be omit.
//    protected $SourceProcessingStatus = null;

    /**
     * Creates a new instance of DynamicSourceGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Source.
     */
    public function getSource(): ?string
    {
        return $this->Source ?? null;
    }

    /**
     * Sets Source.
     *
     * @return $this
     */
    public function setSource(?string $value = null)
    {
        $this->Source = $value;

        return $this;
    }

    /**
     * Gets FeedId.
     */
    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * Sets FeedId.
     *
     * @return $this
     */
    public function setFeedId(?int $value = null)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Gets SourceType.
     *
     * @see SourceTypeGetEnum
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType ?? null;
    }

    /**
     * Sets SourceType.
     *
     * @see SourceTypeGetEnum
     *
     * @return $this
     */
    public function setSourceType(?string $value = null)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Gets SourceProcessingStatus.
     *
     * @see SourceProcessingStatusEnum
     */
    public function getSourceProcessingStatus(): ?string
    {
        return $this->SourceProcessingStatus ?? null;
    }

    /**
     * Sets SourceProcessingStatus.
     *
     * @see SourceProcessingStatusEnum
     *
     * @return $this
     */
    public function setSourceProcessingStatus(?string $value = null)
    {
        $this->SourceProcessingStatus = $value;

        return $this;
    }
}
