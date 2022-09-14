<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BidModifiersSelectionCriteria
{
//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $AdGroupIds = null;

//    Can be omitted.
//    protected $Ids = null;

//    Can be omitted.
//    protected $Types = null;

    protected $Levels = [];

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
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * @see BidModifierTypeEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * @see BidModifierTypeEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTypes(?array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * @see BidModifierLevelEnum
     *
     * @return string[]
     */
    public function getLevels(): array
    {
        return $this->Levels;
    }

    /**
     * @see BidModifierLevelEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setLevels(array $value)
    {
        $this->Levels = $value;

        return $this;
    }
}
