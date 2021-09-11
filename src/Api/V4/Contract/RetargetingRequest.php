<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingRequest
{
    protected $Action = null;

    protected $Login = null;

    protected $SelectionCriteria = null;

    protected $Retargetings = null;

    protected $Options = null;

    /**
     * Creates a new instance of RetargetingRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Action.
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?RetargetingSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?RetargetingSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets Retargetings.
     *
     * @return Retargeting[]|null
     */
    public function getRetargetings(): ?array
    {
        return $this->Retargetings;
    }

    /**
     * Sets Retargetings.
     *
     * @param Retargeting[]|null $value
     *
     * @return $this
     */
    public function setRetargetings(?array $value = null)
    {
        $this->Retargetings = $value;

        return $this;
    }

    /**
     * Gets Options.
     */
    public function getOptions(): ?RetargetingRequestOptions
    {
        return $this->Options;
    }

    /**
     * Sets Options.
     *
     * @return $this
     */
    public function setOptions(?RetargetingRequestOptions $value = null)
    {
        $this->Options = $value;

        return $this;
    }
}
