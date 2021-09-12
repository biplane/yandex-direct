<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmVideoAdBuilderAdUpdate extends AdBuilderAdUpdateBase
{
//    Can be omitted.
//    protected $Href = null;

//    Can be omitted.
//    protected $TrackingPixels = null;

//    Can be omitted.
//    protected $TurboPageId = null;

    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * @return $this
     */
    public function setHref(?string $value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTrackingPixels(): ?array
    {
        return $this->TrackingPixels ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTrackingPixels(?array $value = null)
    {
        $this->TrackingPixels = $value;

        return $this;
    }

    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * @return $this
     */
    public function setTurboPageId(?int $value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }
}
