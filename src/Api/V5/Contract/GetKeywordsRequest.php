<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetKeywordsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omitted.
//    protected $AutotargetingSettingsCategoriesFieldNames = null;

//    Can be omitted.
//    protected $AutotargetingSettingsBrandOptionsFieldNames = null;

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

    /**
     * @see AutotargetingCategoriesFieldEnum
     *
     * @return string[]|null
     */
    public function getAutotargetingSettingsCategoriesFieldNames(): ?array
    {
        return $this->AutotargetingSettingsCategoriesFieldNames ?? null;
    }

    /**
     * @see AutotargetingCategoriesFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAutotargetingSettingsCategoriesFieldNames(?array $value = null)
    {
        $this->AutotargetingSettingsCategoriesFieldNames = $value;

        return $this;
    }

    /**
     * @see AutotargetingBrandOptionsFieldEnum
     *
     * @return string[]|null
     */
    public function getAutotargetingSettingsBrandOptionsFieldNames(): ?array
    {
        return $this->AutotargetingSettingsBrandOptionsFieldNames ?? null;
    }

    /**
     * @see AutotargetingBrandOptionsFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAutotargetingSettingsBrandOptionsFieldNames(?array $value = null)
    {
        $this->AutotargetingSettingsBrandOptionsFieldNames = $value;

        return $this;
    }
}
