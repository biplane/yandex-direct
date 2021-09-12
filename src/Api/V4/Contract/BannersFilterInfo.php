<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannersFilterInfo
{
    protected $StatusPhoneModerate = null;

    protected $StatusBannerModerate = null;

    protected $StatusPhrasesModerate = null;

    protected $StatusActivating = null;

    protected $StatusShow = null;

    protected $IsActive = null;

    protected $StatusArchive = null;

    protected $TagIDS = null;

    protected $Tags = null;

    protected $StatusAdImageModerate = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]|null
     */
    public function getStatusPhoneModerate(): ?array
    {
        return $this->StatusPhoneModerate;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusPhoneModerate(?array $value = null)
    {
        $this->StatusPhoneModerate = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getStatusBannerModerate(): ?array
    {
        return $this->StatusBannerModerate;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusBannerModerate(?array $value = null)
    {
        $this->StatusBannerModerate = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getStatusPhrasesModerate(): ?array
    {
        return $this->StatusPhrasesModerate;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusPhrasesModerate(?array $value = null)
    {
        $this->StatusPhrasesModerate = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getStatusActivating(): ?array
    {
        return $this->StatusActivating;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusActivating(?array $value = null)
    {
        $this->StatusActivating = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getStatusShow(): ?array
    {
        return $this->StatusShow;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusShow(?array $value = null)
    {
        $this->StatusShow = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getIsActive(): ?array
    {
        return $this->IsActive;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setIsActive(?array $value = null)
    {
        $this->IsActive = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getStatusArchive(): ?array
    {
        return $this->StatusArchive;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusArchive(?array $value = null)
    {
        $this->StatusArchive = $value;

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

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->Tags;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTags(?array $value = null)
    {
        $this->Tags = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getStatusAdImageModerate(): ?array
    {
        return $this->StatusAdImageModerate;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusAdImageModerate(?array $value = null)
    {
        $this->StatusAdImageModerate = $value;

        return $this;
    }
}
