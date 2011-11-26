<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ClientInfo
{
    /**
     * @var string
     */
    protected $Phone;
    /**
     * @var date
     */
    protected $DateCreate;
    /**
     * @var string
     */
    protected $FIO;
    /**
     * @var string
     */
    protected $Email;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $StatusArch;
    /**
     * @var float
     */
    protected $Discount;
    /**
     * @var string
     */
    protected $SmsPhone;
    /**
     * @var string[]
     */
    protected $CampaignEmails;
    /**
     * @var ClientRight[]
     */
    protected $ClientRights;
    /**
     * @var string
     */
    protected $Role;
    /**
     * @var string
     */
    protected $NonResident;
    /**
     * @var string
     */
    protected $SendNews;
    /**
     * @var string
     */
    protected $SendAccNews;
    /**
     * @var string
     */
    protected $SendWarn;
    /**
     * @var string[]
     */
    protected $ManagersLogins;

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return ClientInfo
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * @return date
     */
    public function getDateCreate()
    {
        return $this->DateCreate;
    }

    /**
     * @param date $DateCreate
     * @return ClientInfo
     */
    public function setDateCreate($DateCreate)
    {
        $this->DateCreate = $DateCreate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * @param string $FIO
     * @return ClientInfo
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return ClientInfo
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return ClientInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusArch()
    {
        return $this->StatusArch;
    }

    /**
     * @param string $StatusArch
     * @return ClientInfo
     */
    public function setStatusArch($StatusArch)
    {
        $this->StatusArch = $StatusArch;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return ClientInfo
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

        return $this;
    }

    /**
     * @return string
     */
    public function getSmsPhone()
    {
        return $this->SmsPhone;
    }

    /**
     * @param string $SmsPhone
     * @return ClientInfo
     */
    public function setSmsPhone($SmsPhone)
    {
        $this->SmsPhone = $SmsPhone;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCampaignEmails()
    {
        return $this->CampaignEmails;
    }

    /**
     * @param string[] $CampaignEmails
     * @return ClientInfo
     */
    public function setCampaignEmails(array $CampaignEmails)
    {
        $this->CampaignEmails = $CampaignEmails;

        return $this;
    }

    /**
     * @return ClientRight[]
     */
    public function getClientRights()
    {
        return $this->ClientRights;
    }

    /**
     * @param ClientRight[] $ClientRights
     * @return ClientInfo
     */
    public function setClientRights(array $ClientRights)
    {
        $this->ClientRights = $ClientRights;

        return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param string $Role
     * @return ClientInfo
     */
    public function setRole($Role)
    {
        $this->Role = $Role;

        return $this;
    }

    /**
     * @return string
     */
    public function getNonResident()
    {
        return $this->NonResident;
    }

    /**
     * @param string $NonResident
     * @return ClientInfo
     */
    public function setNonResident($NonResident)
    {
        $this->NonResident = $NonResident;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendNews()
    {
        return $this->SendNews;
    }

    /**
     * @param string $SendNews
     * @return ClientInfo
     */
    public function setSendNews($SendNews)
    {
        $this->SendNews = $SendNews;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendAccNews()
    {
        return $this->SendAccNews;
    }

    /**
     * @param string $SendAccNews
     * @return ClientInfo
     */
    public function setSendAccNews($SendAccNews)
    {
        $this->SendAccNews = $SendAccNews;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendWarn()
    {
        return $this->SendWarn;
    }

    /**
     * @param string $SendWarn
     * @return ClientInfo
     */
    public function setSendWarn($SendWarn)
    {
        $this->SendWarn = $SendWarn;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getManagersLogins()
    {
        return $this->ManagersLogins;
    }

    /**
     * @param string[] $ManagersLogins
     * @return ClientInfo
     */
    public function setManagersLogins(array $ManagersLogins)
    {
        $this->ManagersLogins = $ManagersLogins;

        return $this;
    }
}