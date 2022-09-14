<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextAdGroupGet extends DynamicAdGroupGet
{
//    Can be omitted.
//    protected $DomainUrl = null;

//    Can be omitted.
//    protected $DomainUrlProcessingStatus = null;

    public function getDomainUrl(): ?string
    {
        return $this->DomainUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setDomainUrl(?string $value = null)
    {
        $this->DomainUrl = $value;

        return $this;
    }

    /**
     * @see SourceProcessingStatusEnum
     */
    public function getDomainUrlProcessingStatus(): ?string
    {
        return $this->DomainUrlProcessingStatus ?? null;
    }

    /**
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
