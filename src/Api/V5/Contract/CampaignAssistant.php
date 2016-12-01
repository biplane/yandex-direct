<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignAssistant
{

    protected $Manager = null;

    protected $Agency = null;

    /**
     * Creates a new instance of CampaignAssistant.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Manager.
     *
     * @return string|null
     */
    public function getManager()
    {
        return $this->Manager;
    }

    /**
     * Sets Manager.
     *
     * @param string|null $value
     * @return self
     */
    public function setManager($value = null)
    {
        $this->Manager = $value;

        return $this;
    }

    /**
     * Gets Agency.
     *
     * @return string|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }

    /**
     * Sets Agency.
     *
     * @param string|null $value
     * @return self
     */
    public function setAgency($value = null)
    {
        $this->Agency = $value;

        return $this;
    }


}

