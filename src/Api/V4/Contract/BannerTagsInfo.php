<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannerTagsInfo
{
    protected $BannerID = null;

    protected $TagIDS = null;

    /**
     * Creates a new instance of BannerTagsInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BannerID.
     */
    public function getBannerID(): int
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @return $this
     */
    public function setBannerID(int $value)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets TagIDS.
     *
     * @return int[]|null
     */
    public function getTagIDS(): ?array
    {
        return $this->TagIDS;
    }

    /**
     * Sets TagIDS.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setTagIDS(?array $value = null)
    {
        $this->TagIDS = $value;

        return $this;
    }
}
