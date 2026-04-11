<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TitleGetItem extends ExtensionModeration
{
    protected $Title = null;

    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }
}
