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
 * ClearCommand
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ClearCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('biplane:yandex-direct:clear')
            ->setDescription('Clears queue of reports or forecasts.')
            ->addArgument('type', InputArgument::REQUIRED, 'The queue type: report, wordstat or forecast')
            ->addOption('profile', null, InputOption::VALUE_OPTIONAL, 'The profile')
            ->setHelp(<<<EOF
The <info>%command.name%</info> command clears queue with requests
to build reports or forecasts.

You should specify type of queue: <info>report</info>, <info>wordstat</info> or <info>forecast</info>.
For example:

  <info>php %command.full_name% report</info>

You can also optionally specify which profile use for connect to API with
the <info>--profile</info> option:

  <info>php %command.full_name% forecast --profile=default</info>
EOF
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $service = $this->getApiService($input->getOption('profile'));

        switch ($input->getArgument('action')) {
            case 'report':
                foreach ($service->getReportList() as $item) {
                    $service->deleteReport($item->getReportID());
                }
                break;
            case 'forecast':
                foreach ($service->getForecastList() as $item) {
                    $service->deleteForecastReport($item->getForecastID());
                }
                break;
            case 'wordstat':
                foreach ($service->getWordstatReportList() as $item) {
                    $service->deleteWordstatReport($item->getReportID());
                }
                break;
            default:
                $output->writeln(sprintf(
                    '<error>Invalid type "%s". Allowed: report, forecast, wordstat</error>',
                    $input->getArgument('action')
                ));

                return 1;
        }

        $output->writeln('<info>Done</info>');

        return 0;
    }

    /**
     * Gets the API service.
     *
     * @param string|null $profile The profile name or null
     *
     * @return YandexApiService
     */
    private function getApiService($profile)
    {
        return $this->getContainer()->get('biplane_yandex_direct.api.factory')
            ->createApiService($profile);
    }
}