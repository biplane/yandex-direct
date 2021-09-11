<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdGroupGet
{
//    Can be omit.
//    protected $DomainUrl = null;

//    Can be omit.
//    protected $DomainUrlProcessingStatus = null;

    /**
     * Creates a new instance of DynamicTextAdGroupGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets DomainUrl.
     */
    public function getDomainUrl(): ?string
    {
        return $this->DomainUrl ?? null;
    }

    /**
     * Sets DomainUrl.
     *
     * @return $this
     */
    public function setDomainUrl(?string $value = null)
    {
        $this->DomainUrl = $value;

        return $this;
    }

    /**
     * Gets DomainUrlProcessingStatus.
     *
     * @see SourceProcessingStatusEnum
     */
    public function getDomainUrlProcessingStatus(): ?string
    {
        return $this->DomainUrlProcessingStatus ?? null;
    }

    /**
     * Sets DomainUrlProcessingStatus.
     *
     * @see SourceProcessingStatusEnum
     *
     * @return $this
     */
    public function setDomainUrlProcessingStatus(?string $value = null)
    {
        $this->DomainUrlProcessingStatus = $value;

        return $this;
    }
}
