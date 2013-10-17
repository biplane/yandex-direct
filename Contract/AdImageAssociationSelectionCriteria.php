<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageAssociationSelectionCriteria
{
    /**
     * @var string[]
     */
    protected $Logins;
    /**
     * @var string[]
     */
    protected $AdImageHashes;
    /**
     * @var string[]
     */
    protected $StatusAdImageModerate;
    /**
     * @var int[]
     */
    protected $AdIDS;
    /**
     * @var int[]
     */
    protected $CampaignIDS;
    /**
     * @var int
     */
    protected $Limit;
    /**
     * @var int
     */
    protected $Offset;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the AdImageHashes.
     *
     * @return string[]
     */
    public function getAdImageHashes()
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets the AdImageHashes.
     *
     * @param string[] $AdImageHashes
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function setAdImageHashes(array $AdImageHashes)
    {
        $this->AdImageHashes = $AdImageHashes;

        return $this;
    }

    /**
     * Gets the StatusAdImageModerate.
     *
     * @return string[]
     */
    public function getStatusAdImageModerate()
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets the StatusAdImageModerate.
     *
     * @param string[] $StatusAdImageModerate
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function setStatusAdImageModerate(array $StatusAdImageModerate)
    {
        $this->StatusAdImageModerate = $StatusAdImageModerate;

        return $this;
    }

    /**
     * Gets the AdIDS.
     *
     * @return int[]
     */
    public function getAdIDS()
    {
        return $this->AdIDS;
    }

    /**
     * Sets the AdIDS.
     *
     * @param int[] $AdIDS
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function setAdIDS(array $AdIDS)
    {
        $this->AdIDS = $AdIDS;

        return $this;
    }

    /**
     * Gets the CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets the CampaignIDS.
     *
     * @param int[] $CampaignIDS
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

        return $this;
    }

    /**
     * Gets the Limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets the Limit.
     *
     * @param int $Limit
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * Gets the Offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets the Offset.
     *
     * @param int $Offset
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }
}