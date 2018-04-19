<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteAdImagesRequest
{

    protected $SelectionCriteria = null;

    /**
     * Creates a new instance of DeleteAdImagesRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return AdImageHashesCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AdImageHashesCriteria $value
     * @return $this
     */
    public function setSelectionCriteria(AdImageHashesCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }


}

