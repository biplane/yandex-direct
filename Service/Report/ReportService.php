<?php

namespace Biplane\YandexDirectBundle\Service\Report;

use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;
use Biplane\YandexDirectBundle\Factory\ApiServiceFactory;

/**
 * ReportService
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class ReportService
{
    const MAX_REPORTS = 5;

    /**
     * @var \Biplane\YandexDirectBundle\Factory\ApiServiceFactory
     */
    private $apiFactory;
    /**
     * @var \Biplane\YandexDirectBundle\Report\Service\ReportDownloader
     */
    private $downloader;

    private $profileName;

    public function __construct(ApiServiceFactory $apiFactory, Downloader $downloader)
    {
        $this->apiFactory = $apiFactory;
        $this->downloader = $downloader;
    }

    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
    }

    /**
     * @param $campaignId Идентификатор кампании, для которой требуется сформировать отчет
     * @param \DateTime $startDate Дата начала отчетного периода
     * @param \DateTime $endDate Дата окончания отчетного периода
     * @param array $groupByColumns Массив, определяющий состав столбцов в отчете
     * @param array $filter Массив с параметрами фильтрации записей для отчета
     * @return null|string
     */
    public function getReport($campaignId, \DateTime $startDate, \DateTime $endDate, array $groupByColumns = array(), array $filter = array())
    {
        $apiService = $this->createApiService();
        if (count($apiService->getReportList()) >= self::MAX_REPORTS) {
            throw new \RuntimeException(sprintf('Unable to create new report. Maximum number of "%d" reports reached.', self::MAX_REPORTS));
        }

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
        $reportId = $apiService->createNewReport($newReportInfo);
        do {
            sleep(15);
            $reportInfo = $this->getReportInfo($apiService, $reportId);
        } while ($reportInfo->getStatusReport() === Contract\ReportInfo::STATUS_PENDING);
        // скачиваем
        $content = $this->downloader->download($reportInfo->getUrl(), $this->profileName);
        // удаляем
        $apiService->deleteReport($reportId);

        return $content;
    }

    /**
     * @throws \InvalidArgumentException
     * @return \Biplane\YandexDirectBundle\Proxy\YandexApiService
     */
    private function createApiService()
    {
        if ($this->profileName === null) {
            throw new \InvalidArgumentException('Profile name for API service not defined.');
        }

        return $this->apiFactory->createApiService($this->profileName);
    }

    private function getReportInfo(YandexApiService $apiService, $reportId)
    {
        /** @var $report \Biplane\YandexDirectBundle\Contract\ReportInfo */
        foreach ($apiService->getReportList() as $report) {
            if ($report->getReportID() === $reportId) {
                return $report;
            }
        }

        throw new \LogicException(sprintf('Report info #%d not found.', $reportId));
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