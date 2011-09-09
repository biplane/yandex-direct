<?php

namespace Biplane\YandexDirectBundle\Service;

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
     * @var \Biplane\YandexDirectBundle\Api\Service
     */
    private $apiService;

    public function __construct(YandexApiService $apiService, ReportDownloader $downloader)
    {
        $this->apiService = $apiService;
        $this->downloader = $downloader;
    }

    /**
     * @param $profile Название профиля, через который будет скачиваться будущий отчет
     * @param $campaignId Идентификатор кампании, для которой требуется сформировать отчет.
     * @param \DateTime $startDate Дата начала отчетного периода
     * @param \DateTime $endDate Дата окончания отчетного периода
     * @param array $groupByColumns Массив, определяющий состав столбцов в отчете
     * @param array $filter Массив с параметрами фильтрации записей для отчета
     * @return null|string
     */
    public function createReport($profile, $campaignId, \DateTime $startDate, \DateTime $endDate, array $groupByColumns = array(), array $filter = array())
    {
        $this->checkMaxReports();

        $newReportInfo = new Contract\NewReportInfo();
        $newReportInfo->setCampaignID($campaignId)
            ->setStartDate($startDate->format('Y-m-d'))
            ->setEndDate($endDate->format('Y-m-d'));
        if (count($groupByColumns) && $this->checkGroupByColumns($groupByColumns)) {
            $newReportInfo->setGroupByColumns($groupByColumns);
        }
        if (count($filter)) {
            $filterInfo = new Contract\NewReportFilterInfo();
            if (is_array($filter['Banner']) && count($filter['Banner'])) {
                $filterInfo->setBanner($filter['Banner']);
            }
            if (is_array($filter['Geo']) && count($filter['Geo'])) {
                $filterInfo->setGeo($filter['Geo']);
            }
            if (is_array($filter['Phrase']) && count($filter['Phrase'])) {
                $filterInfo->setPhrase($filter['Phrase']);
            }
            $newReportInfo->setFilter($filterInfo);
        }
        // создаем
        $reportId = $this->apiService->createNewReport($newReportInfo);
        do {
            sleep(15);
            $reportInfo = $this->getReportInfo($reportId);
        } while ($reportInfo->getStatusReport() === Contract\ReportInfo::STATUS_PENDING);
        // скачиваем
        $content = $this->downloader->download($reportInfo->getUrl(), $profile);
        // удаляем
        $this->apiService->deleteReport($reportId);

        return $content;
    }

    public function getReportInfo($reportId)
    {
        /** @var $report \Biplane\YandexDirectBundle\Contract\ReportInfo */
        foreach ($this->apiService->getReportList() as $report) {
            if ($report->getReportID() === $reportId) {
                return $report;
            }
        }

        throw new \LogicException(sprintf('Report info #%d not found.', $reportId));
    }

    private function checkMaxReports()
    {
        if (count($this->apiService->getReportList()) >= self::MAX_REPORTS) {
            throw new \RuntimeException(sprintf('Unable to create new report. Maximum number of "%d" reports reached.', self::MAX_REPORTS));
        }
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