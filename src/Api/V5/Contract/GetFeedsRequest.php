<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetFeedsRequest extends GetRequestGeneral
{
    protected $FieldNames = [];

//    Can be omitted.
//    protected $FileFeedFieldNames = null;

//    Can be omitted.
//    protected $UrlFeedFieldNames = null;

//    Can be omitted.
//    protected $SelectionCriteria = null;

    /**
     * @see FeedFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
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
     * @see FileFeedFieldEnum
     *
     * @return string[]|null
     */
    public function getFileFeedFieldNames(): ?array
    {
        return $this->FileFeedFieldNames ?? null;
    }

    /**
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
     * @see UrlFeedFieldEnum
     *
     * @return string[]|null
     */
    public function getUrlFeedFieldNames(): ?array
    {
        return $this->UrlFeedFieldNames ?? null;
    }

    /**
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

    public function getSelectionCriteria(): ?FeedsSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?FeedsSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
