<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class LeadGetItem
{

    protected $Id = null;

    protected $SubmittedAt = null;

    protected $TurboPageId = null;

    protected $TurboPageName = null;

//    Can be omit.
//    protected $Data = null;

    /**
     * Creates a new instance of LeadGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param string $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets SubmittedAt.
     *
     * @return string
     */
    public function getSubmittedAt()
    {
        return $this->SubmittedAt;
    }

    /**
     * Sets SubmittedAt.
     *
     * @param string $value
     * @return $this
     */
    public function setSubmittedAt($value)
    {
        $this->SubmittedAt = $value;

        return $this;
    }

    /**
     * Gets TurboPageId.
     *
     * @return int
     */
    public function getTurboPageId()
    {
        return $this->TurboPageId;
    }

    /**
     * Sets TurboPageId.
     *
     * @param int $value
     * @return $this
     */
    public function setTurboPageId($value)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    /**
     * Gets TurboPageName.
     *
     * @return string
     */
    public function getTurboPageName()
    {
        return $this->TurboPageName;
    }

    /**
     * Sets TurboPageName.
     *
     * @param string $value
     * @return $this
     */
    public function setTurboPageName($value)
    {
        $this->TurboPageName = $value;

        return $this;
    }

    /**
     * Gets Data.
     *
     * @return LeadDataItem[]|null
     */
    public function getData()
    {
        return isset($this->Data) ? $this->Data : null;
    }

    /**
     * Sets Data.
     *
     * @param LeadDataItem[]|null $value
     * @return $this
     */
    public function setData(array $value = null)
    {
        $this->Data = $value;

        return $this;
    }


}

