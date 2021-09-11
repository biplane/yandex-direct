<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\Units;
use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Throwable;

use function get_class;
use function method_exists;
use function strrpos;
use function substr;

final class EventEmitter
{
    /** @var EventDispatcherInterface */
    private $dispatcher;

    /** @var User */
    private $user;

    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        $this->dispatcher = $dispatcher;
        $this->user = $user;
    }

    /**
     * @param array<mixed> $arguments
     */
    public function emitBeforeRequestEvent(ClientInterface $service, string $methodName, array $arguments): void
    {
        $this->dispatcher->dispatch(
            new PreCallEvent(self::getMethodRef($service, $methodName), $arguments, $this->user),
            Events::BEFORE_REQUEST
        );
    }

    /**
     * @param array<mixed> $arguments
     * @param mixed        $response
     */
    public function emitAfterRequestEvent(
        ClientInterface $service,
        string $methodName,
        array $arguments,
        $response
    ): void {
        $this->dispatcher->dispatch(
            new PostCallEvent(
                self::getMethodRef($service, $methodName),
                $arguments,
                $this->user,
                $service,
                $response,
                self::getUnits($service)
            ),
            Events::AFTER_REQUEST
        );
    }

    /**
     * @param array<mixed> $arguments
     */
    public function emitFailRequestEvent(
        ClientInterface $service,
        string $methodName,
        array $arguments,
        Throwable $exception
    ): void {
        $this->dispatcher->dispatch(
            new FailCallEvent(
                self::getMethodRef($service, $methodName),
                $arguments,
                $this->user,
                $service,
                $exception,
                self::getUnits($service)
            ),
            Events::FAIL_REQUEST
        );
    }

    private static function getMethodRef(ClientInterface $service, string $methodName): string
    {
        $qualifiedClassName = get_class($service);
        $pos = strrpos($qualifiedClassName, '\\');

        if ($pos !== false) {
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
