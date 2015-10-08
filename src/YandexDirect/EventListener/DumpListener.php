<?php

namespace Biplane\YandexDirect\EventListener;

use Biplane\YandexDirect\Event\BaseAfterCallEvent;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Events;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * DumpListener
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class DumpListener implements EventSubscriberInterface
{
    const LEVEL_FAIL_REQUEST = 1;
    const LEVEL_ALL_REQUEST  = 2;

    private $dir;
    private $level;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            Events::AFTER_REQUEST => array('onSuccess', 256),
            Events::FAIL_REQUEST  => array('onFail', 256),
        );
    }

    /**
     * Constructor.
     *
     * @param string $dir   The directory to save dumps
     * @param int    $level One of constants with prefix LEVEL_
     *
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public function __construct($dir, $level = self::LEVEL_ALL_REQUEST)
    {
        if (!is_dir($dir) && !@mkdir($dir, 0775, true)) {
            throw new \RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }

        if (!is_writable($dir)) {
            throw new \RuntimeException(sprintf('The directory "%s" is not writable.', $dir));
        }

        if (!in_array($level, array(self::LEVEL_ALL_REQUEST, self::LEVEL_FAIL_REQUEST))) {
            throw new \InvalidArgumentException(
                'The level must be one of constants with prefix LEVEL_.'
            );
        }

        $this->dir = $dir;
        $this->level = (int)$level;
    }

    public function onFail(FailCallEvent $event)
    {
        if ($this->level >= self::LEVEL_FAIL_REQUEST) {
            $this->dump($event);
        }
    }

    public function onSuccess(PostCallEvent $event)
    {
        if ($this->level >= self::LEVEL_ALL_REQUEST) {
            $this->dump($event);
        }
    }

    private function dump(BaseAfterCallEvent $event)
    {
        file_put_contents($this->dir . '/' . $event->getRequestId() . '_request', $event->getRequest());
        file_put_contents($this->dir . '/' . $event->getRequestId() . '_response', $event->getResponse());
    }
}
