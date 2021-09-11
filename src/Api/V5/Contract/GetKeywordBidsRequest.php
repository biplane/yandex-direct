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

//    Can be omit.
//    protected $SearchFieldNames = null;

//    Can be omit.
//    protected $NetworkFieldNames = null;

    /**
     * Creates a new instance of GetKeywordBidsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): KeywordBidsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(KeywordBidsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see KeywordBidFieldEnum
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
     * Gets SearchFieldNames.
     *
     * @see KeywordBidSearchFieldEnum
     *
     * @return string[]|null
     */
    public function getSearchFieldNames(): ?array
    {
        return $this->SearchFieldNames ?? null;
    }

    /**
     * Sets SearchFieldNames.
     *
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
     * Gets NetworkFieldNames.
     *
     * @see KeywordBidNetworkFieldEnum
     *
     * @return string[]|null
     */
    public function getNetworkFieldNames(): ?array
    {
        return $this->NetworkFieldNames ?? null;
    }

    /**
     * Sets NetworkFieldNames.
     *
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
