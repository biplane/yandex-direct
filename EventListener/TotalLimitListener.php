<?php

namespace Biplane\YandexDirectBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Biplane\SystemV\Factory;
use Biplane\SystemV\Semaphore;
use Biplane\YandexDirectBundle\Events;
use Biplane\YandexDirectBundle\Event\PreCallEvent;

/**
 * Realize total limitation of Yandex Direct API.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class TotalLimitListener implements EventSubscriberInterface
{
    const MAX_CONNECTIONS_WITH_YANDEX = 12;
    const SEMAPHORE_ID_PREFIX = 'total_limit_yandex_';

    private $factory;
    private $limit;
    private $semaphores;

    /**
     * Constructor.
     *
     * @param Factory $factory The factory
     * @param int     $limit   The synchronous connections limit
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(Factory $factory, $limit = 1)
    {
        $this->factory = $factory;

        if ($limit < 1 || $limit > self::MAX_CONNECTIONS_WITH_YANDEX) {
            throw new \InvalidArgumentException(sprintf(
                'Connections limit must be between 1 and %d.',
                self::MAX_CONNECTIONS_WITH_YANDEX
            ));
        }

        $this->limit = (int)$limit;
        $this->semaphores = array();
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            Events::BEFORE_REQUEST => 'acquireLock',
            Events::AFTER_REQUEST  => 'releaseLock',
            Events::FAIL_REQUEST   => 'releaseLock',
        );
    }

    /**
     * Acquires the locking before calling the API.
     *
     * @param PreCallEvent $event The event
     */
    public function acquireLock(PreCallEvent $event)
    {
        $this->getSemaphore($event->getConfiguration()->getHashCode())->acquire();
    }

    /**
     * Releases the locking after calling the API.
     *
     * @param PreCallEvent $event The event
     */
    public function releaseLock(PreCallEvent $event)
    {
        $this->getSemaphore($event->getConfiguration()->getHashCode())->release();
    }

    /**
     * Gets the semaphore for given profile.
     *
     * @param string $profile A profile name
     *
     * @return Semaphore
     */
    private function getSemaphore($profile)
    {
        $id = $this->getSemaphoreId($profile);

        if (!isset($this->semaphores[$id])) {
            $this->semaphores[$id] = $this->factory->createSemaphore($id, $this->limit);
        }

        return $this->semaphores[$id];
    }

    /**
     * Gets a semaphore id
     *
     * @param string $profile A profile name
     *
     * @return string
     */
    private function getSemaphoreId($profile)
    {
        return self::SEMAPHORE_ID_PREFIX . $profile;
    }
}
