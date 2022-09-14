<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingRequest
{
    protected $Action = null;

    protected $Login = null;

    protected $SelectionCriteria = null;

    protected $Retargetings = null;

    protected $Options = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getSelectionCriteria(): ?RetargetingSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?RetargetingSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @return Retargeting[]|null
     */
    public function getRetargetings(): ?array
    {
        return $this->Retargetings;
    }

    /**
     * @param Retargeting[]|null $value
     *
     * @return $this
     */
    public function setRetargetings(?array $value = null)
    {
        $this->Retargetings = $value;

        return $this;
    }

    public function getOptions(): ?RetargetingRequestOptions
    {
        return $this->Options;
    }

    /**
     * @return $this
     */
    public function setOptions(?RetargetingRequestOptions $value = null)
    {
        $this->Options = $value;

        return $this;
    }
}
