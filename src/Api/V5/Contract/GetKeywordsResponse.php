<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetKeywordsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Keywords = null;

    /**
     * @return KeywordGetItem[]|null
     */
    public function getKeywords(): ?array
    {
        return $this->Keywords ?? null;
    }

    /**
     * @param KeywordGetItem[]|null $value
     *
     * @return $this
     */
    public function setKeywords(?array $value = null)
    {
        $this->Keywords = $value;

        return $this;
    }
}
