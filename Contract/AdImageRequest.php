<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageRequest
{
    /**
     * @var string
     */
    protected $Action;
    /**
     * @var AdImageSelectionCriteria
     */
    protected $SelectionCriteria;
    /**
     * @var AdImageRaw[]
     */
    protected $AdImageRawData;
    /**
     * @var AdImageURL[]
     */
    protected $AdImageURLData;

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
     * @return AdImageRequest
     */
    public function setAction($Action)
    {
        $this->Action = $Action;

        return $this;
    }

    /**
     * Gets the SelectionCriteria.
     *
     * @return AdImageSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets the SelectionCriteria.
     *
     * @param AdImageSelectionCriteria $SelectionCriteria
     *
     * @return AdImageRequest
     */
    public function setSelectionCriteria(AdImageSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;

        return $this;
    }

    /**
     * Gets the AdImageRawData.
     *
     * @return AdImageRaw[]
     */
    public function getAdImageRawData()
    {
        return $this->AdImageRawData;
    }

    /**
     * Sets the AdImageRawData.
     *
     * @param AdImageRaw[] $AdImageRawData
     *
     * @return AdImageRequest
     */
    public function setAdImageRawData(array $AdImageRawData)
    {
        $this->AdImageRawData = $AdImageRawData;

        return $this;
    }

    /**
     * Gets the AdImageURLData.
     *
     * @return AdImageURL[]
     */
    public function getAdImageURLData()
    {
        return $this->AdImageURLData;
    }

    /**
     * Sets the AdImageURLData.
     *
     * @param AdImageURL[] $AdImageURLData
     *
     * @return AdImageRequest
     */
    public function setAdImageURLData(array $AdImageURLData)
    {
        $this->AdImageURLData = $AdImageURLData;

        return $this;
    }
}