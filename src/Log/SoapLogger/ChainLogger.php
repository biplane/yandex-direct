<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Log\SoapLogger;

use Biplane\YandexDirect\Log\SoapLogger;
use Override;
use Psr\Log\LoggerInterface;
use Throwable;

final class ChainLogger implements SoapLogger
{
    /** @param array<SoapLogger> $loggers */
    public function __construct(private array $loggers, private ?LoggerInterface $errorLogger = null)
    {
    }

    /**
     * {@inheritDoc}
     */
    #[Override]
    public function log(array $context): void
    {
        foreach ($this->loggers as $logger) {
            try {
                $logger->log($context);
            } catch (Throwable $e) {
                if ($this->errorLogger === null) {
                    continue;
                }

                $this->errorLogger->error('Failed to write to log: ' . $e->getMessage(), [
                    'logger' => $logger::class,
                    'exception' => $e,
                ]);
            }
        }
    }
}
