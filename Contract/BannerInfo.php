<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class BannerInfo
{
    /**
     * @var int
     */
    protected $BannerID;
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $Title;
    /**
     * @var string
     */
    protected $Text;
    /**
     * @var string
     */
    protected $Href;
    /**
     * @var string
     */
    protected $Domain;
    /**
     * @var string
     */
    protected $Geo;
    /**
     * @var ContactInfo
     */
    protected $ContactInfo;
    /**
     * @var BannerPhraseInfo[]
     */
    protected $Phrases;
    /**
     * @var string
     */
    protected $StatusActivating;
    /**
     * @var string
     */
    protected $StatusArchive;
    /**
     * @var string
     */
    protected $StatusBannerModerate;
    /**
     * @var string
     */
    protected $StatusPhrasesModerate;
    /**
     * @var string
     */
    protected $StatusPhoneModerate;
    /**
     * @var string
     */
    protected $StatusShow;
    /**
     * @var string
     */
    protected $IsActive;
    /**
     * @var string
     */
    protected $StatusSitelinksModerate;
    /**
     * @var Sitelink[]
     */
    protected $Sitelinks;
    /**
     * @var string[]
     */
    protected $AdWarnings;
    /**
     * @var string
     */
    protected $FixedOnModeration;
    /**
     * @var RejectReason[]
     */
    protected $ModerateRejectionReasons;
    /**
     * @var string[]
     */
    protected $MinusKeywords;
    /**
     * @var string
     */
    protected $AutoMinusWords;
    /**
     * @var string
     */
    protected $AgeLabel;

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
     * Gets the BannerID.
     *
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets the BannerID.
     *
     * @param int $BannerID
     *
     * @return BannerInfo
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

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
     * @return BannerInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the Title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets the Title.
     *
     * @param string $Title
     *
     * @return BannerInfo
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * Gets the Text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Sets the Text.
     *
     * @param string $Text
     *
     * @return BannerInfo
     */
    public function setText($Text)
    {
        $this->Text = $Text;

        return $this;
    }

    /**
     * Gets the Href.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * Sets the Href.
     *
     * @param string $Href
     *
     * @return BannerInfo
     */
    public function setHref($Href)
    {
        $this->Href = $Href;

        return $this;
    }

    /**
     * Gets the Domain.
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * Sets the Domain.
     *
     * @param string $Domain
     *
     * @return BannerInfo
     */
    public function setDomain($Domain)
    {
        $this->Domain = $Domain;

        return $this;
    }

    /**
     * Gets the Geo.
     *
     * @return string
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * Sets the Geo.
     *
     * @param string $Geo
     *
     * @return BannerInfo
     */
    public function setGeo($Geo)
    {
        $this->Geo = $Geo;

        return $this;
    }

    /**
     * Gets the ContactInfo.
     *
     * @return ContactInfo
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }

    /**
     * Sets the ContactInfo.
     *
     * @param ContactInfo $ContactInfo
     *
     * @return BannerInfo
     */
    public function setContactInfo(ContactInfo $ContactInfo)
    {
        $this->ContactInfo = $ContactInfo;

        return $this;
    }

    /**
     * Gets the Phrases.
     *
     * @return BannerPhraseInfo[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * Sets the Phrases.
     *
     * @param BannerPhraseInfo[] $Phrases
     *
     * @return BannerInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

        return $this;
    }

    /**
     * Gets the StatusActivating.
     *
     * @return string
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * Sets the StatusActivating.
     *
     * @param string $StatusActivating
     *
     * @return BannerInfo
     */
    public function setStatusActivating($StatusActivating)
    {
        $this->StatusActivating = $StatusActivating;

        return $this;
    }

    /**
     * Gets the StatusArchive.
     *
     * @return string
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * Sets the StatusArchive.
     *
     * @param string $StatusArchive
     *
     * @return BannerInfo
     */
    public function setStatusArchive($StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

        return $this;
    }

    /**
     * Gets the StatusBannerModerate.
     *
     * @return string
     */
    public function getStatusBannerModerate()
    {
        return $this->StatusBannerModerate;
    }

    /**
     * Sets the StatusBannerModerate.
     *
     * @param string $StatusBannerModerate
     *
     * @return BannerInfo
     */
    public function setStatusBannerModerate($StatusBannerModerate)
    {
        $this->StatusBannerModerate = $StatusBannerModerate;

        return $this;
    }

    /**
     * Gets the StatusPhrasesModerate.
     *
     * @return string
     */
    public function getStatusPhrasesModerate()
    {
        return $this->StatusPhrasesModerate;
    }

    /**
     * Sets the StatusPhrasesModerate.
     *
     * @param string $StatusPhrasesModerate
     *
     * @return BannerInfo
     */
    public function setStatusPhrasesModerate($StatusPhrasesModerate)
    {
        $this->StatusPhrasesModerate = $StatusPhrasesModerate;

        return $this;
    }

    /**
     * Gets the StatusPhoneModerate.
     *
     * @return string
     */
    public function getStatusPhoneModerate()
    {
        return $this->StatusPhoneModerate;
    }

    /**
     * Sets the StatusPhoneModerate.
     *
     * @param string $StatusPhoneModerate
     *
     * @return BannerInfo
     */
    public function setStatusPhoneModerate($StatusPhoneModerate)
    {
        $this->StatusPhoneModerate = $StatusPhoneModerate;

        return $this;
    }

    /**
     * Gets the StatusShow.
     *
     * @return string
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * Sets the StatusShow.
     *
     * @param string $StatusShow
     *
     * @return BannerInfo
     */
    public function setStatusShow($StatusShow)
    {
        $this->StatusShow = $StatusShow;

        return $this;
    }

    /**
     * Gets the IsActive.
     *
     * @return string
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets the IsActive.
     *
     * @param string $IsActive
     *
     * @return BannerInfo
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    /**
     * Gets the StatusSitelinksModerate.
     *
     * @return string
     */
    public function getStatusSitelinksModerate()
    {
        return $this->StatusSitelinksModerate;
    }

    /**
     * Sets the StatusSitelinksModerate.
     *
     * @param string $StatusSitelinksModerate
     *
     * @return BannerInfo
     */
    public function setStatusSitelinksModerate($StatusSitelinksModerate)
    {
        $this->StatusSitelinksModerate = $StatusSitelinksModerate;

        return $this;
    }

    /**
     * Gets the Sitelinks.
     *
     * @return Sitelink[]
     */
    public function getSitelinks()
    {
        return $this->Sitelinks;
    }

    /**
     * Sets the Sitelinks.
     *
     * @param Sitelink[] $Sitelinks
     *
     * @return BannerInfo
     */
    public function setSitelinks(array $Sitelinks)
    {
        $this->Sitelinks = $Sitelinks;

        return $this;
    }

    /**
     * Gets the AdWarnings.
     *
     * @return string[]
     */
    public function getAdWarnings()
    {
        return $this->AdWarnings;
    }

    /**
     * Sets the AdWarnings.
     *
     * @param string[] $AdWarnings
     *
     * @return BannerInfo
     */
    public function setAdWarnings(array $AdWarnings)
    {
        $this->AdWarnings = $AdWarnings;

        return $this;
    }

    /**
     * Gets the FixedOnModeration.
     *
     * @return string
     */
    public function getFixedOnModeration()
    {
        return $this->FixedOnModeration;
    }

    /**
     * Sets the FixedOnModeration.
     *
     * @param string $FixedOnModeration
     *
     * @return BannerInfo
     */
    public function setFixedOnModeration($FixedOnModeration)
    {
        $this->FixedOnModeration = $FixedOnModeration;

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
     * @return BannerInfo
     */
    public function setModerateRejectionReasons(array $ModerateRejectionReasons)
    {
        $this->ModerateRejectionReasons = $ModerateRejectionReasons;

        return $this;
    }

    /**
     * Gets the MinusKeywords.
     *
     * @return string[]
     */
    public function getMinusKeywords()
    {
        return $this->MinusKeywords;
    }

    /**
     * Sets the MinusKeywords.
     *
     * @param string[] $MinusKeywords
     *
     * @return BannerInfo
     */
    public function setMinusKeywords(array $MinusKeywords)
    {
        $this->MinusKeywords = $MinusKeywords;

        return $this;
    }

    /**
     * Gets the AutoMinusWords.
     *
     * @return string
     */
    public function getAutoMinusWords()
    {
        return $this->AutoMinusWords;
    }

    /**
     * Sets the AutoMinusWords.
     *
     * @param string $AutoMinusWords
     *
     * @return BannerInfo
     */
    public function setAutoMinusWords($AutoMinusWords)
    {
        $this->AutoMinusWords = $AutoMinusWords;

        return $this;
    }

    /**
     * Gets the AgeLabel.
     *
     * @return string
     */
    public function getAgeLabel()
    {
        return $this->AgeLabel;
    }

    /**
     * Sets the AgeLabel.
     *
     * @param string $AgeLabel
     *
     * @return BannerInfo
     */
    public function setAgeLabel($AgeLabel)
    {
        $this->AgeLabel = $AgeLabel;

        return $this;
    }
}