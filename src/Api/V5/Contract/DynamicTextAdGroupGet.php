<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextAdGroupGet extends DynamicAdGroupGet
{
//    Can be omitted.
//    protected $DomainUrl;

//    Can be omitted.
//    protected $DomainUrlProcessingStatus;

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
     * Get DomainUrl
     */
    public function getDomainUrl(): ?string
    {
        return $this->DomainUrl ?? null;
    }

    /**
     * Set DomainUrl
     *
     * @return $this
     */
    public function setDomainUrl(?string $value)
    {
        $this->DomainUrl = $value;

        return $this;
    }

    /**
     * Get DomainUrlProcessingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceProcessingStatusEnum
     *
     * @return 'EMPTY_RESULT'|'PROCESSED'|'UNKNOWN'|'UNPROCESSED'|null
     */
    public function getDomainUrlProcessingStatus(): ?string
    {
        return $this->DomainUrlProcessingStatus ?? null;
    }

    /**
     * Set DomainUrlProcessingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SourceProcessingStatusEnum
     *
     * @param 'EMPTY_RESULT'|'PROCESSED'|'UNKNOWN'|'UNPROCESSED'|null $value
     *
     * @return $this
     */
    public function setDomainUrlProcessingStatus(?string $value)
    {
        $this->DomainUrlProcessingStatus = $value;

        return $this;
    }
}
