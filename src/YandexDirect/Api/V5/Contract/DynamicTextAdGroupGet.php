<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdGroupGet
{

    protected $DomainUrl = null;

    protected $DomainUrlProcessingStatus = null;

    /**
     * Creates a new instance of DynamicTextAdGroupGet.
     *
     * @return DynamicTextAdGroupGet
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets DomainUrl.
     *
     * @return string|null
     */
    public function getDomainUrl()
    {
        return $this->DomainUrl;
    }

    /**
     * Sets DomainUrl.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDomainUrl($value = null)
    {
        $this->DomainUrl = $value;

        return $this;
    }

    /**
     * Gets DomainUrlProcessingStatus.
     *
     * @return DomainUrlProcessingStatusEnum|null
     */
    public function getDomainUrlProcessingStatus()
    {
        return $this->DomainUrlProcessingStatus;
    }

    /**
     * Sets DomainUrlProcessingStatus.
     *
     * @param DomainUrlProcessingStatusEnum|null $value
     * @return $this
     */
    public function setDomainUrlProcessingStatus(DomainUrlProcessingStatusEnum $value = null)
    {
        $this->DomainUrlProcessingStatus = $value;

        return $this;
    }


}

