<?php

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
     *
     * @return AdImageAssociationSelectionCriteria
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes()
    {
        return $this->AdImageHashes;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setAdImageHashes(array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Gets StatusAdImageModerate.
     *
     * @return string[]|null
     */
    public function getStatusAdImageModerate()
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * Sets StatusAdImageModerate.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setStatusAdImageModerate(array $value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }

    /**
     * Gets AdIDS.
     *
     * @return int[]|null
     */
    public function getAdIDS()
    {
        return $this->AdIDS;
    }

    /**
     * Sets AdIDS.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setAdIDS(array $value = null)
    {
        $this->AdIDS = $value;

        return $this;
    }

    /**
     * Gets CampaignIDS.
     *
     * @return int[]|null
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets CampaignIDS.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCampaignIDS(array $value = null)
    {
        $this->CampaignIDS = $value;

        return $this;
    }

    /**
     * Gets Limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setLimit($value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @param int|null $value
     * @return $this
     */
    public function setOffset($value = null)
    {
        $this->Offset = $value;

        return $this;
    }


}

