<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Report;

use Biplane\YandexDirect\Exception\LogicException;
use Biplane\YandexDirect\Exception\ReportDefinitionException;
use DOMDocument;
use DOMElement;
use InvalidArgumentException;
use OverflowException;

use function count;
use function in_array;
use function is_string;
use function libxml_clear_errors;
use function libxml_get_errors;
use function libxml_use_internal_errors;
use function sprintf;

class ReportDefinitionBuilder
{
    public const XML_NAMESPACE = 'http://api.direct.yandex.com/v5/reports';

    /** @var string */
    private $reportName = '';

    /** @var string */
    private $reportType = '';

    /** @var array<string> */
    private $fieldNames = [];

    /** @var int|null */
    private $page;

    /** @var string|null */
    private $dateRangeType;

    /** @var string|null */
    private $dateFrom;

    /** @var string|null */
    private $dateTo;

    /** @var string */
    private $format = FormatEnum::TSV;

    /** @var bool */
    private $includeVat = false;

    /** @var bool */
    private $includeDiscount = false;

    /** @var array<array{string, bool}> */
    private $orderBy = [];

    /** @var array<string, array{string, array<scalar>}> */
    private $filters = [];

    /** @var array<int> */
    private $goals = [];

    /** @var array<string> */
    private $attributionModels = [];

    /** @var string|null */
    private $schema = null;

    /**
     * @param string|bool|null $schema Set null or false to disable validation by the schema
     */
    public function __construct($schema = 'https://api.direct.yandex.com/v5/reports.xsd')
    {
        if (is_string($schema)) {
            $this->schema = $schema;
        } elseif ($schema !== null && $schema !== false) {
            throw new InvalidArgumentException('Type of $schema argument is invalid. Must be string, null or false.');
        }
    }

    /**
     * @psalm-param FieldEnum::* $field
     *
     * @return $this
     */
    public function addOrderBy(string $field, bool $ascending = true)
    {
        $this->orderBy[] = [$field, $ascending];

        return $this;
    }

    /**
     * @param mixed|array<mixed> $values
     * @psalm-param FieldEnum::* $field
     * @psalm-param FilterOperatorEnum::* $operator
     * @psalm-param scalar|array<scalar> $values
     *
     * @return $this
     */
    public function addFilter(string $field, string $operator, $values)
    {
        if (isset($this->filters[$field])) {
            throw new InvalidArgumentException(sprintf('Filter for field "%s" is already exists.', $field));
        }

        $this->filters[$field] = [$operator, (array)$values];

        return $this;
    }

    /**
     * @psalm-param FieldEnum::* $field
     */
    public function hasFilter(string $field): bool
    {
        return isset($this->filters[$field]);
    }

    /**
     * @psalm-param FieldEnum::* $name
     *
     * @return $this
     */
    public function addFieldName($name)
    {
        if (! in_array($name, $this->fieldNames, true)) {
            $this->fieldNames[] = $name;
        }

        return $this;
    }

    /**
     * @param array<string> $names
     * @psalm-param array<FieldEnum::*> $names
     *
     * @return $this
     */
    public function setFieldNames(array $names)
    {
        $this->fieldNames = $names;

        return $this;
    }

    /**
     * @return $this
     */
    public function addGoal(int $goal)
    {
        if ($goal < 1) {
            throw new InvalidArgumentException('Goal ID must be a positive number');
        }

        if (! in_array($goal, $this->goals, true)) {
            if (count($this->goals) === 10) {
                throw new OverflowException(sprintf(
                    'You cannot add a goal "%s" to report. Goals limit (10) reached.',
                    $goal
                ));
            }

            $this->goals[] = $goal;
        }

        return $this;
    }

    /**
     * @param array<int> $goals
     *
     * @return $this
     */
    public function setGoals(array $goals)
    {
        $this->goals = [];

        foreach ($goals as $goal) {
            $this->addGoal($goal);
        }

        return $this;
    }

    /**
     * @psalm-param AttributionModelEnum::* $attributionModel
     *
     * @return $this
     */
    public function addAttributionModel(string $attributionModel)
    {
        if (! in_array($attributionModel, $this->attributionModels)) {
            $this->attributionModels[] = $attributionModel;
        }

        return $this;
    }

