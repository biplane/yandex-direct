<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * @param int $BannerID
     * @return BannerInfo
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return BannerInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return BannerInfo
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return BannerInfo
     */
    public function setText($Text)
    {
        $this->Text = $Text;

        return $this;
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * @param string $Href
     * @return BannerInfo
     */
    public function setHref($Href)
    {
        $this->Href = $Href;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * @param string $Domain
     * @return BannerInfo
     */
    public function setDomain($Domain)
    {
        $this->Domain = $Domain;

        return $this;
    }

    /**
     * @return string
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * @param string $Geo
     * @return BannerInfo
     */
    public function setGeo($Geo)
    {
        $this->Geo = $Geo;

        return $this;
    }

    /**
     * @return ContactInfo
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }

    /**
     * @param ContactInfo $ContactInfo
     * @return BannerInfo
     */
    public function setContactInfo(ContactInfo $ContactInfo)
    {
        $this->ContactInfo = $ContactInfo;

        return $this;
    }

    /**
     * @return BannerPhraseInfo[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * @param BannerPhraseInfo[] $Phrases
     * @return BannerInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * @param string $StatusActivating
     * @return BannerInfo
     */
    public function setStatusActivating($StatusActivating)
    {
        $this->StatusActivating = $StatusActivating;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * @param string $StatusArchive
     * @return BannerInfo
     */
    public function setStatusArchive($StatusArchive)
    {
        $this->StatusArchive = $StatusArchive;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusBannerModerate()
    {
        return $this->StatusBannerModerate;
    }

    /**
     * @param string $StatusBannerModerate
     * @return BannerInfo
     */
    public function setStatusBannerModerate($StatusBannerModerate)
    {
        $this->StatusBannerModerate = $StatusBannerModerate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusPhrasesModerate()
    {
        return $this->StatusPhrasesModerate;
    }

    /**
     * @param string $StatusPhrasesModerate
     * @return BannerInfo
     */
    public function setStatusPhrasesModerate($StatusPhrasesModerate)
    {
        $this->StatusPhrasesModerate = $StatusPhrasesModerate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusPhoneModerate()
    {
        return $this->StatusPhoneModerate;
    }

    /**
     * @param string $StatusPhoneModerate
     * @return BannerInfo
     */
    public function setStatusPhoneModerate($StatusPhoneModerate)
    {
        $this->StatusPhoneModerate = $StatusPhoneModerate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * @param string $StatusShow
     * @return BannerInfo
     */
    public function setStatusShow($StatusShow)
    {
        $this->StatusShow = $StatusShow;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param string $IsActive
     * @return BannerInfo
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusSitelinksModerate()
    {
        return $this->StatusSitelinksModerate;
    }

    /**
     * @param string $StatusSitelinksModerate
     * @return BannerInfo
     */
    public function setStatusSitelinksModerate($StatusSitelinksModerate)
    {
        $this->StatusSitelinksModerate = $StatusSitelinksModerate;

        return $this;
    }

    /**
     * @return Sitelink[]
     */
    public function getSitelinks()
    {
        return $this->Sitelinks;
    }

    /**
     * @param Sitelink[] $Sitelinks
     * @return BannerInfo
     */
    public function setSitelinks(array $Sitelinks)
    {
        $this->Sitelinks = $Sitelinks;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAdWarnings()
    {
        return $this->AdWarnings;
    }

    /**
     * @param string[] $AdWarnings
     * @return BannerInfo
     */
    public function setAdWarnings(array $AdWarnings)
    {
        $this->AdWarnings = $AdWarnings;

        return $this;
    }

    /**
     * @return string
     */
    public function getFixedOnModeration()
    {
        return $this->FixedOnModeration;
    }

    /**
     * @param string $FixedOnModeration
     * @return BannerInfo
     */
    public function setFixedOnModeration($FixedOnModeration)
    {
        $this->FixedOnModeration = $FixedOnModeration;

        return $this;
    }

    /**
     * @return RejectReason[]
     */
    public function getModerateRejectionReasons()
    {
        return $this->ModerateRejectionReasons;
    }

    /**
     * @param RejectReason[] $ModerateRejectionReasons
     * @return BannerInfo
     */
    public function setModerateRejectionReasons(array $ModerateRejectionReasons)
    {
        $this->ModerateRejectionReasons = $ModerateRejectionReasons;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getMinusKeywords()
    {
        return $this->MinusKeywords;
    }

    /**
     * @param string[] $MinusKeywords
     * @return BannerInfo
     */
    public function setMinusKeywords(array $MinusKeywords)
    {
        $this->MinusKeywords = $MinusKeywords;

        return $this;
    }
}