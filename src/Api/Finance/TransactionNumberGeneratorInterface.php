<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\Finance;

interface TransactionNumberGeneratorInterface
{
    /**
     * Generates the transaction number.
     *
     * The transaction number - `operation_num` parameter for finance methods.
     */
    public function generate(): int;
}
