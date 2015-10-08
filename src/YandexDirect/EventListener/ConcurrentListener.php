<?php

namespace Biplane\YandexDirect\EventListener;

use Biplane\SysV\Factory;
use Biplane\SysV\Semaphore;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * This listener restricts concurrent connections to API.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class ConcurrentListener implements EventSubscriberInterface
{
    const CONNECTION_MAX = 12;

    private $factory;
    private $limit;
    private $semaphores;

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            Events::BEFORE_REQUEST => 'acquireLock',
            Events::AFTER_REQUEST  => array('releaseLock', 1024),
            Events::FAIL_REQUEST   => array('releaseLock', 1024),
        );
    }

    /**
     * Constructor.
     *
     * @param Factory $factory The IPC factory
     * @param int     $limit   The max of concurrent connections
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(Factory $factory, $limit = self::CONNECTION_MAX)
    {
        $this->factory = $factory;

        if ($limit < 1 || $limit > self::CONNECTION_MAX) {
            throw new \InvalidArgumentException(sprintf(
                'Connections limit must be between 1 and %d.',
                self::CONNECTION_MAX
            ));
        }

        $this->limit = (int)$limit;
        $this->semaphores = array();
    }

    /**
     * Acquires the locking before calling API's method.
     *
     * @param PreCallEvent $event The event
     */
    public function acquireLock(PreCallEvent $event)
    {
        $this->getSemaphore($event->getUser())->acquire();
    }

    /**
     * Releases the locking after calling API's method.
     *
     * @param PreCallEvent $event The event
     */
    public function releaseLock(PreCallEvent $event)
    {
        $this->getSemaphore($event->getUser())->release();
    }

    /**
     * Gets the semaphore for given profile.
     *
     * @param User $user The profile
     *
     * @return Semaphore
     */
    private function getSemaphore(User $user)
    {
        $key = 'api_' . $user->getHashCode();

        if (!isset($this->semaphores[$key])) {
            $this->semaphores[$key] = $this->factory->createSemaphore($key, $this->limit);
        }

        return $this->semaphores[$key];
    }
}
