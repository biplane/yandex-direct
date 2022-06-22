<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicSourceGet extends DynamicAdGroupGet
{
//    Can be omitted.
//    protected $Source = null;

//    Can be omitted.
//    protected $FeedId = null;

//    Can be omitted.
//    protected $SourceType = null;

//    Can be omitted.
//    protected $SourceProcessingStatus = null;

    public function getSource(): ?string
    {
        return $this->Source ?? null;
    }

    /**
     * @return $this
     */
    public function setSource(?string $value = null)
    {
        $this->Source = $value;

        return $this;
    }

    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * @return $this
     */
    public function setFeedId(?int $value = null)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * @see SourceTypeGetEnum
     */
    public function getSourceType(): ?string
    {
        return $this->SourceType ?? null;
    }

    /**
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
     * @see SourceProcessingStatusEnum
     */
    public function getSourceProcessingStatus(): ?string
    {
        return $this->SourceProcessingStatus ?? null;
    }

    /**
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
