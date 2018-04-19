<?php

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
        return isset($this->DomainUrl) ? $this->DomainUrl : null;
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
        return isset($this->DomainUrlProcessingStatus) ? $this->DomainUrlProcessingStatus : null;
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

