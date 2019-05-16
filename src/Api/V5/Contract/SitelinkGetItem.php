<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SitelinkGetItem
{

//    Can be omit.
//    protected $Title = null;

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $Description = null;

//    Can be omit.
//    protected $TurboPageId = null;

    /**
     * Creates a new instance of SitelinkGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }

    /**
     * Sets Title.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTitle($value = null)
    {
        $this->Title = $value;

        return $this;
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
     * Gets Description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }

    /**
     * Sets Description.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDescription($value = null)
    {
        $this->Description = $value;

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


}

