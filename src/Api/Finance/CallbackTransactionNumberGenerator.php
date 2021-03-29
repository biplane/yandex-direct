<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\Finance;

final class CallbackTransactionNumberGenerator implements TransactionNumberGeneratorInterface
{
    private $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    /**
     * {@inheritDoc}
     */
    public function generate(): int
    {
        return ($this->callback)();
    }
}
