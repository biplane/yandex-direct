<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingRequest
{
    /**
     * @var string
     */
    protected $Action;
    /**
     * @var RetargetingSelectionCriteria
     */
    protected $SelectionCriteria;
    /**
     * @var Retargeting[]
     */
    protected $Retargetings;
    /**
     * @var RetargetingRequestOptions
     */
    protected $Options;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets the Action.
     *
     * @param string $Action
     *
     * @return RetargetingRequest
     */
    public function setAction($Action)
    {
        $this->Action = $Action;

        return $this;
    }

    /**
     * Gets the SelectionCriteria.
     *
     * @return RetargetingSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets the SelectionCriteria.
     *
     * @param RetargetingSelectionCriteria $SelectionCriteria
     *
     * @return RetargetingRequest
     */
    public function setSelectionCriteria(RetargetingSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;

        return $this;
    }

    /**
     * Gets the Retargetings.
     *
     * @return Retargeting[]
     */
    public function getRetargetings()
    {
        return $this->Retargetings;
    }

    /**
     * Sets the Retargetings.
     *
     * @param Retargeting[] $Retargetings
     *
     * @return RetargetingRequest
     */
    public function setRetargetings(array $Retargetings)
    {
        $this->Retargetings = $Retargetings;

        return $this;
    }

    /**
     * Gets the Options.
     *
     * @return RetargetingRequestOptions
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * Sets the Options.
     *
     * @param RetargetingRequestOptions $Options
     *
     * @return RetargetingRequest
     */
    public function setOptions(RetargetingRequestOptions $Options)
    {
        $this->Options = $Options;

        return $this;
    }
}