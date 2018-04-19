<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdGroup
{

    protected $DomainUrl = null;

    /**
     * Creates a new instance of DynamicTextAdGroup.
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
     * @return string
     */
    public function getDomainUrl()
    {
        return $this->DomainUrl;
    }

    /**
     * Sets DomainUrl.
     *
     * @param string $value
     * @return $this
     */
    public function setDomainUrl($value)
    {
        $this->DomainUrl = $value;

        return $this;
    }


}

