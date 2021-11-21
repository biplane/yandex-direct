<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\ReportDefinitionSerializerFactory;
use Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum;
use Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum;
use Biplane\YandexDirect\Api\V5\Reports\DateRangeTypeEnum;
use Biplane\YandexDirect\Api\V5\Reports\FieldEnum;
use Biplane\YandexDirect\Api\V5\Reports\FilterItem;
use Biplane\YandexDirect\Api\V5\Reports\FilterOperatorEnum;
use Biplane\YandexDirect\Api\V5\Reports\OrderBy;
use Biplane\YandexDirect\Api\V5\Reports\ReportDefinition;
use Biplane\YandexDirect\Api\V5\Reports\ReportTypeEnum;
use Biplane\YandexDirect\Api\V5\Reports\SelectionCriteria;
use DOMDocument;
use LibXMLError;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

use function array_map;
use function libxml_clear_errors;
use function libxml_get_errors;
use function libxml_use_internal_errors;
use function sprintf;
use function str_replace;

final class ReportDefinitionSerializationTest extends TestCase
{
    private const XML_NAMESPACE = 'http://api.direct.yandex.com/v5/reports';
    private const SCHEMA_URI = 'https://api.direct.yandex.com/v5/reports.xsd';

    public function testSerializeWhenDefinedOnlyRequiredProperties(): void
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

        $xml = $this->serialize($reportDefinition);

        $expectedXml = <<<'XML'
<?xml version="1.0"?>
<ReportDefinition>
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
            ->addOrderBy(OrderBy::create(FieldEnum::CAMPAIGN_ID, SortOrderEnum::DESCENDING));

        $xml = $this->serialize($reportDefinition);

        $expectedXml = <<<'XML'
<?xml version="1.0"?>
<ReportDefinition>
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

    private function serialize(ReportDefinition $reportDefinition): string
    {
        $serializer = ReportDefinitionSerializerFactory::create();

        return $serializer->serialize($reportDefinition, XmlEncoder::FORMAT);
    }

    private static function assertXmlIsValid(string $xml): void
    {
        $xml = str_replace('<ReportDefinition>', sprintf('<ReportDefinition xmlns="%s">', self::XML_NAMESPACE), $xml);

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
