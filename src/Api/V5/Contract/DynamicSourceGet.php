<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicSourceGet extends DynamicAdGroupGet
{
//    Can be omitted.
//    protected $Source;

//    Can be omitted.
//    protected $FeedId;

//    Can be omitted.
//    protected $SourceType;

//    Can be omitted.
//    protected $SourceProcessingStatus;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Source
     */
    public function getSource(): ?string
    {
        return $this->Source ?? null;
    }

    /**
     * Set Source
     *
     * @return $this
     */
    public function setSource(?string $value)
    {
        $this->Source = $value;

        return $this;
    }

    /**
     * Get FeedId
     */
    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * Set FeedId
     *
     * @return $this
     */
    public function setFeedId(?int $value)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Get SourceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceTypeGetEnum
     *
     * @return 'RETAIL_FEED'|'UNKNOWN'|null
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType ?? null;
    }

    /**
     * Set SourceType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceTypeGetEnum
     *
     * @param 'RETAIL_FEED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setSourceType(?string $value)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Get SourceProcessingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceProcessingStatusEnum
     *
     * @return 'EMPTY_RESULT'|'PROCESSED'|'UNKNOWN'|'UNPROCESSED'|null
     */
    public function getSourceProcessingStatus(): ?string
    {
        return $this->SourceProcessingStatus ?? null;
    }

    /**
     * Set SourceProcessingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceProcessingStatusEnum
     *
     * @param 'EMPTY_RESULT'|'PROCESSED'|'UNKNOWN'|'UNPROCESSED'|null $value
     *
     * @return $this
     */
    public function setSourceProcessingStatus(?string $value)
    {
        $this->SourceProcessingStatus = $value;

        return $this;
    }
}
