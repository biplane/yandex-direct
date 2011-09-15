<?php

namespace Biplane\YandexDirectBundle\Service\Report;

use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;

/**
 * ReportService
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class ReportService
{
    const MAX_REPORTS = 5;

    /**
     * @var \Biplane\YandexDirectBundle\Proxy\YandexApiService
     */
    private $apiService;
    /**
     * @var \Biplane\YandexDirectBundle\Report\Service\ReportDownloader
     */
    private $downloader;

    public function __construct(YandexApiService $apiService, Downloader $downloader)
    {
        $this->apiService = $apiService;
        $this->downloader = $downloader;
    }

    /**
     * Метод-хелпер для создания отчетов по параметрам, а не по контратку.
     *
     * @param $campaignId Идентификатор кампании, для которой требуется сформировать отчет
     * @param \DateTime $startDate Дата начала отчетного периода
     * @param \DateTime $endDate Дата окончания отчетного периода
     * @param array $groupByColumns Массив, определяющий состав столбцов в отчете
     * @param array $filter Массив с параметрами фильтрации записей для отчета
     * @return null|string
     */
    public function getReport($campaignId, \DateTime $startDate, \DateTime $endDate, array $groupByColumns = array(), array $filter = array())
    {
        $newReportInfo = new Contract\NewReportInfo();
        $newReportInfo->setCampaignID($campaignId)
            ->setStartDate($startDate->format('Y-m-d'))
            ->setEndDate($endDate->format('Y-m-d'));
        if (count($groupByColumns) && $this->checkGroupByColumns($groupByColumns)) {
            $newReportInfo->setGroupByColumns($groupByColumns);
        }
        if (count($filter)) {
            $filterInfo = new Contract\NewReportFilterInfo();
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
     * @throws \RuntimeException
     * @param \Biplane\YandexDirectBundle\Contract\NewReportInfo $contract
     * @return null|string
     */
    public function getReportFromContract(Contract\NewReportInfo $contract)
    {
        if ($this->isFullQueue()) {
            throw new \RuntimeException(sprintf('Unable to create new report. Maximum number of "%d" reports reached.', self::MAX_REPORTS));
        }
        // создаем
        $reportId = $this->apiService->createNewReport($contract);
        do {
            sleep(15);
            $reportInfo = $this->getReportInfo($reportId);
        } while ($reportInfo->getStatusReport() === Contract\ReportInfo::STATUS_PENDING);
        // скачиваем
        $content = $this->downloader->download($reportInfo->getUrl());
        // удаляем
        $this->apiService->deleteReport($reportId);

        return $content;
    }

    private function getReportInfo($reportId)
    {
        /** @var $report \Biplane\YandexDirectBundle\Contract\ReportInfo */
        foreach ($this->apiService->getReportList() as $report) {
            if ($report->getReportID() === $reportId) {
                return $report;
            }
        }

        throw new \LogicException(sprintf('Report info #%d not found.', $reportId));
    }

    public function isFullQueue()
    {
        return count($this->apiService->getReportList()) >= self::MAX_REPORTS;
    }

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