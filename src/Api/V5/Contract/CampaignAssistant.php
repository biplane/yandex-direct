<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignAssistant
{
//    Can be omit.
//    protected $Manager = null;

//    Can be omit.
//    protected $Agency = null;

    /**
     * Creates a new instance of CampaignAssistant.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Manager.
     */
    public function getManager(): ?string
    {
        return $this->Manager ?? null;
    }

    /**
     * Sets Manager.
     *
     * @return $this
     */
    public function setManager(?string $value = null)
    {
        $this->Manager = $value;

        return $this;
    }

    /**
     * Gets Agency.
     */
    public function getAgency(): ?string
    {
        return $this->Agency ?? null;
    }

    /**
     * Sets Agency.
     *
     * @return $this
     */
    public function setAgency(?string $value = null)
    {
        $this->Agency = $value;

        return $this;
    }
}
