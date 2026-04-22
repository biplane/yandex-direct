<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class WordstatReportStatusInfo
{
    /** @var int */
    protected $ReportID;

    /** @var string */
    protected $StatusReport;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get ReportID
     */
    public function getReportID(): int
    {
        return $this->ReportID;
    }

    /**
     * Set ReportID
     *
     * @return $this
     */
    public function setReportID(int $value)
    {
        $this->ReportID = $value;

        return $this;
    }

    /**
     * Get StatusReport
     */
    public function getStatusReport(): string
    {
        return $this->StatusReport;
    }

    /**
     * Set StatusReport
     *
     * @return $this
     */
    public function setStatusReport(string $value)
    {
        $this->StatusReport = $value;

        return $this;
    }
}
