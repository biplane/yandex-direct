<?php

namespace Biplane\YandexDirectBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;

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
            ->setName('biplane:yandex_direct:debug')
            ->setDescription('Dumps result of a method API to console')
            ->addArgument('action', InputArgument::REQUIRED, 'The action type')
            ->addOption('profile', null, InputOption::VALUE_OPTIONAL, 'The profile')
            ->addOption('id', null, InputOption::VALUE_OPTIONAL, 'The ID of entity, if needed for specified action')
            ->addOption('pid', null, InputOption::VALUE_OPTIONAL, 'The ID of parent entity, if needed for specified action')
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
            default:
                $output->writeln(sprintf(
                    '<error>Invalid action "%s". Allowed: banner, phrase, campaign</error>',
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

        return $api->getBanners(new Contract\GetBannersInfo(array(), array($bannerId), null, 'WithPrices'));
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
}