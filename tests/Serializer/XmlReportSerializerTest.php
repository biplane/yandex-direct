<?php

declare(strict_types=1);

namespace Biplane\Tests\Serializer;

use Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum;
use Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum;
use Biplane\YandexDirect\Api\V5\Reports\DateRangeTypeEnum;
use Biplane\YandexDirect\Api\V5\Reports\FieldEnum;
use Biplane\YandexDirect\Api\V5\Reports\FilterItem;
use Biplane\YandexDirect\Api\V5\Reports\FilterOperatorEnum;
use Biplane\YandexDirect\Api\V5\Reports\OrderBy;
use Biplane\YandexDirect\Api\V5\Reports\Page;
use Biplane\YandexDirect\Api\V5\Reports\ReportDefinition;
use Biplane\YandexDirect\Api\V5\Reports\ReportTypeEnum;
use Biplane\YandexDirect\Api\V5\Reports\SelectionCriteria;
use Biplane\YandexDirect\Serializer\XmlReportSerializer;
use DOMDocument;
use LibXMLError;
use PHPUnit\Framework\TestCase;

use function array_map;
use function libxml_clear_errors;
use function libxml_get_errors;
use function libxml_use_internal_errors;

final class XmlReportSerializerTest extends TestCase
{
    private const SCHEMA_URI = 'https://api.direct.yandex.com/v5/reports.xsd';

    public function testSerializeReportDefinitionWhenDefinedOnlyRequiredProperties(): void
    {
        $reportDefinition = ReportDefinition::create()
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::CAMPAIGN_PERFORMANCE_REPORT)
            ->setFieldNames([
                FieldEnum::DATE,
                FieldEnum::CAMPAIGN_ID,
                FieldEnum::IMPRESSIONS,
                FieldEnum::CLICKS,
                FieldEnum::COST,
            ])
            ->setDateRangeType(DateRangeTypeEnum::AUTO)
            ->setIncludeVAT(true);

        $xml = (new XmlReportSerializer())->serializeReportDefinition($reportDefinition);

        $expectedXml = <<<'XML'
<?xml version="1.0"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
  <SelectionCriteria/>
  <FieldNames>Date</FieldNames>
  <FieldNames>CampaignId</FieldNames>
  <FieldNames>Impressions</FieldNames>
  <FieldNames>Clicks</FieldNames>
  <FieldNames>Cost</FieldNames>
  <ReportName>foo</ReportName>
  <ReportType>CAMPAIGN_PERFORMANCE_REPORT</ReportType>
  <DateRangeType>AUTO</DateRangeType>
  <Format>TSV</Format>
  <IncludeVAT>YES</IncludeVAT>
</ReportDefinition>
XML;
        self::assertXmlStringEqualsXmlString($expectedXml, $xml);
        self::assertXmlIsValid($xml);
    }

    public function testSerializeFullReportDefinition(): void
    {
        $selectionCriteria = SelectionCriteria::create()
            ->setDateFrom('2021-11-01')
            ->setDateTo('2021-11-30')
            ->addFilter(FilterItem::create(FieldEnum::CAMPAIGN_ID, FilterOperatorEnum::EQUALS, '123'));
        $reportDefinition = ReportDefinition::create($selectionCriteria)
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::CUSTOM_REPORT)
            ->setDateRangeType(DateRangeTypeEnum::AUTO)
            ->setFieldNames([
                FieldEnum::DATE,
                FieldEnum::CAMPAIGN_ID,
                FieldEnum::IMPRESSIONS,
                FieldEnum::CLICKS,
                FieldEnum::COST,
            ])
            ->setAttributionModels([
                AttributionModelEnum::LC,
                AttributionModelEnum::LYDC,
            ])
            ->setGoals(['1011', '1012'])
            ->setIncludeVAT(true)
            ->addOrderBy(OrderBy::create(FieldEnum::DATE))
            ->addOrderBy(OrderBy::create(FieldEnum::CAMPAIGN_ID, SortOrderEnum::DESCENDING))
            ->setPage(Page::create(100000, 500));

        $xml = (new XmlReportSerializer())->serializeReportDefinition($reportDefinition);

        $expectedXml = <<<'XML'
