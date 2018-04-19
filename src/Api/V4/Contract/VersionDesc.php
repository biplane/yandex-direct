<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class VersionDesc
{

    protected $VersionNumber = null;

    protected $LinkWSDL = null;

    protected $BorderDate = null;

    /**
     * Creates a new instance of VersionDesc.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets VersionNumber.
     *
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->VersionNumber;
    }

    /**
     * Sets VersionNumber.
     *
     * @param int $value
     * @return $this
     */
    public function setVersionNumber($value)
    {
        $this->VersionNumber = $value;

        return $this;
    }

    /**
     * Gets LinkWSDL.
     *
     * @return string
     */
    public function getLinkWSDL()
    {
        return $this->LinkWSDL;
    }

    /**
     * Sets LinkWSDL.
     *
     * @param string $value
     * @return $this
     */
    public function setLinkWSDL($value)
    {
        $this->LinkWSDL = $value;

        return $this;
    }

    /**
     * Gets BorderDate.
     *
     * @return string|null
     */
    public function getBorderDate()
    {
        return $this->BorderDate;
    }

    /**
     * Sets BorderDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setBorderDate($value = null)
    {
        $this->BorderDate = $value;

        return $this;
    }


}

