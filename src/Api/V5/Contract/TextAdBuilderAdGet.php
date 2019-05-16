<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdBuilderAdGet extends AdBuilderAdGetBase
{

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $TurboPageId = null;

//    Can be omit.
//    protected $TurboPageModeration = null;

    /**
     * Creates a new instance of TextAdBuilderAdGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return isset($this->Href) ? $this->Href : null;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return $this
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets TurboPageId.
     *
     * @return int|null
     */
    public function getTurboPageId()
    {
        return isset($this->TurboPageId) ? $this->TurboPageId : null;
    }

    /**
     * Sets TurboPageId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setTurboPageId($value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    /**
     * Gets TurboPageModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getTurboPageModeration()
    {
        return isset($this->TurboPageModeration) ? $this->TurboPageModeration : null;
    }

    /**
     * Sets TurboPageModeration.
     *
     * @param ExtensionModeration|null $value
     * @return $this
     */
    public function setTurboPageModeration(ExtensionModeration $value = null)
    {
        $this->TurboPageModeration = $value;

        return $this;
    }


}

