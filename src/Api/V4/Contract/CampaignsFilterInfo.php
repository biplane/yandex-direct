<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignsFilterInfo
{
    protected $StatusModerate = null;

    protected $IsActive = null;

    protected $StatusArchive = null;

    protected $StatusActivating = null;

    protected $StatusShow = null;

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
    public function getStatusModerate(): ?array
    {
        return $this->StatusModerate;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatusModerate(?array $value = null)
    {
        $this->StatusModerate = $value;

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
}
