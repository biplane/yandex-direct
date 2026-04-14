<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int, AdExtensionSettingItem>
 */
#[AllowDynamicProperties]
class AdExtensionSetting implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AdExtensionSettingItem> */
    protected $AdExtensions;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AdExtensions
     *
     * @return non-empty-list<AdExtensionSettingItem>
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions;
    }

    /**
     * Set AdExtensions
     *
     * @param non-empty-list<AdExtensionSettingItem> $value
     *
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->AdExtensions);
    }

    /**
     * @return ArrayIterator<int, AdExtensionSettingItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdExtensions);
    }
}
