<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Log\SoapLogger;

use Biplane\YandexDirect\Log\SoapLogger;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

final class PsrLogger implements SoapLogger
{
    private const MESSAGE = 'service={service} method={method} requestId={request_id} fault={fault}';

    /** @var LoggerInterface */
    private $logger;

    /** @var string */
    private $errorLogLevel;

    /**
     * @psalm-param LogLevel::* $errorLogLevel
     */
    public function __construct(LoggerInterface $logger, string $errorLogLevel = LogLevel::ERROR)
    {
        $this->logger = $logger;
        $this->errorLogLevel = $errorLogLevel;
    }

    /**
     * {@inheritDoc}
     */
    public function log(array $context): void
    {
        $this->logger->log($context['failed'] ? $this->errorLogLevel : LogLevel::DEBUG, self::MESSAGE, $context);
    }
}
