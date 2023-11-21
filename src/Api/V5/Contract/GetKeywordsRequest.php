<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use AutotargetingBrandOptionsFieldEnum;
use AutotargetingCategoriesFieldEnum;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetKeywordsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

    protected $AutotargetingSettingsCategoriesFieldNames = null;

    protected $AutotargetingSettingsBrandOptionsFieldNames = null;

    public function getSelectionCriteria(): KeywordsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(KeywordsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see KeywordFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * @see KeywordFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    public function getAutotargetingSettingsCategoriesFieldNames(): AutotargetingCategoriesFieldEnum
    {
        return $this->AutotargetingSettingsCategoriesFieldNames;
    }

    /**
     * @return $this
     */
    public function setAutotargetingSettingsCategoriesFieldNames(AutotargetingCategoriesFieldEnum $value)
    {
        $this->AutotargetingSettingsCategoriesFieldNames = $value;

        return $this;
    }

    public function getAutotargetingSettingsBrandOptionsFieldNames(): AutotargetingBrandOptionsFieldEnum
    {
        return $this->AutotargetingSettingsBrandOptionsFieldNames;
    }

    /**
     * @return $this
     */
    public function setAutotargetingSettingsBrandOptionsFieldNames(AutotargetingBrandOptionsFieldEnum $value)
    {
        $this->AutotargetingSettingsBrandOptionsFieldNames = $value;

        return $this;
    }
}
