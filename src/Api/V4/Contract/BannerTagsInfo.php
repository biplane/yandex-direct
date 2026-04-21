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
    /** @var int */
    protected $BannerID;

//    Can be omitted.
//    protected $TagIDS;

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
     * Get BannerID
     */
    public function getBannerID(): int
    {
        return $this->BannerID;
    }

    /**
     * Set BannerID
     *
     * @return $this
     */
    public function setBannerID(int $value)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Get TagIDS
     *
     * @return list<int>|null
     */
    public function getTagIDS(): ?array
    {
        return $this->TagIDS ?? null;
    }

    /**
     * Set TagIDS
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setTagIDS(?array $value)
    {
        $this->TagIDS = $value;

        return $this;
    }
}
