<?php

namespace Biplane\Tests;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use VCR\Event\AfterHttpRequestEvent;
use VCR\Event\BeforeHttpRequestEvent;
use VCR\VCREvents;

class FixHeadersListener implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            VCREvents::VCR_BEFORE_HTTP_REQUEST => 'onBeforeHttpRequestEvent',
            VCREvents::VCR_AFTER_HTTP_REQUEST => 'onAfterHttpRequestEvent',
        ];
    }

    public function onBeforeHttpRequestEvent(BeforeHttpRequestEvent $event)
    {
        $accessToken = getenv('DIRECT_TOKEN');
        $clientLogin = getenv('DIRECT_CLIENT_LOGIN');

        if (false === $accessToken) {
            throw new \RuntimeException('Environment variable DIRECT_TOKEN not found');
        }

        $event->getRequest()->setHeader('Authorization', sprintf('Bearer %s', $accessToken));

        if (false !== $clientLogin) {
            $event->getRequest()->setHeader('Client-Login', $clientLogin);
        }
    }

    public function onAfterHttpRequestEvent(AfterHttpRequestEvent $event)
    {
        $event->getRequest()->removeHeader('Authorization');
        $event->getRequest()->removeHeader('Client-Login');
    }
}
