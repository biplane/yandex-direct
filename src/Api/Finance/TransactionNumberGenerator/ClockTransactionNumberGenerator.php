<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;

use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;

use function time;

final class ClockTransactionNumberGenerator implements TransactionNumberGenerator
{
    public function generate(): int
    {
        return time();
    }
}