<?xml version="1.0"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
  <SelectionCriteria>
    <DateFrom>2021-11-01</DateFrom>
    <DateTo>2021-11-30</DateTo>
    <Filter>
      <Field>CampaignId</Field>
      <Operator>EQUALS</Operator>
      <Values>123</Values>
    </Filter>
  </SelectionCriteria>
  <Goals>1011</Goals>
  <Goals>1012</Goals>
  <AttributionModels>LC</AttributionModels>
  <AttributionModels>LYDC</AttributionModels>
  <FieldNames>Date</FieldNames>
  <FieldNames>CampaignId</FieldNames>
  <FieldNames>Impressions</FieldNames>
  <FieldNames>Clicks</FieldNames>
  <FieldNames>Cost</FieldNames>
  <Page>
    <Limit>100000</Limit>
    <Offset>500</Offset>
  </Page>
  <OrderBy>
    <Field>Date</Field>
    <SortOrder>ASCENDING</SortOrder>
  </OrderBy>
  <OrderBy>
    <Field>CampaignId</Field>
    <SortOrder>DESCENDING</SortOrder>
  </OrderBy>
  <ReportName>foo</ReportName>
  <ReportType>CUSTOM_REPORT</ReportType>
  <DateRangeType>AUTO</DateRangeType>
  <Format>TSV</Format>
  <IncludeVAT>YES</IncludeVAT>
</ReportDefinition>
XML;
        self::assertXmlStringEqualsXmlString($expectedXml, $xml);
        self::assertXmlIsValid($xml);
    }

    public function testSerializePageWithoutOffset(): void
    {
        $reportDefinition = ReportDefinition::create()
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::CAMPAIGN_PERFORMANCE_REPORT)
            ->setFieldNames([
                FieldEnum::DATE,
                FieldEnum::CAMPAIGN_ID,
                FieldEnum::IMPRESSIONS,
                FieldEnum::CLICKS,
                FieldEnum::COST,
            ])
            ->setDateRangeType(DateRangeTypeEnum::AUTO)
            ->setIncludeVAT(true)
            ->setPage(Page::create(50000));

        $xml = (new XmlReportSerializer())->serializeReportDefinition($reportDefinition);

        $expectedXml = <<<'XML'
<?xml version="1.0"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
  <SelectionCriteria/>
  <FieldNames>Date</FieldNames>
  <FieldNames>CampaignId</FieldNames>
  <FieldNames>Impressions</FieldNames>
  <FieldNames>Clicks</FieldNames>
  <FieldNames>Cost</FieldNames>
  <Page>
    <Limit>50000</Limit>
  </Page>
  <ReportName>foo</ReportName>
  <ReportType>CAMPAIGN_PERFORMANCE_REPORT</ReportType>
  <DateRangeType>AUTO</DateRangeType>
  <Format>TSV</Format>
  <IncludeVAT>YES</IncludeVAT>
</ReportDefinition>
XML;
        self::assertXmlStringEqualsXmlString($expectedXml, $xml);
        self::assertXmlIsValid($xml);
    }

    public function testDeserializeReportDownloadError(): void
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<reports:reportDownloadError xmlns:reports="http://api.direct.yandex.com/v5/reports">
    <reports:ApiError>
        <reports:requestId>2773184281650080533</reports:requestId>
        <reports:errorCode>53</reports:errorCode>
        <reports:errorMessage>Authorization error</reports:errorMessage>
        <reports:errorDetail>Token not entered</reports:errorDetail>
    </reports:ApiError>
</reports:reportDownloadError>
XML;

        $apiError = (new XmlReportSerializer())->deserializeApiError($xml);

        self::assertNotNull($apiError);
        self::assertSame('2773184281650080533', $apiError->requestId);
        self::assertSame(53, $apiError->errorCode);
        self::assertSame('Authorization error', $apiError->errorMessage);
        self::assertSame('Token not entered', $apiError->errorDetail);
    }

    private static function assertXmlIsValid(string $xml): void
    {
        self::assertNotEmpty($xml);

        $doc = new DOMDocument();
        $doc->loadXML($xml);

        $prevState = libxml_use_internal_errors(true);

        try {
            $doc->schemaValidate(self::SCHEMA_URI);

            self::assertSame(
                [],
                array_map(
                    static function (LibXMLError $error): string {
                        return $error->message;
                    },
                    libxml_get_errors()
                )
            );
        } finally {
            libxml_clear_errors();
            libxml_use_internal_errors($prevState);
        }
    }
}
