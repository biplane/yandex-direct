<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Report;

use InvalidArgumentException;

use function implode;
use function in_array;
use function sprintf;

class ReportRequest
{
    public const PROCESSING_MODE_AUTO = 'auto';
    public const PROCESSING_MODE_ONLINE = 'online';
    public const PROCESSING_MODE_OFFLINE = 'offline';

    public const RETURN_MONEY_FORMAT_MICROS = 1;
    public const RETURN_MONEY_FORMAT_FLOAT = 2;

    /** @var string */
    private $processingMode = self::PROCESSING_MODE_AUTO;

    /** @var int */
    private $returnMoneyFormat = self::RETURN_MONEY_FORMAT_MICROS;

    /** @var bool */
    private $skipColumnHeader = false;

    /** @var bool */
    private $skipReportHeader = false;

    /** @var bool */
    private $skipReportSummary = false;

    /** @var string */
    private $definition = '';

    public function getProcessingMode(): string
    {
        return $this->processingMode;
    }

    /**
     * @return $this
     */
    public function setProcessingMode(string $mode)
    {
        $allowedModes = [
            self::PROCESSING_MODE_AUTO,
            self::PROCESSING_MODE_ONLINE,
            self::PROCESSING_MODE_OFFLINE,
        ];

        if (! in_array($mode, $allowedModes, true)) {
            throw new InvalidArgumentException(sprintf(
                'The mode must be one of the following values: %s',
                implode(', ', $allowedModes)
            ));
        }

        $this->processingMode = $mode;

        return $this;
    }

    public function getReturnMoneyFormat(): int
    {
        return $this->returnMoneyFormat;
    }

    /**
     * @return $this
     */
    public function returnMoneyInMicros()
    {
        $this->returnMoneyFormat = self::RETURN_MONEY_FORMAT_MICROS;

        return $this;
    }

    /**
     * @return $this
     */
    public function returnMoneyAsFloat()
    {
        $this->returnMoneyFormat = self::RETURN_MONEY_FORMAT_FLOAT;

        return $this;
    }

    public function isSkipColumnHeader(): bool
    {
        return $this->skipColumnHeader;
    }

    /**
     * @return $this
     */
    public function skipColumnHeader()
    {
        $this->skipColumnHeader = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function includeColumnHeader()
    {
        $this->skipColumnHeader = false;

        return $this;
    }

    public function isSkipReportHeader(): bool
    {
        return $this->skipReportHeader;
    }

    /**
     * @return $this
     */
    public function skipReportHeader()
    {
        $this->skipReportHeader = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function includeReportHeader()
    {
        $this->skipReportHeader = false;

        return $this;
    }

    public function isSkipReportSummary(): bool
    {
        return $this->skipReportSummary;
    }

    /**
     * @return $this
     */
    public function skipReportSummary()
    {
        $this->skipReportSummary = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function includeReportSummary()
    {
        $this->skipReportSummary = false;

        return $this;
    }

    /**
     * Gets the report definition.
     */
    public function getDefinition(): string
    {
        return $this->definition;
    }

    /**
     * Sets the report definition.
     *
     * @param ReportDefinitionBuilder|string $reportDefinition The report definition, XML document
     *
     * @return $this
     */
    public function setDefinition($reportDefinition)
    {
        if ($reportDefinition instanceof ReportDefinitionBuilder) {
            $reportDefinition = $reportDefinition->build();
        }

        $this->definition = $reportDefinition;

        return $this;
    }
}
