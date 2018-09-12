<?php

namespace Biplane\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Exception\LogicException;
use Biplane\YandexDirect\Exception\ReportDefinitionException;

/**
 * ReportDefinitionBuilder.
 *
 * @author Denis Vasilev
 */
class ReportDefinitionBuilder
{
    const XML_NAMESPACE = 'http://api.direct.yandex.com/v5/reports';

    private $reportName;
    private $reportType;
    private $fieldNames = [];
    private $page;
    private $dateRangeType;
    private $dateFrom;
    private $dateTo;
    private $format = FormatEnum::TSV;
    private $includeVat = false;
    private $includeDiscount = false;
    private $orderBy = [];
    private $filters = [];
    private $goals = [];
    private $attributionModels = [];
    private $schema;

    /**
     * Constructor.
     *
     * @param string|null|bool $schema Set null or false to disable validation by the schema
     */
    public function __construct($schema = 'https://api.direct.yandex.com/v5/reports.xsd')
    {
        if (is_string($schema)) {
            $this->schema = $schema;
        } elseif (null !== $schema && false !== $schema) {
            throw new \InvalidArgumentException('Type of $schema argument is invalid. Must be string, null or false.');
        }
    }

    public function addOrderBy($field, $ascending = true)
    {
        $this->orderBy[] = [$field, $ascending];

        return $this;
    }

    public function addFilter($field, $operator, $values)
    {
        if (isset($this->filters[$field])) {
            throw new \InvalidArgumentException(sprintf('Filter for field "%s" is already exists.', $field));
        }

        $this->filters[$field] = [$operator, (array)$values];

        return $this;
    }

    public function hasFilter($field)
    {
        return isset($this->filters[$field]);
    }

    public function addFieldName($name)
    {
        if (!in_array($name, $this->fieldNames)) {
            $this->fieldNames[] = $name;
        }

        return $this;
    }

    public function setFieldNames(array $names)
    {
        $this->fieldNames = $names;

        return $this;
    }

    public function addGoal($goal)
    {
        if (empty($goal)) {
            throw new \InvalidArgumentException('Goal ID cannot be empty.');
        }

        if (!in_array($goal, $this->goals)) {
            if (count($this->goals) === 10) {
                throw new \OverflowException(sprintf(
                    'You cannot add a goal "%s" to report. Goals limit (10) reached.',
                    $goal
                ));
            }

            $this->goals[] = $goal;
        }

        return $this;
    }

    public function setGoals(array $goals)
    {
        $this->goals = [];

        foreach ($goals as $goal) {
            $this->addGoal($goal);
        }

        return $this;
    }

    public function addAttributionModel($attributionModel)
    {
        if (!in_array($attributionModel, $this->attributionModels)) {
            $this->attributionModels[] = $attributionModel;
        }

        return $this;
    }

    public function setAttributionModels(array $attributionModels)
    {
        $this->attributionModels = [];

        foreach ($attributionModels as $attributionModel) {
            $this->addAttributionModel($attributionModel);
        }

        return $this;
    }

    public function includeVat()
    {
        $this->includeVat = true;

        return $this;
    }

    public function includeDiscount()
    {
        $this->includeDiscount = true;

        return $this;
    }

    public function setReportName($name)
    {
        $this->reportName = $name;

        return $this;
    }

    public function setReportType($type)
    {
        $this->reportType = $type;

        return $this;
    }

    public function setPage($limit = null)
    {
        $this->page = $limit;

        return $this;
    }

