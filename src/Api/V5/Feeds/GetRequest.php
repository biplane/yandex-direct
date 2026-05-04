<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Feeds;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\GetRequestGeneral;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequest extends GetRequestGeneral
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
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Feeds\FeedFieldEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Feeds\FeedFieldEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Feeds\FileFeedFieldEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Feeds\FileFeedFieldEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Feeds\UrlFeedFieldEnum
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
     * @see \Biplane\YandexDirect\Api\V5\Feeds\UrlFeedFieldEnum
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
