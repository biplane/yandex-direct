<?php

namespace Biplane\YandexDirect\Api\V5\Report;

/**
 * ReportOptions
 *
 * @author Denis Vasilev
 */
class ReportOptions
{
    const PROCESSING_MODE_AUTO = 'auto';
    const PROCESSING_MODE_ONLINE = 'online';
    const PROCESSING_MODE_OFFLINE = 'offline';

    const RETURN_MONEY_FORMAT_MICROS = 1;
    const RETURN_MONEY_FORMAT_FLOAT = 2;

    private $processingMode = self::PROCESSING_MODE_AUTO;
    private $returnMoneyFormat = self::RETURN_MONEY_FORMAT_MICROS;
    private $skipColumnHeader = false;
    private $skipReportHeader = false;
    private $skipReportSummary = false;

    public function getProcessingMode()
    {
        return $this->processingMode;
    }

    public function setProcessingMode($mode)
    {
        $allowedModes = [
            self::PROCESSING_MODE_AUTO,
            self::PROCESSING_MODE_ONLINE,
            self::PROCESSING_MODE_OFFLINE
        ];

        if (!in_array($mode, $allowedModes)) {
            throw new \InvalidArgumentException(sprintf(
                'The mode must be one of the following values: %s',
                implode(', ', $allowedModes)
            ));
        }

        $this->processingMode = $mode;

        return $this;
    }

    public function getReturnMoneyFormat()
    {
        return $this->returnMoneyFormat;
    }

    public function returnMoneyInMicros()
    {
        $this->returnMoneyFormat = self::RETURN_MONEY_FORMAT_MICROS;

        return $this;
    }

    public function returnMoneyAsFloat()
    {
        $this->returnMoneyFormat = self::RETURN_MONEY_FORMAT_FLOAT;

        return $this;
    }

    public function isSkipColumnHeader()
    {
        return $this->skipColumnHeader;
    }

    public function skipColumnHeader()
    {
        $this->skipColumnHeader = true;

        return $this;
    }

    public function includeColumnHeader()
    {
        $this->skipColumnHeader = false;

        return $this;
    }

    public function isSkipReportHeader()
    {
        return $this->skipReportHeader;
    }

    public function skipReportHeader()
    {
        $this->skipReportHeader = true;

        return $this;
    }

    public function includeReportHeader()
    {
        $this->skipReportHeader = false;

        return $this;
    }

    public function isSkipReportSummary()
    {
        return $this->skipReportSummary;
    }

    public function skipReportSummary()
    {
        $this->skipReportSummary = true;

        return $this;
    }

    public function includeReportSummary()
    {
        $this->skipReportSummary = false;

        return $this;
    }
}
