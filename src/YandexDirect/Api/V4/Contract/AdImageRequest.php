<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageRequest
{

    protected $Action = null;

    protected $SelectionCriteria = null;

    protected $AdImageRawData = null;

    protected $AdImageURLData = null;

    /**
     * Creates a new instance of AdImageRequest.
     *
     * @return AdImageRequest
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
     * Gets SelectionCriteria.
     *
     * @return AdImageSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AdImageSelectionCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(AdImageSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets AdImageRawData.
     *
     * @return AdImageRaw[]|null
     */
    public function getAdImageRawData()
    {
        return $this->AdImageRawData;
    }

    /**
     * Sets AdImageRawData.
     *
     * @param array|null $value
     * @return $this
     */
    public function setAdImageRawData(array $value = null)
    {
        $this->AdImageRawData = $value;

        return $this;
    }

    /**
     * Gets AdImageURLData.
     *
     * @return AdImageURL[]|null
     */
    public function getAdImageURLData()
    {
        return $this->AdImageURLData;
    }

    /**
     * Sets AdImageURLData.
     *
     * @param array|null $value
     * @return $this
     */
    public function setAdImageURLData(array $value = null)
    {
        $this->AdImageURLData = $value;

        return $this;
    }


}

