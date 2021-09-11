<?php

namespace Biplane\Tests\YandexDirect\Runner\RetryStrategy;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Runner\RetryStrategy\ExponentialRetryStrategy;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use SoapFault;
use Throwable;

class ExponentialRetryStrategyTest extends TestCase
{
    /**
     * @dataProvider provideExceptions
     */
    public function testCanRetry(Throwable $exception, bool $expected): void
    {
        $strategy = new ExponentialRetryStrategy();

        self::assertSame($expected, $strategy->canRetry($exception));
    }

    public function testComputeDelayWithoutMaxBound(): void
    {
        $strategy = new ExponentialRetryStrategy();

        self::assertSame(8000000, $strategy->getDelay(3, new RuntimeException()));
    }

    public function testComputeDelayWithMaxBound(): void
    {
        $strategy = new ExponentialRetryStrategy(1, 2.0, 5);

        self::assertSame(5000000, $strategy->getDelay(3, new RuntimeException()));
    }

    /**
     * @return iterable<mixed>
     */
    public function provideExceptions(): iterable
    {
        yield [new SoapFault('SOAP-ERROR', 'Parsing WSDL: Couldn\'t load from ...'), true];
        yield [new ApiException('API error', 52, null), true];
        yield [new ApiException('API error', 1, null), false];
    }
}
