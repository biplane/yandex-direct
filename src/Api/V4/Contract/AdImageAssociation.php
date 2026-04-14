<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageAssociation
{
    /** @var int */
    protected $AdID;

    /** @var string|null */
    protected $AdImageHash = null;

    /** @var string|null */
    protected $Login = null;

    /** @var int|null */
    protected $CampaignID = null;

    /** @var string|null */
    protected $StatusAdImageModerate = null;

//    Can be omitted.
//    protected $ModerateRejectionReasons;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AdID
     */
    public function getAdID(): int
    {
        return $this->AdID;
    }

    /**
     * Set AdID
     *
     * @return $this
     */
    public function setAdID(int $value)
    {
        $this->AdID = $value;

        return $this;
    }

    /**
     * Get AdImageHash
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash;
    }

    /**
     * Set AdImageHash
     *
     * @return $this
     */
    public function setAdImageHash(?string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(?string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get CampaignID
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Set CampaignID
     *
     * @return $this
     */
    public function setCampaignID(?int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Get StatusAdImageModerate
     */
    public function getStatusAdImageModerate(): ?string
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Set StatusAdImageModerate
     *
     * @return $this
     */
    public function setStatusAdImageModerate(?string $value)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * Get ModerateRejectionReasons
     *
     * @return list<RejectReason>|null
     */
    public function getModerateRejectionReasons(): ?array
    {
        return $this->ModerateRejectionReasons ?? null;
    }

    /**
     * Set ModerateRejectionReasons
     *
     * @param list<RejectReason>|null $value
     *
     * @return $this
     */
    public function setModerateRejectionReasons(?array $value)
    {
        $this->ModerateRejectionReasons = $value;

        return $this;
    }
}
