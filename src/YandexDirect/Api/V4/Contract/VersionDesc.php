<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class VersionDesc
{
    /**
     * @var int
     */
    protected $VersionNumber;
    /**
     * @var string
     */
    protected $LinkWSDL;
    /**
     * @var string
     */
    protected $BorderDate;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the VersionNumber.
     *
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->VersionNumber;
    }

    /**
     * Sets the VersionNumber.
     *
     * @param int $VersionNumber
     *
     * @return VersionDesc
     */
    public function setVersionNumber($VersionNumber)
    {
        $this->VersionNumber = $VersionNumber;

        return $this;
    }

    /**
     * Gets the LinkWSDL.
     *
     * @return string
     */
    public function getLinkWSDL()
    {
        return $this->LinkWSDL;
    }

    /**
     * Sets the LinkWSDL.
     *
     * @param string $LinkWSDL
     *
     * @return VersionDesc
     */
    public function setLinkWSDL($LinkWSDL)
    {
        $this->LinkWSDL = $LinkWSDL;

        return $this;
    }

    /**
     * Gets the BorderDate.
     *
     * @return string
     */
    public function getBorderDate()
    {
        return $this->BorderDate;
    }

    /**
     * Sets the BorderDate.
     *
     * @param string $BorderDate
     *
     * @return VersionDesc
     */
    public function setBorderDate($BorderDate)
    {
        $this->BorderDate = $BorderDate;

        return $this;
    }
}