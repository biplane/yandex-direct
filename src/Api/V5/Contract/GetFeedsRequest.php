<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see FeedFieldEnum
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param string[] $value
     * @return $this
     * @see FeedFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets FileFeedFieldNames.
     *
     * @return string[]|null
     * @see FileFeedFieldEnum
     */
    public function getFileFeedFieldNames()
    {
        return isset($this->FileFeedFieldNames) ? $this->FileFeedFieldNames : null;
    }

    /**
     * Sets FileFeedFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see FileFeedFieldEnum
     */
    public function setFileFeedFieldNames(array $value = null)
    {
        $this->FileFeedFieldNames = $value;

        return $this;
    }

    /**
     * Gets UrlFeedFieldNames.
     *
     * @return string[]|null
     * @see UrlFeedFieldEnum
     */
    public function getUrlFeedFieldNames()
    {
        return isset($this->UrlFeedFieldNames) ? $this->UrlFeedFieldNames : null;
    }

    /**
     * Sets UrlFeedFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see UrlFeedFieldEnum
     */
    public function setUrlFeedFieldNames(array $value = null)
    {
        $this->UrlFeedFieldNames = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return FeedsSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return isset($this->SelectionCriteria) ? $this->SelectionCriteria : null;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param FeedsSelectionCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(FeedsSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }


}

