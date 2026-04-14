<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetFeedsRequest extends GetRequestGeneral
{
    /** @var non-empty-list<'Id'|'Name'|'BusinessType'|'SourceType'|'FilterSchema'|'UpdatedAt'|'CampaignIds'|'NumberOfItems'|'NumberOfListings'|'Status'|'TitleAndTextSources'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $FileFeedFieldNames;

//    Can be omitted.
//    protected $UrlFeedFieldNames;

//    Can be omitted.
//    protected $SelectionCriteria;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FeedFieldEnum
     *
     * @return non-empty-list<'Id'|'Name'|'BusinessType'|'SourceType'|'FilterSchema'|'UpdatedAt'|'CampaignIds'|'NumberOfItems'|'NumberOfListings'|'Status'|'TitleAndTextSources'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FeedFieldEnum
     *
     * @param non-empty-list<'Id'|'Name'|'BusinessType'|'SourceType'|'FilterSchema'|'UpdatedAt'|'CampaignIds'|'NumberOfItems'|'NumberOfListings'|'Status'|'TitleAndTextSources'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get FileFeedFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FileFeedFieldEnum
     *
     * @return list<'Filename'>
     */
    public function getFileFeedFieldNames(): array
    {
        return $this->FileFeedFieldNames ?? [];
    }

    /**
     * Set FileFeedFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\FileFeedFieldEnum
     *
     * @param list<'Filename'> $value
     *
     * @return $this
     */
    public function setFileFeedFieldNames(array $value)
    {
        $this->FileFeedFieldNames = $value;

        return $this;
    }

    /**
     * Get UrlFeedFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UrlFeedFieldEnum
     *
     * @return list<'Login'|'Url'|'RemoveUtmTags'>
     */
    public function getUrlFeedFieldNames(): array
    {
        return $this->UrlFeedFieldNames ?? [];
    }

    /**
     * Set UrlFeedFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UrlFeedFieldEnum
     *
     * @param list<'Login'|'Url'|'RemoveUtmTags'> $value
     *
     * @return $this
     */
    public function setUrlFeedFieldNames(array $value)
    {
        $this->UrlFeedFieldNames = $value;

        return $this;
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): ?FeedsSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?FeedsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
