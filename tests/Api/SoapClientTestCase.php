<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Config;
use Closure;
use PHPUnit\Framework\TestCase;
use VCR\Event\AfterHttpRequestEvent;
use VCR\Event\BeforeHttpRequestEvent;
use VCR\VCR;
use VCR\VCREvents;

use function count;
use function getenv;
use function sprintf;

use const SOAP_1_1;
use const SOAP_SINGLE_ELEMENT_ARRAYS;
use const WSDL_CACHE_NONE;

abstract class SoapClientTestCase extends TestCase
{
    /** @var array<string, Closure> */
    private $listeners = [];

    protected function tearDown(): void
    {
        VCR::turnOff();

        if (count($this->listeners) === 0) {
            return;
        }

        $dispatcher = VCR::getEventDispatcher();

        foreach ($this->listeners as $eventName => $listener) {
            $dispatcher->removeListener($eventName, $listener);
        }

        $this->listeners = [];
    }

    protected function configureVCR(Config $config): void
    {
        $this->addListener(
            VCREvents::VCR_BEFORE_HTTP_REQUEST,
            static function (BeforeHttpRequestEvent $event) use ($config): void {
                $request = $event->getRequest();

                $request->setHeader('Authorization', sprintf('Bearer %s', $config->getAccessToken()));

                $clientLogin = $config->getClientLogin();

                if ($clientLogin !== null) {
                    $request->setHeader('Client-Login', $clientLogin);
                }

                if (! $config->useOperatorUnits()) {
                    return;
                }

                $request->setHeader('Use-Operator-Units', 'true');
            }
        );
        $this->addListener(
            VCREvents::VCR_AFTER_HTTP_REQUEST,
            static function (AfterHttpRequestEvent $event): void {
                $event->getRequest()->removeHeader('Authorization');
            }
        );
    }

    protected function createConfig(): Config
    {
        $accessToken = getenv('DIRECT_TOKEN');

        if ($accessToken === false) {
            $accessToken = 'fake';
        }

        $config = new Config([
            'access_token' => $accessToken,
            'client_login' => getenv('DIRECT_CLIENT_LOGIN') ?: null,
        ]);

        $this->configureVCR($config);

        return $config;
    }

    /**
     * @return array<string, mixed>
     */
    protected function getSoapOptions(): array
    {
        return [
            'soap_version' => SOAP_1_1,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'trace' => true,
            'exceptions' => true,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ];
    }

    private function addListener(string $eventName, Closure $listener): void
    {
        $dispatcher = VCR::getEventDispatcher();

        if (isset($this->listeners[$eventName])) {
            $dispatcher->removeListener($eventName, $this->listeners[$eventName]);
        }

        $dispatcher->addListener($eventName, $listener);
        $this->listeners[$eventName] = $listener;
    }
}
