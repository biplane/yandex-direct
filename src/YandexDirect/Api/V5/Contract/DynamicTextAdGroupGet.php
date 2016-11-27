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
     * @return self
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
     * @return self
     */
    public function setDomainUrl($value = null)
    {
        $this->DomainUrl = $value;

        return $this;
    }

    /**
     * Gets DomainUrlProcessingStatus.
     *
     * @return string|null
     * @see SourceProcessingStatusEnum
     */
    public function getDomainUrlProcessingStatus()
    {
        return $this->DomainUrlProcessingStatus;
    }

    /**
     * Sets DomainUrlProcessingStatus.
     *
     * @param string|null $value
     * @return self
     * @see SourceProcessingStatusEnum
     */
    public function setDomainUrlProcessingStatus($value = null)
    {
        $this->DomainUrlProcessingStatus = $value;

        return $this;
    }


}

