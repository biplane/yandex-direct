<?php

namespace Biplane\YandexDirectBundle\Service;

use Biplane\YandexDirectBundle\Contract\NewReportInfo;
use Biplane\YandexDirectBundle\Contract\NewReportFilterInfo;
use Biplane\YandexDirectBundle\Contract\ReportInfo;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;

/**
 * ReportService
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class ReportService
{
    const MAX_REPORTS = 5;

    private $apiService;
    private $downloader;

    /**
     * Constructor.
     *
     * @param YandexApiService  $apiService The YandexApiService instance
     * @param Report\Downloader $downloader The Downloader instance
     */
    public function __construct(YandexApiService $apiService, Report\Downloader $downloader)
    {
        $this->apiService = $apiService;
        $this->downloader = $downloader;
    }

    /**
     * Метод-хелпер для создания отчетов по параметрам, а не по контратку.
     *
     * @param int       $campaignId     Идентификатор кампании, для которой требуется сформировать отчет
     * @param \DateTime $startDate      Дата начала отчетного периода
     * @param \DateTime $endDate        Дата окончания отчетного периода
     * @param array     $groupByColumns Массив, определяющий состав столбцов в отчете
     * @param array     $filter         Массив с параметрами фильтрации записей для отчета
     *
     * @return null|string
     */
    public function getReport(
        $campaignId, \DateTime $startDate, \DateTime $endDate,
        array $groupByColumns = array(), array $filter = array()
    )
    {
        $newReportInfo = NewReportInfo::create()
            ->setCampaignID($campaignId)
            ->setStartDate($startDate->format('Y-m-d'))
            ->setEndDate($endDate->format('Y-m-d'));

        if (count($groupByColumns) && $this->checkGroupByColumns($groupByColumns)) {
            $newReportInfo->setGroupByColumns($groupByColumns);
        }

        if (count($filter)) {
            $filterInfo = new NewReportFilterInfo();

            if (isset($filter['Banner']) && is_array($filter['Banner']) && count($filter['Banner'])) {
                $filterInfo->setBanner($filter['Banner']);
            }

            if (isset($filter['Geo']) && is_array($filter['Geo']) && count($filter['Geo'])) {
                $filterInfo->setGeo($filter['Geo']);
            }

            if (isset($filter['Phrase']) && is_array($filter['Phrase']) && count($filter['Phrase'])) {
                $filterInfo->setPhrase($filter['Phrase']);
            }

            $newReportInfo->setFilter($filterInfo);
        }

        return $this->getReportFromContract($newReportInfo);
    }

    /**
     * Создание и выкачивание отчета через готовый контракт.
     *
     * @param NewReportInfo $contract
     *
     * @return null|string
     *
     * @throws \RuntimeException
     * @throws \Exception
     */
    public function getReportFromContract(NewReportInfo $contract)
    {
        if ($this->isFullQueue()) {
            throw new \RuntimeException(sprintf(
                'Unable to create new report. Maximum number of "%d" reports reached.',
                self::MAX_REPORTS
            ));
        }

        // создаем
        $reportId = $this->apiService->createNewReport($contract);

        do {
            sleep(15);
            $reportInfo = $this->getReportInfo($reportId);
        } while ($reportInfo->getStatusReport() === ReportInfo::STATUS_PENDING);

        try {
            // скачиваем
            $content = $this->downloader->download($reportInfo->getUrl());

            // удаляем
            $this->apiService->deleteReport($reportId);
        } catch (\Exception $ex) {
            // удаляем
            $this->apiService->deleteReport($reportId);

            throw $ex;
        }

        return $content;
    }

    /**
     * Gets the report info.
     *
     * @param int $reportId A report identifier
     *
     * @return ReportInfo A ReportInfo instance
     *
     * @throws \LogicException
     */
    private function getReportInfo($reportId)
    {
        foreach ($this->apiService->getReportList() as $report) {
            if ($report->getReportID() === $reportId) {
                return $report;
            }
        }

        throw new \LogicException(sprintf('Report info #%d not found.', $reportId));
    }

    /**
     * Determines, whether queue has free slots.
     *
     * @return bool True if has not free slots, otherwise false
     */
    public function isFullQueue()
    {
        return count($this->apiService->getReportList()) >= self::MAX_REPORTS;
    }

    /**
     * Checks a name of columns.
     *
     * @param array $columns An array of named columns
     *
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    private function checkGroupByColumns(array $columns)
    {
        $valid = array('clBanner', 'clDate', 'clPage', 'clGeo', 'clPhrase', 'clStatGoals', 'clPositionType');

        foreach ($columns as $column) {
            if (!in_array($column, $valid)) {
                throw new \InvalidArgumentException(sprintf('Undefined group column "%s"', $column));
            }
        }

        return true;
    }
}