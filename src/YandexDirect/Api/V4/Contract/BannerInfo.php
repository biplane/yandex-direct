<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannerInfo
{

    protected $BannerID = null;

    protected $CampaignID = null;

    protected $Title = null;

    protected $Text = null;

    protected $Href = null;

    protected $Domain = null;

    protected $ContactInfo = null;

    protected $Geo = null;

    protected $Phrases = null;

    protected $MinusKeywords = null;

    protected $StatusActivating = null;

    protected $StatusArchive = null;

    protected $StatusBannerModerate = null;

    protected $StatusPhrasesModerate = null;

    protected $StatusPhoneModerate = null;

    protected $StatusShow = null;

    protected $IsActive = null;

    protected $StatusSitelinksModerate = null;

    protected $Sitelinks = null;

    protected $AdWarnings = null;

    protected $FixedOnModeration = null;

    protected $ModerateRejectionReasons = null;

    protected $Type = null;

    protected $AdGroupID = null;

    protected $AdGroupName = null;

    protected $AutoMinusWords = null;

    protected $AgeLabel = null;

    protected $AdImageHash = null;

    protected $StatusAdImageModerate = null;

    protected $AdGroupMobileBidAdjustment = null;

    /**
     * Creates a new instance of BannerInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BannerID.
     *
     * @return int|null
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @param int|null $value
     * @return self
     */
    public function setBannerID($value = null)
    {
        $this->BannerID = $value;

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
     * @return self
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets Title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @param string|null $value
     * @return self
     */
    public function setTitle($value = null)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Text.
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Sets Text.
     *
     * @param string|null $value
     * @return self
     */
    public function setText($value = null)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return self
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets Domain.
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * Sets Domain.
     *
     * @param string|null $value
     * @return self
     */
    public function setDomain($value = null)
    {
        $this->Domain = $value;

        return $this;
    }

    /**
     * Gets ContactInfo.
     *
     * @return ContactInfo|null
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }

    /**
     * Sets ContactInfo.
     *
     * @param ContactInfo|null $value
     * @return self
     */
    public function setContactInfo(ContactInfo $value = null)
    {
        $this->ContactInfo = $value;

        return $this;
    }

    /**
     * Gets Geo.
     *
     * @return string|null
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * Sets Geo.
     *
     * @param string|null $value
     * @return self
     */
    public function setGeo($value = null)
    {
        $this->Geo = $value;

        return $this;
    }

    /**
     * Gets Phrases.
     *
     * @return BannerPhraseInfo[]|null
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * Sets Phrases.
     *
     * @param BannerPhraseInfo[]|null $value
     * @return self
     */
    public function setPhrases(array $value = null)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * Gets MinusKeywords.
     *
     * @return string[]|null
     */
    public function getMinusKeywords()
    {
        return $this->MinusKeywords;
    }

    /**
     * Sets MinusKeywords.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setMinusKeywords(array $value = null)
    {
        $this->MinusKeywords = $value;

        return $this;
    }

    /**
     * Gets StatusActivating.
     *
     * @return string|null
     */
    public function getStatusActivating()
    {
        return $this->StatusActivating;
    }

    /**
     * Sets StatusActivating.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusActivating($value = null)
    {
        $this->StatusActivating = $value;

        return $this;
    }

    /**
     * Gets StatusArchive.
     *
     * @return string|null
     */
    public function getStatusArchive()
    {
        return $this->StatusArchive;
    }

    /**
     * Sets StatusArchive.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusArchive($value = null)
    {
        $this->StatusArchive = $value;

        return $this;
    }

    /**
     * Gets StatusBannerModerate.
     *
     * @return string|null
     */
    public function getStatusBannerModerate()
    {
        return $this->StatusBannerModerate;
    }

    /**
     * Sets StatusBannerModerate.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusBannerModerate($value = null)
    {
        $this->StatusBannerModerate = $value;

        return $this;
    }

    /**
     * Gets StatusPhrasesModerate.
     *
     * @return string|null
     */
    public function getStatusPhrasesModerate()
    {
        return $this->StatusPhrasesModerate;
    }

    /**
     * Sets StatusPhrasesModerate.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusPhrasesModerate($value = null)
    {
        $this->StatusPhrasesModerate = $value;

        return $this;
    }

    /**
     * Gets StatusPhoneModerate.
     *
     * @return string|null
     */
    public function getStatusPhoneModerate()
    {
        return $this->StatusPhoneModerate;
    }

    /**
     * Sets StatusPhoneModerate.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusPhoneModerate($value = null)
    {
        $this->StatusPhoneModerate = $value;

        return $this;
    }

    /**
     * Gets StatusShow.
     *
     * @return string|null
     */
    public function getStatusShow()
    {
        return $this->StatusShow;
    }

    /**
     * Sets StatusShow.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusShow($value = null)
    {
        $this->StatusShow = $value;

        return $this;
    }

    /**
     * Gets IsActive.
     *
     * @return string|null
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets IsActive.
     *
     * @param string|null $value
     * @return self
     */
    public function setIsActive($value = null)
    {
        $this->IsActive = $value;

        return $this;
    }

    /**
     * Gets StatusSitelinksModerate.
     *
     * @return string|null
     */
    public function getStatusSitelinksModerate()
    {
        return $this->StatusSitelinksModerate;
    }

    /**
     * Sets StatusSitelinksModerate.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusSitelinksModerate($value = null)
    {
        $this->StatusSitelinksModerate = $value;

        return $this;
    }

    /**
     * Gets Sitelinks.
     *
     * @return Sitelink[]|null
     */
    public function getSitelinks()
    {
        return $this->Sitelinks;
    }

    /**
     * Sets Sitelinks.
     *
     * @param Sitelink[]|null $value
     * @return self
     */
    public function setSitelinks(array $value = null)
    {
        $this->Sitelinks = $value;

        return $this;
    }

    /**
     * Gets AdWarnings.
     *
     * @return string[]|null
     */
    public function getAdWarnings()
    {
        return $this->AdWarnings;
    }

    /**
     * Sets AdWarnings.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setAdWarnings(array $value = null)
    {
        $this->AdWarnings = $value;

        return $this;
    }

    /**
     * Gets FixedOnModeration.
     *
     * @return string|null
     */
    public function getFixedOnModeration()
    {
        return $this->FixedOnModeration;
    }

    /**
     * Sets FixedOnModeration.
     *
     * @param string|null $value
     * @return self
     */
    public function setFixedOnModeration($value = null)
    {
        $this->FixedOnModeration = $value;

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
     * @return self
     */
    public function setModerateRejectionReasons(array $value = null)
    {
        $this->ModerateRejectionReasons = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets AdGroupID.
     *
     * @return int|null
     */
    public function getAdGroupID()
    {
        return $this->AdGroupID;
    }

    /**
     * Sets AdGroupID.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdGroupID($value = null)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    /**
     * Gets AdGroupName.
     *
     * @return string|null
     */
    public function getAdGroupName()
    {
        return $this->AdGroupName;
    }

    /**
     * Sets AdGroupName.
     *
     * @param string|null $value
     * @return self
     */
    public function setAdGroupName($value = null)
    {
        $this->AdGroupName = $value;

        return $this;
    }

    /**
     * Gets AutoMinusWords.
     *
     * @return string|null
     */
    public function getAutoMinusWords()
    {
        return $this->AutoMinusWords;
    }

    /**
     * Sets AutoMinusWords.
     *
     * @param string|null $value
     * @return self
     */
    public function setAutoMinusWords($value = null)
    {
        $this->AutoMinusWords = $value;

        return $this;
    }

    /**
     * Gets AgeLabel.
     *
     * @return string|null
     */
    public function getAgeLabel()
    {
        return $this->AgeLabel;
    }

    /**
     * Sets AgeLabel.
     *
     * @param string|null $value
     * @return self
     */
    public function setAgeLabel($value = null)
    {
        $this->AgeLabel = $value;

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
     * @return self
     */
    public function setAdImageHash($value = null)
    {
        $this->AdImageHash = $value;

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
     * @return self
     */
    public function setStatusAdImageModerate($value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * Gets AdGroupMobileBidAdjustment.
     *
     * @return int|null
     */
    public function getAdGroupMobileBidAdjustment()
    {
        return $this->AdGroupMobileBidAdjustment;
    }

    /**
     * Sets AdGroupMobileBidAdjustment.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdGroupMobileBidAdjustment($value = null)
    {
        $this->AdGroupMobileBidAdjustment = $value;

        return $this;
    }


}

