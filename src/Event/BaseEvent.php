<?php

namespace Biplane\YandexDirect\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\Event as ContractEvent;

if (class_exists(ContractEvent::class)) {
    abstract class BaseEvent extends ContractEvent
    {
    }
} else {
    abstract class BaseEvent extends Event
    {
    }
}
