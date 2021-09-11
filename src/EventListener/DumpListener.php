<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\EventListener;

use Biplane\YandexDirect\Event\BaseAfterCallEvent;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Helper\Dumper;
use InvalidArgumentException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

use function in_array;

class DumpListener implements EventSubscriberInterface
{
    public const LEVEL_FAIL_REQUEST = 1;
    public const LEVEL_ALL_REQUEST = 2;

    /** @var Dumper */
    private $dumper;

    /** @var int */
    private $level;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            Events::AFTER_REQUEST => ['onSuccess', 256],
            Events::FAIL_REQUEST => ['onFail', 256],
        ];
    }

    /**
     * @param Dumper $dumper The helper
     * @param int    $level  One of constants with prefix LEVEL_
     *
     * @throws InvalidArgumentException
     */
    public function __construct(Dumper $dumper, int $level = self::LEVEL_ALL_REQUEST)
    {
        if (! in_array($level, [self::LEVEL_ALL_REQUEST, self::LEVEL_FAIL_REQUEST])) {
            throw new InvalidArgumentException(
                'The level must be one of constants with prefix LEVEL_.'
            );
        }

        $this->dumper = $dumper;
        $this->level = $level;
    }

    /**
     * Handle the event.
     */
    public function onFail(FailCallEvent $event): void
    {
        if ($this->level < self::LEVEL_FAIL_REQUEST) {
            return;
        }

        $this->dump($event);
    }

    /**
     * Handle the event.
     */
    public function onSuccess(PostCallEvent $event): void
    {
        if ($this->level < self::LEVEL_ALL_REQUEST) {
            return;
        }

        $this->dump($event);
    }

    private function dump(BaseAfterCallEvent $event): void
    {
        $requestId = $event->getRequestId();

        if (empty($requestId)) {
            return;
        }

        $this->dumper->dump($requestId, $event->getRequest(), $event->getResponse());
    }
}
