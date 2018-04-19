<?php

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
        return isset($this->Manager) ? $this->Manager : null;
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
        return isset($this->Agency) ? $this->Agency : null;
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

