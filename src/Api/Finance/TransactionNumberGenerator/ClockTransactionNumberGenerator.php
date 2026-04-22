<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;

use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;
use Override;

use function time;

final class ClockTransactionNumberGenerator implements TransactionNumberGenerator
{
    #[Override]
    public function generate(): int
    {
        return time();
    }
}
