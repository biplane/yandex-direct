<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoExtensionGetItem
{

    protected $CreativeId = null;

//    Can be omit.
//    protected $Status = null;

    protected $ThumbnailUrl = null;

    protected $PreviewUrl = null;

    /**
     * Creates a new instance of VideoExtensionGetItem.
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
     * @return $this
     */
    public function setCreativeId($value)
    {
        $this->CreativeId = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     * @see StatusEnum
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return $this
     * @see StatusEnum
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets ThumbnailUrl.
     *
     * @return string
     */
    public function getThumbnailUrl()
    {
        return $this->ThumbnailUrl;
    }

    /**
     * Sets ThumbnailUrl.
     *
     * @param string $value
     * @return $this
     */
    public function setThumbnailUrl($value)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    /**
     * Gets PreviewUrl.
     *
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->PreviewUrl;
    }

    /**
     * Sets PreviewUrl.
     *
     * @param string $value
     * @return $this
     */
    public function setPreviewUrl($value)
    {
        $this->PreviewUrl = $value;

        return $this;
    }


}

