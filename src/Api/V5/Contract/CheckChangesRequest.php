<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckChangesRequest
{
//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $AdIds = null;

    protected $Timestamp = null;

    protected $FieldNames = [];

    /**
     * Creates a new instance of CheckChangesRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * Sets CampaignIds.
     *
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
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
     * Sets AdGroupIds.
     *
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
     * Gets AdIds.
     *
     * @return int[]|null
     */
    public function getAdIds(): ?array
    {
        return $this->AdIds ?? null;
    }

    /**
     * Sets AdIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdIds(?array $value = null)
    {
        $this->AdIds = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see CheckFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @see CheckFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }
}
