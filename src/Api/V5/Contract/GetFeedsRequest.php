<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetFeedsRequest extends GetRequestGeneral
{
    protected $FieldNames = [];

//    Can be omit.
//    protected $FileFeedFieldNames = null;

//    Can be omit.
//    protected $UrlFeedFieldNames = null;

//    Can be omit.
//    protected $SelectionCriteria = null;

    /**
     * Creates a new instance of GetFeedsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FieldNames.
     *
     * @see FeedFieldEnum
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
     * @see FeedFieldEnum
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
     * Gets FileFeedFieldNames.
     *
     * @see FileFeedFieldEnum
     *
     * @return string[]|null
     */
    public function getFileFeedFieldNames(): ?array
    {
        return $this->FileFeedFieldNames ?? null;
    }

    /**
     * Sets FileFeedFieldNames.
     *
     * @see FileFeedFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setFileFeedFieldNames(?array $value = null)
    {
        $this->FileFeedFieldNames = $value;

        return $this;
    }

    /**
     * Gets UrlFeedFieldNames.
     *
     * @see UrlFeedFieldEnum
     *
     * @return string[]|null
     */
    public function getUrlFeedFieldNames(): ?array
    {
        return $this->UrlFeedFieldNames ?? null;
    }

    /**
     * Sets UrlFeedFieldNames.
     *
     * @see UrlFeedFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setUrlFeedFieldNames(?array $value = null)
    {
        $this->UrlFeedFieldNames = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?FeedsSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?FeedsSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
