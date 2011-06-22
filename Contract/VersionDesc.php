<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @var date
     */
    protected $BorderDate;

    /**
     * @return int
     */
    public function getVersionNumber()
    {
        return $this->VersionNumber;
    }

    /**
     * @param int $VersionNumber
     * @return VersionDesc
     */
    public function setVersionNumber($VersionNumber)
    {
        $this->VersionNumber = $VersionNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getLinkWSDL()
    {
        return $this->LinkWSDL;
    }

    /**
     * @param string $LinkWSDL
     * @return VersionDesc
     */
    public function setLinkWSDL($LinkWSDL)
    {
        $this->LinkWSDL = $LinkWSDL;

        return $this;
    }

    /**
     * @return date
     */
    public function getBorderDate()
    {
        return $this->BorderDate;
    }

    /**
     * @param date $BorderDate
     * @return VersionDesc
     */
    public function setBorderDate($BorderDate)
    {
        $this->BorderDate = $BorderDate;

        return $this;
    }
}