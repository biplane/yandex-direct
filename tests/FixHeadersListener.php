<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use RuntimeException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use VCR\Event\AfterHttpRequestEvent;
use VCR\Event\BeforeHttpRequestEvent;
use VCR\VCREvents;

use function getenv;
use function sprintf;

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

    public function onBeforeHttpRequestEvent(BeforeHttpRequestEvent $event): void
    {
        $accessToken = getenv('DIRECT_TOKEN');
        $clientLogin = getenv('DIRECT_CLIENT_LOGIN');

        if ($accessToken === false) {
            throw new RuntimeException('Environment variable DIRECT_TOKEN not found');
        }

        $event->getRequest()->setHeader('Authorization', sprintf('Bearer %s', $accessToken));

        if ($clientLogin === false) {
            return;
        }

        $event->getRequest()->setHeader('Client-Login', $clientLogin);
    }

    public function onAfterHttpRequestEvent(AfterHttpRequestEvent $event): void
    {
        $event->getRequest()->removeHeader('Authorization');
        $event->getRequest()->removeHeader('Client-Login');
    }
}
