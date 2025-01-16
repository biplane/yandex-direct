<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetBusinessesResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Businesses = null;

    /**
     * @return BusinessGetItem[]|null
     */
    public function getBusinesses(): ?array
    {
        return $this->Businesses ?? null;
    }

    /**
     * @param BusinessGetItem[]|null $value
     *
     * @return $this
     */
    public function setBusinesses(?array $value = null)
    {
        $this->Businesses = $value;

        return $this;
    }
}
