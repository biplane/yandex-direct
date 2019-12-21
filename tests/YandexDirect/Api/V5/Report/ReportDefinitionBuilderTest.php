<?php

namespace Biplane\Tests\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Api\V5\Report\AttributionModelEnum;
use Biplane\YandexDirect\Api\V5\Report\DateRangeTypeEnum;
use Biplane\YandexDirect\Api\V5\Report\FieldEnum;
use Biplane\YandexDirect\Api\V5\Report\FilterOperatorEnum;
use Biplane\YandexDirect\Api\V5\Report\ReportDefinitionBuilder;
use Biplane\YandexDirect\Api\V5\Report\ReportTypeEnum;
use Biplane\YandexDirect\Exception\ReportDefinitionException;
use VCR\VCR;

class ReportDefinitionBuilderTest extends \PHPUnit_Framework_TestCase
{
    public static function setUpBeforeClass()
    {
        VCR::turnOff();
    }

    public function testBuildWithDefaults()
    {
        $builder = new ReportDefinitionBuilder(__DIR__ . '/fixtures/reports.xsd');
        $builder
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::ACCOUNT_PERFORMANCE_REPORT)
            ->setDateRangeType(DateRangeTypeEnum::AUTO)
            ->addFieldName(FieldEnum::AD_FORMAT);

        $reportDefinition = $builder->build();

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
    <SelectionCriteria />
    <FieldNames>AdFormat</FieldNames>
    <ReportName>foo</ReportName>
    <ReportType>ACCOUNT_PERFORMANCE_REPORT</ReportType>
    <DateRangeType>AUTO</DateRangeType>
    <Format>TSV</Format>
    <IncludeVAT>NO</IncludeVAT>
    <IncludeDiscount>NO</IncludeDiscount>
</ReportDefinition>
XML;
        $this->assertXmlStringEqualsXmlString($expected, $reportDefinition);
    }

    public function testBuildWithCustomDate()
    {
        $builder = new ReportDefinitionBuilder(__DIR__ . '/fixtures/reports.xsd');
        $builder
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::ACCOUNT_PERFORMANCE_REPORT)
            ->setDateRangeType(DateRangeTypeEnum::CUSTOM_DATE, 'from', 'to')
            ->addFieldName(FieldEnum::AD_FORMAT);

        $reportDefinition = $builder->build();

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
    <SelectionCriteria>
        <DateFrom>from</DateFrom>
        <DateTo>to</DateTo>
    </SelectionCriteria>
    <FieldNames>AdFormat</FieldNames>
    <ReportName>foo</ReportName>
    <ReportType>ACCOUNT_PERFORMANCE_REPORT</ReportType>
    <DateRangeType>CUSTOM_DATE</DateRangeType>
    <Format>TSV</Format>
    <IncludeVAT>NO</IncludeVAT>
    <IncludeDiscount>NO</IncludeDiscount>
</ReportDefinition>
XML;
        $this->assertXmlStringEqualsXmlString($expected, $reportDefinition);
    }

    public function testBuildWithCustomParams()
    {
        $builder = new ReportDefinitionBuilder(__DIR__ . '/fixtures/reports.xsd');
        $builder
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::ACCOUNT_PERFORMANCE_REPORT)
            ->setDateRangeType(DateRangeTypeEnum::YESTERDAY)
            ->setPage(100)
            ->setFieldNames([
                FieldEnum::AD_ID,
                FieldEnum::CRITERIA_ID,
            ])
            ->addFieldName(FieldEnum::COST)
            ->addOrderBy(FieldEnum::DATE)
            ->addOrderBy(FieldEnum::CRITERIA, false)
            ->addFilter(FieldEnum::DATE, FilterOperatorEnum::EQUALS, ['now', 'yesterday'])
            ->addFilter(FieldEnum::CRITERIA, FilterOperatorEnum::STARTS_WITH_IGNORE_CASE, 'search');

        $reportDefinition = $builder->build();

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
    <SelectionCriteria>
        <Filter>
            <Field>Date</Field>
            <Operator>EQUALS</Operator>
            <Values>now</Values>
            <Values>yesterday</Values>
        </Filter>
        <Filter>
            <Field>Criteria</Field>
            <Operator>STARTS_WITH_IGNORE_CASE</Operator>
            <Values>search</Values>        
        </Filter>
    </SelectionCriteria>
    <FieldNames>AdId</FieldNames>
    <FieldNames>CriteriaId</FieldNames>
    <FieldNames>Cost</FieldNames>
    <Page>
        <Limit>100</Limit>
    </Page>
    <OrderBy>
        <Field>Date</Field>
        <SortOrder>ASCENDING</SortOrder>
    </OrderBy>
    <OrderBy>
        <Field>Criteria</Field>
        <SortOrder>DESCENDING</SortOrder>
    </OrderBy>
    <ReportName>foo</ReportName>
    <ReportType>ACCOUNT_PERFORMANCE_REPORT</ReportType>
    <DateRangeType>YESTERDAY</DateRangeType>
    <Format>TSV</Format>
    <IncludeVAT>NO</IncludeVAT>
    <IncludeDiscount>NO</IncludeDiscount>