    /**
     * @param array<string> $attributionModels
     * @psalm-param array<AttributionModelEnum::*> $attributionModels
     *
     * @return $this
     */
    public function setAttributionModels(array $attributionModels)
    {
        $this->attributionModels = [];

        foreach ($attributionModels as $attributionModel) {
            $this->addAttributionModel($attributionModel);
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function includeVat()
    {
        $this->includeVat = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function includeDiscount()
    {
        $this->includeDiscount = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function setReportName(string $name)
    {
        $this->reportName = $name;

        return $this;
    }

    /**
     * @psalm-param ReportTypeEnum::* $type
     *
     * @return $this
     */
    public function setReportType(string $type)
    {
        $this->reportType = $type;

        return $this;
    }

    /**
     * @return $this
     */
    public function setPage(?int $limit = null)
    {
        $this->page = $limit;

        return $this;
    }

    /**
     * @psalm-param DateRangeTypeEnum::* $type
     *
     * @return $this
     */
    public function setDateRangeType(string $type, ?string $dateFrom = null, ?string $dateTo = null)
    {
        if ($type === DateRangeTypeEnum::CUSTOM_DATE && ($dateFrom === null || $dateTo === null)) {
            throw new LogicException(sprintf(
                'You must set $dateFrom and $dateTo arguments with type "%s" of date range.',
                $type
            ));
        }

        if ($type !== DateRangeTypeEnum::CUSTOM_DATE && ($dateFrom !== null || $dateTo !== null)) {
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

    /**
     * @psalm-param FormatEnum::* $format
     *
     * @return $this
     */
    public function setFormat(string $format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Builds the report definition in XML format.
     *
     * @throws ReportDefinitionException
     */
    public function build(): string
    {
        $prevState = libxml_use_internal_errors(true);

        try {
            $doc = $this->buildDocument();

            if ($this->schema !== null && ! $doc->schemaValidate($this->schema)) {
                throw ReportDefinitionException::schemaValidation(libxml_get_errors());
            }

            $xml = $doc->saveXML();

            if ($xml === false) {
                throw ReportDefinitionException::compileError(libxml_get_errors());
            }

            return $xml;
        } finally {
            libxml_clear_errors();
            libxml_use_internal_errors($prevState);
        }
    }

    private function buildDocument(): DOMDocument
    {
        $document = new DOMDocument('1.0', 'utf-8');
        $root = $document->createElementNS(self::XML_NAMESPACE, 'ReportDefinition');
        $document->appendChild($root);

        $root->appendChild($this->createSelectionCriteriaElement($document));

        foreach ($this->goals as $goal) {
            $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Goals', (string)$goal));
        }

        if (count($this->goals) > 0) {
            foreach ($this->attributionModels as $attributionModel) {
                $root->appendChild($document->createElementNS(
                    self::XML_NAMESPACE,
                    'AttributionModels',
                    $attributionModel
                ));
            }
        }

        foreach ($this->fieldNames as $fieldName) {
            $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'FieldNames', $fieldName));
        }

        if ($this->page !== null) {
            $root->appendChild($this->createPageElement($document, $this->page));
        }

        foreach ($this->orderBy as $orderBy) {
            $root->appendChild($this->createOrderByElement($document, $orderBy[0], $orderBy[1]));
        }

        $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'ReportName', $this->reportName));
        $root->appendChild($document->createElementNS(self::XML_NAMESPACE, 'ReportType', $this->reportType));
        $root->appendChild(
            $document->createElementNS(
                self::XML_NAMESPACE,
                'DateRangeType',
                (string)$this->dateRangeType
            )
        );
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

    private function createSelectionCriteriaElement(DOMDocument $document): DOMElement
    {
        $criteriaNode = $document->createElementNS(self::XML_NAMESPACE, 'SelectionCriteria');

        if ($this->dateFrom !== null) {
            $criteriaNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'DateFrom', $this->dateFrom));
            $criteriaNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'DateTo', $this->dateTo));
        }

        foreach ($this->filters as $field => $options) {
            $filterNode = $document->createElementNS(self::XML_NAMESPACE, 'Filter');
            $filterNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Field', $field));
            $filterNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Operator', $options[0]));

            foreach ($options[1] as $value) {
                $filterNode->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Values', (string)$value));
            }

            $criteriaNode->appendChild($filterNode);
        }

        return $criteriaNode;
    }

    private function createPageElement(DOMDocument $document, int $limit): DOMElement
    {
        $page = $document->createElementNS(self::XML_NAMESPACE, 'Page');
        $page->appendChild($document->createElementNS(self::XML_NAMESPACE, 'Limit', (string)$limit));

        return $page;
    }

    private function createOrderByElement(DOMDocument $document, string $field, bool $ascending): DOMElement
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
