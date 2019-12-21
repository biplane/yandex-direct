<?php

namespace Biplane\Tests\YandexDirect\Helper;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\Helper\Invoker;
use PHPUnit\Framework\TestCase;

class InvokerTest extends TestCase
{
    public function testInvokeWithoutErrors()
    {
        $invoker = new Invoker();
        $attempts = 0;

        $result = $invoker(function () use (&$attempts) {
            ++$attempts;

            return 'callback result';
        });

        self::assertEquals('callback result', $result);
        self::assertSame(1, $attempts);
    }

    public function testRetryInvokeWhenErrorIsTemporarily()
    {
        $invoker = new Invoker(3);
        $attempts = 0;

        $result = $invoker(function () use (&$attempts) {
            ++$attempts;

            if ($attempts === 1) {
                throw new ApiException(
                    'Service:method',
                    'Temporarily error.',
                    ApiException::TEMPORARILY_UNAVAILABLE
                );
            }

            return 'callback result';
        });

        self::assertEquals('callback result', $result);
        self::assertSame(2, $attempts);
    }

    public function testRetryInvokeWhenNetworkErrorIsTemporarily()
    {
        $invoker = new Invoker(3);
        $attempts = 0;

        $result = $invoker(function () use (&$attempts) {
            ++$attempts;

            if ($attempts === 1) {
                throw new NetworkException('Internal server error.', 500);
            }

            return 'callback result';
        });

        self::assertEquals('callback result', $result);
        self::assertSame(2, $attempts);
    }

    public function testThrowExceptionWhenMaxAttemptsIsReached()
    {
        $invoker = new Invoker();

        $this->expectException(NetworkException::class);

        $invoker(function () {
            throw new NetworkException('Internal server error.', 500);
        });
    }

    public function testThrowExceptionWhenRetryIsNotAllowed()
    {
        $invoker = new Invoker();

        $this->expectException(ApiException::class);

        $invoker(function () {
            throw new ApiException(
                'Service:method',
                'Bad request.',
                ApiException::BAD_REQUEST
            );
        });
    }
}
