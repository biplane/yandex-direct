<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Serializer;

use Biplane\YandexDirect\Api\V5\Reports\ApiError;
use Biplane\YandexDirect\Api\V5\Reports\ReportDefinition;

interface ReportSerializerInterface
{
    public function serializeReportDefinition(ReportDefinition $reportDefinition): string;

    public function deserializeApiError(string $content): ?ApiError;
}
