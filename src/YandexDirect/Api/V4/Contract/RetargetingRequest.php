<?php

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
     *
     * @return RetargetingRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @param string $value
     * @return $this
     */
    public function setAction($value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return $this
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return RetargetingSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param RetargetingSelectionCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(RetargetingSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets Retargetings.
     *
     * @return Retargeting[]|null
     */
    public function getRetargetings()
    {
        return $this->Retargetings;
    }

    /**
     * Sets Retargetings.
     *
     * @param Retargeting[]|null $value
     * @return $this
     */
    public function setRetargetings(array $value = null)
    {
        $this->Retargetings = $value;

        return $this;
    }

    /**
     * Gets Options.
     *
     * @return RetargetingRequestOptions|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * Sets Options.
     *
     * @param RetargetingRequestOptions|null $value
     * @return $this
     */
    public function setOptions(RetargetingRequestOptions $value = null)
    {
        $this->Options = $value;

        return $this;
    }


}