    public function setDateRangeType($type, $dateFrom = null, $dateTo = null)
    {
        if ($type === DateRangeTypeEnum::CUSTOM_DATE && (null === $dateFrom || null === $dateTo)) {
            throw new LogicException(sprintf(
                'You must set $dateFrom and $dateTo arguments with type "%s" of date range.',
                $type
            ));
        } elseif ($type !== DateRangeTypeEnum::CUSTOM_DATE && (null !== $dateFrom || null !== $dateTo)) {
            throw new LogicException(sprintf(
                'Arguments $dateFrom and $dateTo are not supported with type "%s" of date range.',
                $type
            ));
        }

        $this->dateRangeType = $type;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;

        return $this;
    }

    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Builds the report definition in XML format.
     *
     * @return string
     *
     * @throws ReportDefinitionException
     */
    public function build()
    {
        $prevState = libxml_use_internal_errors(true);

        try {
            $doc = $this->buildDocument();

            if (!empty($this->schema) && !$doc->schemaValidate($this->schema)) {
                throw ReportDefinitionException::schemaValidation(libxml_get_errors());
            }

            if (false === $xml = $doc->saveXML()) {
                throw ReportDefinitionException::compileError(libxml_get_errors());
            }

            return $xml;
        } finally {
            libxml_clear_errors();
            libxml_use_internal_errors($prevState);
        }
    }

    private function buildDocument()
    {
        $document = new \DOMDocument('1.0', 'utf-8');
        $root = $document->createElementNS(self::XML_NAMESPACE, 'ReportDefinition');
        $document->appendChild($root);

        $root->appendChild($this->createSelectionCriteriaElement($document));

        foreach ($this->fieldNames as $fieldName) {
            $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'FieldNames', $fieldName));
        }

        if (null !== $this->page) {
            $root->appendChild($this->createPageElement($document, $this->page));
        }

        foreach ($this->orderBy as $orderBy) {
            $root->appendChild($this->createOrderByElement($document, $orderBy[0], $orderBy[1]));
        }

        foreach ($this->goals as $goal) {
            $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Goals', $goal));
        }

        if (!empty($this->goals)) {
            foreach ($this->attributionModels as $attributionModel) {
                $root->appendChild($document->createElementNS(
                    self::XML_NAMESPACE,
                    'AttributionModels',
                    $attributionModel
                ));
            }
        }

        $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'ReportName', $this->reportName));
        $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'ReportType', $this->reportType));
        $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'DateRangeType', $this->dateRangeType));
        $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Format', $this->format));
        $root->appendChild($document->createElementNS(
            self::XML_NAMESPACE,
            'IncludeVAT',
            $this->includeVat ? 'YES' : 'NO'
        ));
        $root->appendChild($document->createElementNS(
            self::XML_NAMESPACE,
            'IncludeDiscount',
            $this->includeDiscount ? 'YES' : 'NO'
        ));

        return $document;
    }

    private function createSelectionCriteriaElement(\DOMDocument $document)
    {
        $criteriaNode = $document->createElementNS(self::XML_NAMESPACE, 'SelectionCriteria');

        if (null !== $this->dateFrom) {
            $criteriaNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'DateFrom', $this->dateFrom));
            $criteriaNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'DateTo', $this->dateTo));
        }

        foreach ($this->filters as $field => $options) {
            $filterNode = $document->createElementNS(self::XML_NAMESPACE, 'Filter');
            $filterNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Field', $field));
            $filterNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Operator', $options[0]));

            foreach ($options[1] as $value) {
                $filterNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Values', $value));
            }

            $criteriaNode->appendChild($filterNode);
        }

        return $criteriaNode;
    }

    private function createPageElement(\DOMDocument $document, $limit)
    {
        $page = $document->createElementNS(self::XML_NAMESPACE, 'Page');
        $page->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Limit', $limit));

        return $page;
    }

    private function createOrderByElement(\DOMDocument $document, $field, $ascending)
    {
        $node = $document->createElementNS(self::XML_NAMESPACE, 'OrderBy');
        $node->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Field', $field));
        $node->appendChild($document->createElementNS(
            self::XML_NAMESPACE,
            'SortOrder',
            $ascending ? 'ASCENDING' : 'DESCENDING'
        ));

        return $node;
    }
}
