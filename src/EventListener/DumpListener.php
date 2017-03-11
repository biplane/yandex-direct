<?php

namespace Biplane\YandexDirect\EventListener;

use Biplane\YandexDirect\Event\BaseAfterCallEvent;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Helper\Dumper;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * DumpListener.
 *
 * @author Denis Vasilev
 */
class DumpListener implements EventSubscriberInterface
{
    const LEVEL_FAIL_REQUEST = 1;
    const LEVEL_ALL_REQUEST = 2;

    private $dumper;
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
     * Constructor.
     *
     * @param Dumper $dumper The helper
     * @param int    $level  One of constants with prefix LEVEL_
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(Dumper $dumper, $level = self::LEVEL_ALL_REQUEST)
    {
        if (!in_array($level, [self::LEVEL_ALL_REQUEST, self::LEVEL_FAIL_REQUEST])) {
            throw new \InvalidArgumentException(
                'The level must be one of constants with prefix LEVEL_.'
            );
        }

        $this->dumper = $dumper;
        $this->level = (int)$level;
    }

    /**
     * Handle the event.
     *
     * @param FailCallEvent $event
     */
    public function onFail(FailCallEvent $event)
    {
        if ($this->level >= self::LEVEL_FAIL_REQUEST) {
            $this->dump($event);
        }
    }

    /**
     * Handle the event.
     *
     * @param PostCallEvent $event
     */
    public function onSuccess(PostCallEvent $event)
    {
        if ($this->level >= self::LEVEL_ALL_REQUEST) {
            $this->dump($event);
        }
    }

    private function dump(BaseAfterCallEvent $event)
    {
        $requestId = $event->getRequestId();

        if (!empty($requestId)) {
            $this->dumper->dump($requestId, $event->getRequest(), $event->getResponse());
        }
    }
}
