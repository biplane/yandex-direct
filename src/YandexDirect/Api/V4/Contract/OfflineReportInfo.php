<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class OfflineReportInfo
{

    protected $Type = null;

    protected $Id = null;

    protected $Status = null;

    protected $Url = null;

    /**
     * Creates a new instance of OfflineReportInfo.
     *
     * @return OfflineReportInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string $value
     * @return $this
     */
    public function setType($value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets Url.
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * Sets Url.
     *
     * @param string|null $value
     * @return $this
     */
    public function setUrl($value = null)
    {
        $this->Url = $value;

        return $this;
    }


}

