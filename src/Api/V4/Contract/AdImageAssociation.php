<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdID.
     */
    public function getAdID(): int
    {
        return $this->AdID;
    }

    /**
     * Sets AdID.
     *
     * @return $this
     */
    public function setAdID(int $value)
    {
        $this->AdID = $value;

        return $this;
    }

    /**
     * Gets AdImageHash.
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets CampaignID.
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets StatusAdImageModerate.
     */
    public function getStatusAdImageModerate(): ?string
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets StatusAdImageModerate.
     *
     * @return $this
     */
    public function setStatusAdImageModerate(?string $value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * Gets ModerateRejectionReasons.
     *
     * @return RejectReason[]|null
     */
    public function getModerateRejectionReasons(): ?array
    {
        return $this->ModerateRejectionReasons;
    }

    /**
     * Sets ModerateRejectionReasons.
     *
     * @param RejectReason[]|null $value
     *
     * @return $this
     */
    public function setModerateRejectionReasons(?array $value = null)
    {
        $this->ModerateRejectionReasons = $value;

        return $this;
    }
}
