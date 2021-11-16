<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Log\SoapLogger;

use Biplane\YandexDirect\Log\SoapLogger;
use Psr\Log\LoggerInterface;
use Throwable;

use function get_class;

final class ChainLogger implements SoapLogger
{
    /** @var array<SoapLogger> */
    private $loggers;

    /** @var LoggerInterface|null */
    private $errorLogger;

    /**
     * @param array<SoapLogger> $loggers
     */
    public function __construct(array $loggers, ?LoggerInterface $errorLogger = null)
    {
        $this->loggers = $loggers;
        $this->errorLogger = $errorLogger;
    }

    /**
     * {@inheritDoc}
     */
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
                    'logger' => get_class($logger),
                    'exception' => $e,
                ]);
            }
        }
    }
}
