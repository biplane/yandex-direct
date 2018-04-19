<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageAssociation
{

    protected $AdID = null;

    protected $AdImageHash = null;

    protected $Login = null;

    protected $CampaignID = null;

    protected $StatusAdImageModerate = null;

    protected $ModerateRejectionReasons = null;

    /**
     * Creates a new instance of AdImageAssociation.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdID.
     *
     * @return int
     */
    public function getAdID()
    {
        return $this->AdID;
    }

    /**
     * Sets AdID.
     *
     * @param int $value
     * @return $this
     */
    public function setAdID($value)
    {
        $this->AdID = $value;

        return $this;
    }

    /**
     * Gets AdImageHash.
     *
     * @return string|null
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAdImageHash($value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return $this
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets CampaignID.
     *
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets StatusAdImageModerate.
     *
     * @return string|null
     */
    public function getStatusAdImageModerate()
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets StatusAdImageModerate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatusAdImageModerate($value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * Gets ModerateRejectionReasons.
     *
     * @return RejectReason[]|null
     */
    public function getModerateRejectionReasons()
    {
        return $this->ModerateRejectionReasons;
    }

    /**
     * Sets ModerateRejectionReasons.
     *
     * @param RejectReason[]|null $value
     * @return $this
     */
    public function setModerateRejectionReasons(array $value = null)
    {
        $this->ModerateRejectionReasons = $value;

        return $this;
    }


}

