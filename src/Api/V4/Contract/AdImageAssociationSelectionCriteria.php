<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageAssociationSelectionCriteria
{
    protected $Logins = null;

    protected $AdImageHashes = null;

    protected $StatusAdImageModerate = null;

    protected $AdIDS = null;

    protected $CampaignIDS = null;

    protected $Limit = null;

    protected $Offset = null;

    /**
     * Creates a new instance of AdImageAssociationSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAdImageHashes(?array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Gets StatusAdImageModerate.
     *
     * @return string[]|null
     */
    public function getStatusAdImageModerate(): ?array
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets StatusAdImageModerate.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusAdImageModerate(?array $value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * Gets AdIDS.
     *
     * @return int[]|null
     */
    public function getAdIDS(): ?array
    {
        return $this->AdIDS;
    }

    /**
     * Sets AdIDS.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdIDS(?array $value = null)
    {
        $this->AdIDS = $value;

        return $this;
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]|null
     */
    public function getCampaignIDS(): ?array
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIDS(?array $value = null)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * Gets Limit.
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }
}
