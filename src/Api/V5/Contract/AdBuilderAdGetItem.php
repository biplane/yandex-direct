<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdGetItem
{

    protected $CreativeId = null;

    protected $ThumbnailUrl = null;

    protected $PreviewUrl = null;

    /**
     * Creates a new instance of AdBuilderAdGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CreativeId.
     *
     * @return int
     */
    public function getCreativeId()
    {
        return $this->CreativeId;
    }

    /**
     * Sets CreativeId.
     *
     * @param int $value
     * @return self
     */
    public function setCreativeId($value)
    {
        $this->CreativeId = $value;

        return $this;
    }

    /**
     * Gets ThumbnailUrl.
     *
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        return $this->ThumbnailUrl;
    }

    /**
     * Sets ThumbnailUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setThumbnailUrl($value = null)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    /**
     * Gets PreviewUrl.
     *
     * @return string|null
     */
    public function getPreviewUrl()
    {
        return $this->PreviewUrl;
    }

    /**
     * Sets PreviewUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setPreviewUrl($value = null)
    {
        $this->PreviewUrl = $value;

        return $this;
    }


}

