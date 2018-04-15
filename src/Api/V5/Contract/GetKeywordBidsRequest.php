<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordBidsRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    protected $SearchFieldNames = null;

    protected $NetworkFieldNames = null;

    /**
     * Creates a new instance of GetKeywordBidsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return KeywordBidsSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param KeywordBidsSelectionCriteria $value
     * @return self
     */
    public function setSelectionCriteria(KeywordBidsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see KeywordBidFieldEnum
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param string[] $value
     * @return self
     * @see KeywordBidFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets SearchFieldNames.
     *
     * @return string[]|null
     * @see KeywordBidSearchFieldEnum
     */
    public function getSearchFieldNames()
    {
        return $this->SearchFieldNames;
    }

    /**
     * Sets SearchFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see KeywordBidSearchFieldEnum
     */
    public function setSearchFieldNames(array $value = null)
    {
        $this->SearchFieldNames = $value;

        return $this;
    }

    /**
     * Gets NetworkFieldNames.
     *
     * @return string[]|null
     * @see KeywordBidNetworkFieldEnum
     */
    public function getNetworkFieldNames()
    {
        return $this->NetworkFieldNames;
    }

    /**
     * Sets NetworkFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see KeywordBidNetworkFieldEnum
     */
    public function setNetworkFieldNames(array $value = null)
    {
        $this->NetworkFieldNames = $value;

        return $this;
    }


}

