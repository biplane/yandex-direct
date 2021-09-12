<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetKeywordBidsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omitted.
//    protected $SearchFieldNames = null;

//    Can be omitted.
//    protected $NetworkFieldNames = null;

    public function getSelectionCriteria(): KeywordBidsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(KeywordBidsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see KeywordBidFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * @see KeywordBidFieldEnum
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

    /**
     * @see KeywordBidSearchFieldEnum
     *
     * @return string[]|null
     */
    public function getSearchFieldNames(): ?array
    {
        return $this->SearchFieldNames ?? null;
    }

    /**
     * @see KeywordBidSearchFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSearchFieldNames(?array $value = null)
    {
        $this->SearchFieldNames = $value;

        return $this;
    }

    /**
     * @see KeywordBidNetworkFieldEnum
     *
     * @return string[]|null
     */
    public function getNetworkFieldNames(): ?array
    {
        return $this->NetworkFieldNames ?? null;
    }

    /**
     * @see KeywordBidNetworkFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setNetworkFieldNames(?array $value = null)
    {
        $this->NetworkFieldNames = $value;

        return $this;
    }
}
