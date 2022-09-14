<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BannerTagsInfo
{
    protected $BannerID = null;

    protected $TagIDS = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBannerID(): int
    {
        return $this->BannerID;
    }

    /**
     * @return $this
     */
    public function setBannerID(int $value)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getTagIDS(): ?array
    {
        return $this->TagIDS;
    }

    /**
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
