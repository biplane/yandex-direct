<?php

namespace Biplane\YandexDirect\EventDispatcher;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface as ContractEventDispatcher;

class SymfonyEventDispatcherAdapter
{
    private $dispatcher;
    private $contractImplemented;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
        $this->contractImplemented = interface_exists(ContractEventDispatcher::class)
            && $dispatcher instanceof ContractEventDispatcher;
    }

    /**
     * @param string $eventName
     * @param object $event
     *
     * @return object
     */
    public function dispatch($eventName, $event)
    {
        if ($this->contractImplemented) {
            return $this->dispatcher->dispatch($event, $eventName);
        }

        return $this->dispatcher->dispatch($eventName, $event);
    }
}
