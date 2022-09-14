<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckResponseIds
{
//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $AdGroupIds = null;

//    Can be omitted.
//    protected $AdIds = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdGroupIds(?array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdIds(): ?array
    {
        return $this->AdIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdIds(?array $value = null)
    {
        $this->AdIds = $value;

        return $this;
    }
}
