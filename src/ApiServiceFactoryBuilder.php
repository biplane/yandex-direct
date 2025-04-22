<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;
use Biplane\YandexDirect\Config\SoapOptions;
use Biplane\YandexDirect\Log\SoapLogContextFactory;
use Biplane\YandexDirect\Log\SoapLogger;
use Biplane\YandexDirect\Runner\Runner;

final class ApiServiceFactoryBuilder
{
    /** @var int|null */
    private $soapCallTimeout;

    /** @var TransactionNumberGenerator|null */
    private $transactionNumberGenerator;

    /** @var Runner|null */
    private $runner;

    /** @var SoapLogContextFactory|null */
    private $logContextFactory;

    /** @var SoapLogger|null */
    private $logger;

    /** @var SoapOptions|null */
    private $soapOptions;

    public static function create(): self
    {
        return new self();
    }

    public function setRunner(Runner $runner): self
    {
        $this->runner = $runner;

        return $this;
    }

    public function setTransactionNumberGenerator(TransactionNumberGenerator $numberGenerator): self
    {
        $this->transactionNumberGenerator = $numberGenerator;

        return $this;
    }

    /**
     * @psalm-param positive-int $timeout
     */
    public function setSoapCallTimeout(int $timeout): self
    {
        $this->soapCallTimeout = $timeout;

        return $this;
    }

    public function setSoapOptions(SoapOptions $options): self
    {
        $this->soapOptions = $options;

        return $this;
    }

    public function setLogger(SoapLogger $logger): self
    {
        $this->logger = $logger;

        return $this;
    }

    public function setLogContextFactory(SoapLogContextFactory $contextFactory): self
    {
        $this->logContextFactory = $contextFactory;

        return $this;
    }

    public function getFactory(): ApiServiceFactory
    {
        return new ApiServiceFactory(
            $this->runner,
            $this->transactionNumberGenerator,
            $this->soapCallTimeout,
            $this->logger,
            $this->logContextFactory,
            $this->soapOptions
        );
    }
}
