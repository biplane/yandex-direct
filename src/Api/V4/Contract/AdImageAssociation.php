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
    protected $AdID = null;

    protected $AdImageHash = null;

    protected $Login = null;

    protected $CampaignID = null;

    protected $StatusAdImageModerate = null;

    protected $ModerateRejectionReasons = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdID(): int
    {
        return $this->AdID;
    }

    /**
     * @return $this
     */
    public function setAdID(int $value)
    {
        $this->AdID = $value;

        return $this;
    }

    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    public function getStatusAdImageModerate(): ?string
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * @return $this
     */
    public function setStatusAdImageModerate(?string $value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * @return RejectReason[]|null
     */
    public function getModerateRejectionReasons(): ?array
    {
        return $this->ModerateRejectionReasons;
    }

    /**
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
