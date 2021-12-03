<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;

use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;

final class CallbackTransactionNumberGenerator implements TransactionNumberGenerator
{
    /** @var callable(): int */
    private $callback;

    /**
     * @param callable(): int $callback
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    public function generate(): int
    {
        return ($this->callback)();
    }
}
