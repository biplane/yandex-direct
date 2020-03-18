<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UrlFeedBase
{

//    Can be omit.
//    protected $RemoveUtmTags = null;

    /**
     * Creates a new instance of UrlFeedBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RemoveUtmTags.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getRemoveUtmTags()
    {
        return isset($this->RemoveUtmTags) ? $this->RemoveUtmTags : null;
    }

    /**
     * Sets RemoveUtmTags.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setRemoveUtmTags($value = null)
    {
        $this->RemoveUtmTags = $value;

        return $this;
    }


}

