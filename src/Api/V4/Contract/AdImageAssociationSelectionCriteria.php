<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageAssociationSelectionCriteria
{
//    Can be omitted.
//    protected $Logins;

//    Can be omitted.
//    protected $AdImageHashes;

//    Can be omitted.
//    protected $StatusAdImageModerate;

//    Can be omitted.
//    protected $AdIDS;

//    Can be omitted.
//    protected $CampaignIDS;

    /** @var int|null */
    protected $Limit = null;

    /** @var int|null */
    protected $Offset = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Logins
     *
     * @return list<string>|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins ?? null;
    }

    /**
     * Set Logins
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Get AdImageHashes
     *
     * @return list<string>|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes ?? null;
    }

    /**
     * Set AdImageHashes
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setAdImageHashes(?array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Get StatusAdImageModerate
     *
     * @return list<string>|null
     */
    public function getStatusAdImageModerate(): ?array
    {
        return $this->StatusAdImageModerate ?? null;
    }

    /**
     * Set StatusAdImageModerate
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setStatusAdImageModerate(?array $value)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * Get AdIDS
     *
     * @return list<int>|null
     */
    public function getAdIDS(): ?array
    {
        return $this->AdIDS ?? null;
    }

    /**
     * Set AdIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setAdIDS(?array $value)
    {
        $this->AdIDS = $value;

        return $this;
    }

    /**
     * Get CampaignIDS
     *
     * @return list<int>|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS ?? null;
    }

    /**
     * Set CampaignIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setCampaignIDS(?array $value)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * Get Limit
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * Set Limit
     *
     * @return $this
     */
    public function setLimit(?int $value)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Get Offset
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * Set Offset
     *
     * @return $this
     */
    public function setOffset(?int $value)
    {
        $this->Offset = $value;

        return $this;
    }
}
