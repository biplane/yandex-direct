<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\EventListener;

use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\ApiException;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Throwable;

use function get_class;
use function in_array;
use function sprintf;

/**
 * @deprecated Use SoapLogger instead.
 */
class LoggerListener implements EventSubscriberInterface
{
    /** @var LoggerInterface */
    private $logger;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [Events::FAIL_REQUEST => 'onException'];
    }

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Logs the thrown exception.
     */
    public function onException(FailCallEvent $event): void
    {
        $exception = $event->getException();
        $logLevel = $this->getLogLevel($exception);

        $message = sprintf(
            'Call {method} completed with exception %s: %s',
            get_class($exception),
            $exception->getMessage()
        );
        $this->logger->log($logLevel, $message, [
            'method' => $event->getMethodRef(),
            'request_id' => $event->getRequestId(),
            'login' => $event->getUser()->getLogin(),
            'code' => $exception->getCode(),
            'exception' => $exception,
        ]);
    }

    protected function getLogLevel(Throwable $exception): string
    {
        if ($exception instanceof ApiException) {
            $temporaryErrors = [
                52,
                1000,
                1001,
                1002,
            ];

            if (in_array($exception->getCode(), $temporaryErrors, true)) {
                return LogLevel::WARNING;
            }
        }

        return LogLevel::CRITICAL;
    }
}
