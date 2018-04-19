<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdImagesResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $AdImages = null;

    /**
     * Creates a new instance of GetAdImagesResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdImages.
     *
     * @return AdImageGetItem[]|null
     */
    public function getAdImages()
    {
        return isset($this->AdImages) ? $this->AdImages : null;
    }

    /**
     * Sets AdImages.
     *
     * @param AdImageGetItem[]|null $value
     * @return $this
     */
    public function setAdImages(array $value = null)
    {
        $this->AdImages = $value;

        return $this;
    }


}

