<?php

namespace Biplane\YandexDirect\EventListener;

use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @deprecated
 */
class LoggerListener implements EventSubscriberInterface
{
    private $logger;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            Events::FAIL_REQUEST => 'onException',
        ];
    }

    /**
     * Constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Logs the thrown exception.
     *
     * @param FailCallEvent $event
     */
    public function onException(FailCallEvent $event)
    {
        $exception = $event->getException();
        $logLevel = $this->getLogLevel($exception);

        if ($exception instanceof NetworkException) {
            $this->logger->log($logLevel, 'Call {method} completed with network error: {error}', [
                'method' => $event->getMethodRef(),
                'login' => $event->getUser()->getLogin(),
                'request_id' => $event->getRequestId(),
                'error' => $exception->getMessage(),
            ]);
        } else {
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
    }

    protected function getLogLevel(\Exception $exception)
    {
        if ($exception instanceof NetworkException) {
            return LogLevel::NOTICE;
        }

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
