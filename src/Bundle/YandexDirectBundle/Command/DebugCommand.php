<?php

namespace Biplane\Bundle\YandexDirectBundle\Command;

use Biplane\YandexDirect\Api\V4\Contract;
use Biplane\YandexDirect\Api\V4\YandexApiService;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Provides helpers for debugging Yandex API.
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class DebugCommand extends ContainerAwareCommand
{
    /**
     * Configures the current command.
     */
    protected function configure()
    {
        $this
            ->setName('biplane:yandex-direct:debug')
            ->setDescription('Dumps result of a method API to console')
            ->addArgument('action', InputArgument::REQUIRED, 'The action type')
            ->addOption('profile', null, InputOption::VALUE_OPTIONAL, 'The profile')
            ->addOption('id', null, InputOption::VALUE_OPTIONAL, 'The ID of entity, if needed for specified action')
            ->addOption('pid', null, InputOption::VALUE_OPTIONAL, 'The ID of parent entity, if needed for specified action')
            ->addOption('ids', null, InputOption::VALUE_OPTIONAL, 'The ids of entities, separated by comma')
            ->addOption('date', null, InputOption::VALUE_OPTIONAL, 'The date in format YYYY-MM-DD')
            ->addOption('interval', null, InputOption::VALUE_OPTIONAL, 'The interval in days, used in combine with --date')
            ->setHelp(<<<EOF
The <info>biplane:yandex_direct:debug</info> command make request to API
and dump result to console.
It can help in debugging at some cases.

You can dump info for a banner and its phrases, by specified ID:

  <info>php app/console biplane:yandex_direct:debug banner --id=187324</info>

You can dump info for a phrase, by specified banner ID (<info>--pid</info> option)
and phrase ID (<info>--id</info> option)

  <info>php app/console biplane:yandex_direct:debug phrase --id=192843832 --pid=187324</info>

You can dump info for a campaign, by specified ID:

  <info>php app/console biplane:yandex_direct:debug campaign --id=2001911</info>

You can dump info of stats for summary budgets of campaigns:

  <info>php app/console biplane:yandex_direct:debug summary-stat --ids="1234,2367,2567"</info>
  <info>php app/console biplane:yandex_direct:debug summary-stat --ids="123,345" --date="2012-01-01"</info>
  <info>php app/console biplane:yandex_direct:debug summary-stat --ids="123,345" --date="2012-01-01" --interval=10</info>

You cand dump info for balance of campaigns:

  <info>php app/console biplane:yandex_direct:debug balance --ids="1234,2367,2567"</info>

You can also optionally specify which profile use for connect to API with
the <info>--profile</info> option:

  <info>php app/console biplane:yandex_direct:debug banner --id=187324 --profile=default</info>
EOF
            );
    }

    /**
     * Executes the current command.
     *
     * @param InputInterface  $input  An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     *
     * @return integer 0 if everything went fine, or an error code
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $serviceApi = $this->getContainer()->get('biplane_yandex_direct.api.factory')
            ->createApiService($input->getOption('profile'));
        $result = null;

        switch ($input->getArgument('action')) {
            case 'banner':
                $result = $this->getBanner($serviceApi, $input->getOption('id'));
                break;
            case 'phrase':
                $result = $this->getBannerPhrase($serviceApi, $input->getOption('pid'), $input->getOption('id'));
                break;
            case 'campaign':
                $result = $this->getCampaign($serviceApi, $input->getOption('id'));
                break;
            case 'summary-stat':
                $ids = $input->getOption('ids');
                $ids = is_string($ids) ? explode(',', $ids) : array();

                $result = $this->getSummaryStat($serviceApi, $ids, $input->getOption('date'), $input->getOption('interval'));
                break;
            case 'balance':
                $ids = $input->getOption('ids');
                $ids = is_string($ids) ? explode(',', $ids) : array();

                $result = $serviceApi->getBalance($ids);
                break;
            case 'report-list':
                $result = $serviceApi->getReportList();
                break;
            default:
                $output->writeln(sprintf(
                    '<error>Invalid action "%s". Allowed: banner, phrase, campaign, summary-stat, balance, report-list</error>',
                    $input->getArgument('action')
                ));

                return 1;
        }

        $output->writeln('  <info>Dump:</info>');
        $output->writeln(print_r($result, true));

        return 0;
    }

    private function getBanner(YandexApiService $api, $bannerId)
    {
        if ($bannerId === null) {
            throw new \InvalidArgumentException('Missing banner ID.');
        }
        $bannerId = (int)$bannerId;
        if ($bannerId < 1) {
            throw new \InvalidArgumentException('Banner ID cannot be less than 1.');
        }

        $request = Contract\GetBannersInfo::create()
            ->setBannerIDS(array($bannerId))
            ->setGetPhrases('WithPrices');

        return $api->getBanners($request);
    }

    private function getBannerPhrase(YandexApiService $api, $bannerId, $phraseId)
    {
        if ($bannerId === null) {
            throw new \InvalidArgumentException('Missing banner ID.');
        }
        $bannerId = (int)$bannerId;
        if ($bannerId < 1) {
            throw new \InvalidArgumentException('Banner ID cannot be less than 1.');
        }
        if ($phraseId === null) {
            throw new \InvalidArgumentException('Missing phrase ID.');
        }
        $phraseId = (int)$phraseId;
        if ($phraseId < 1) {
            throw new \InvalidArgumentException('Phrase ID cannot be less than 1.');
        }

        foreach ($api->getBannerPhrases(array($bannerId)) as $phrase) {
            if ($phrase->getPhraseID() === $phraseId) {
                return $phrase;
            }
        }

        return null;
    }

    private function getCampaign(YandexApiService $api, $campaignId)
    {
        if ($campaignId === null) {
            throw new \InvalidArgumentException('Missing campaign ID.');
        }
        $campaignId = (int)$campaignId;
        if ($campaignId < 1) {
            throw new \InvalidArgumentException('Campaign ID cannot be less than 1.');
        }

        $ids = new Contract\CampaignIDSInfo();
        $ids->setCampaignIDS(array($campaignId));

        $result = $api->getCampaignsParams($ids);

        if (count($result) == 1) {
            return $result[0];
        }

        return null;
    }

    private function getSummaryStat(YandexApiService $api, array $ids, $date = null, $interval = null)
    {
        if (count($ids) == 0) {
            throw new \InvalidArgumentException('Array of campaign IDs cannot be empty.');
        }

        $endDate = new \DateTime($date ?: 'yesterday');
        $interval = (int)$interval ?: 7;

        if ($interval < 1) {
            throw new \InvalidArgumentException('Interval cannot be less than 1.');
        }

        $startDate = clone $endDate;
        $startDate->sub(new \DateInterval('P' . $interval . 'D'));

        $statRequest = new Contract\GetSummaryStatRequest();
        $statRequest->setCampaignIDS($ids);
        $statRequest->setStartDate($startDate->format('Y-m-d'));
        $statRequest->setEndDate($endDate->format('Y-m-d'));

        return $api->getSummaryStat($statRequest);
    }
}