</ReportDefinition>
XML;
        $this->assertXmlStringEqualsXmlString($expected, $reportDefinition);
    }

    public function testBuildWithGoals()
    {
        $builder = new ReportDefinitionBuilder(__DIR__ . '/fixtures/reports.xsd');
        $builder
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::ACCOUNT_PERFORMANCE_REPORT)
            ->setDateRangeType(DateRangeTypeEnum::YESTERDAY)
            ->setFieldNames([
                FieldEnum::AD_ID,
                FieldEnum::CRITERIA_ID,
            ])
            ->setGoals(['123', '567', '123']);

        $reportDefinition = $builder->build();

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
    <SelectionCriteria />
    <Goals>123</Goals>
    <Goals>567</Goals>
    <FieldNames>AdId</FieldNames>
    <FieldNames>CriteriaId</FieldNames>
    <ReportName>foo</ReportName>
    <ReportType>ACCOUNT_PERFORMANCE_REPORT</ReportType>
    <DateRangeType>YESTERDAY</DateRangeType>
    <Format>TSV</Format>
    <IncludeVAT>NO</IncludeVAT>
    <IncludeDiscount>NO</IncludeDiscount>
</ReportDefinition>
XML;
        $this->assertXmlStringEqualsXmlString($expected, $reportDefinition);
    }

    public function testBuildWithGoalsAndAttributionModels()
    {
        $builder = new ReportDefinitionBuilder(__DIR__ . '/fixtures/reports.xsd');
        $builder
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::ACCOUNT_PERFORMANCE_REPORT)
            ->setDateRangeType(DateRangeTypeEnum::YESTERDAY)
            ->setFieldNames([
                FieldEnum::AD_ID,
                FieldEnum::CRITERIA_ID,
            ])
            ->addGoal('123')
            ->addAttributionModel(AttributionModelEnum::LC);

        $reportDefinition = $builder->build();

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
    <SelectionCriteria />
    <Goals>123</Goals>
    <AttributionModels>LC</AttributionModels>
    <FieldNames>AdId</FieldNames>
    <FieldNames>CriteriaId</FieldNames>
    <ReportName>foo</ReportName>
    <ReportType>ACCOUNT_PERFORMANCE_REPORT</ReportType>
    <DateRangeType>YESTERDAY</DateRangeType>
    <Format>TSV</Format>
    <IncludeVAT>NO</IncludeVAT>
    <IncludeDiscount>NO</IncludeDiscount>
</ReportDefinition>
XML;
        $this->assertXmlStringEqualsXmlString($expected, $reportDefinition);
    }

    public function testBuildWithAttributionModelsAndNoGoals()
    {
        $builder = new ReportDefinitionBuilder(__DIR__ . '/fixtures/reports.xsd');
        $builder
            ->setReportName('foo')
            ->setReportType(ReportTypeEnum::ACCOUNT_PERFORMANCE_REPORT)
            ->setDateRangeType(DateRangeTypeEnum::YESTERDAY)
            ->setFieldNames([
                FieldEnum::AD_ID,
                FieldEnum::CRITERIA_ID,
            ])
            ->addAttributionModel(AttributionModelEnum::LC);

        $reportDefinition = $builder->build();

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
    <SelectionCriteria />
    <FieldNames>AdId</FieldNames>
    <FieldNames>CriteriaId</FieldNames>
    <ReportName>foo</ReportName>
    <ReportType>ACCOUNT_PERFORMANCE_REPORT</ReportType>
    <DateRangeType>YESTERDAY</DateRangeType>
    <Format>TSV</Format>
    <IncludeVAT>NO</IncludeVAT>
    <IncludeDiscount>NO</IncludeDiscount>
</ReportDefinition>
XML;
        $this->assertXmlStringEqualsXmlString($expected, $reportDefinition);
    }

    public function testBuildWithoutValidation()
    {
        $builder = new ReportDefinitionBuilder(false);

        $reportDefinition = $builder->build();

        $expected = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<ReportDefinition xmlns="http://api.direct.yandex.com/v5/reports">
    <SelectionCriteria />
    <ReportName />
    <ReportType />
    <DateRangeType />
    <Format>TSV</Format>
    <IncludeVAT>NO</IncludeVAT>
    <IncludeDiscount>NO</IncludeDiscount>
</ReportDefinition>
XML;
        $this->assertXmlStringEqualsXmlString($expected, $reportDefinition);
    }

    /**
     * @expectedException \LogicException
     */
    public function testThrowExceptionWhenSetCustomDateTypeWithoutDateFrom()
    {
        $builder = new ReportDefinitionBuilder();

        $builder->setDateRangeType(DateRangeTypeEnum::CUSTOM_DATE);
    }

    /**
     * @expectedException \LogicException
     */
    public function testThrowExceptionWhenSetCustomDateTypeWithoutDateTo()
    {
        $builder = new ReportDefinitionBuilder();

        $builder->setDateRangeType(DateRangeTypeEnum::CUSTOM_DATE, 'From');
    }

    /**
     * @expectedException \LogicException
     */
    public function testThrowExceptionWhenDateFromNotAllowed()
    {
        $builder = new ReportDefinitionBuilder();

        $builder->setDateRangeType(DateRangeTypeEnum::AUTO, 'From');
    }

    /**
     * @expectedException \LogicException
     */
    public function testThrowExceptionWhenDateToNotAllowed()
    {
        $builder = new ReportDefinitionBuilder();

        $builder->setDateRangeType(DateRangeTypeEnum::AUTO, null, 'To');
    }

    /**
     * @expectedException \Biplane\YandexDirect\Exception\ReportDefinitionException
     */
    public function testThrowExceptionSchemaValidationFailed()
    {
        $builder = new ReportDefinitionBuilder();

        try {
            $builder->build();
        } catch (ReportDefinitionException $ex) {
            $this->assertCount(1, $ex->getErrors());

            throw $ex;
        }
    }
}
