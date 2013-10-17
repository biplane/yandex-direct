<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageAssociation
{
    /**
     * @var int
     */
    protected $AdID;
    /**
     * @var string
     */
    protected $AdImageHash;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $StatusAdImageModerate;
    /**
     * @var RejectReason[]
     */
    protected $ModerateRejectionReasons;

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
     * Gets the AdID.
     *
     * @return int
     */
    public function getAdID()
    {
        return $this->AdID;
    }

    /**
     * Sets the AdID.
     *
     * @param int $AdID
     *
     * @return AdImageAssociation
     */
    public function setAdID($AdID)
    {
        $this->AdID = $AdID;

        return $this;
    }

    /**
     * Gets the AdImageHash.
     *
     * @return string
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets the AdImageHash.
     *
     * @param string $AdImageHash
     *
     * @return AdImageAssociation
     */
    public function setAdImageHash($AdImageHash)
    {
        $this->AdImageHash = $AdImageHash;

        return $this;
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return AdImageAssociation
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return AdImageAssociation
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the StatusAdImageModerate.
     *
     * @return string
     */
    public function getStatusAdImageModerate()
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets the StatusAdImageModerate.
     *
     * @param string $StatusAdImageModerate
     *
     * @return AdImageAssociation
     */
    public function setStatusAdImageModerate($StatusAdImageModerate)
    {
        $this->StatusAdImageModerate = $StatusAdImageModerate;

        return $this;
    }

    /**
     * Gets the ModerateRejectionReasons.
     *
     * @return RejectReason[]
     */
    public function getModerateRejectionReasons()
    {
        return $this->ModerateRejectionReasons;
    }

    /**
     * Sets the ModerateRejectionReasons.
     *
     * @param RejectReason[] $ModerateRejectionReasons
     *
     * @return AdImageAssociation
     */
    public function setModerateRejectionReasons(array $ModerateRejectionReasons)
    {
        $this->ModerateRejectionReasons = $ModerateRejectionReasons;

        return $this;
    }
}