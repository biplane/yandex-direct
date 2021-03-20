<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\Units;
use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

final class EventEmitter
{
    private $dispatcher;
    private $user;

    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        $this->dispatcher = $dispatcher;
        $this->user = $user;
    }

    public function emitBeforeRequestEvent(ClientInterface $service, string $methodName, array $arguments): void
    {
        $this->dispatcher->dispatch(
            Events::BEFORE_REQUEST,
            new PreCallEvent(self::getMethodRef($service, $methodName), $arguments, $this->user)
        );
    }

    /**
     * @param array<mixed> $arguments
     * @param mixed $response
     */
    public function emitAfterRequestEvent(
        ClientInterface $service,
        string $methodName,
        array $arguments,
        $response
    ): void {
        $this->dispatcher->dispatch(
            Events::AFTER_REQUEST,
            new PostCallEvent(
                self::getMethodRef($service, $methodName),
                $arguments,
                $this->user,
                $service,
                $response,
                self::getUnits($service)
            )
        );
    }

    /**
     * @param array<mixed> $arguments
     */
    public function emitFailRequestEvent(
        ClientInterface $service,
        string $methodName,
        array $arguments,
        \Throwable $exception
    ): void {
        $this->dispatcher->dispatch(
            Events::FAIL_REQUEST,
            new FailCallEvent(
                self::getMethodRef($service, $methodName),
                $arguments,
                $this->user,
                $service,
                $exception,
                self::getUnits($service)
            )
        );
    }

    private static function getMethodRef(ClientInterface $service, string $methodName): string
    {
        $qualifiedClassName = get_class($service);

        if (false !== $pos = strrpos($qualifiedClassName, '\\')) {
            return substr($qualifiedClassName, $pos + 1) . ':' . $methodName;
        }

        return $qualifiedClassName . ':' . $methodName;
    }

    private static function getUnits(ClientInterface $service): ?Units
    {
        if (method_exists($service, 'getUnits')) {
            return $service->getUnits();
        }

        return null;
    }
}
