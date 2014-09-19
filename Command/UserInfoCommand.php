<?php

namespace Biplane\YandexDirectBundle\Command;

use Biplane\YandexDirectBundle\Service\Authenticator;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * UserInfoCommand
 *
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class UserInfoCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('biplane:yandex-direct:user-info')
            ->setDescription("Fetches user's info by the access token.")
            ->addArgument('token', InputArgument::REQUIRED, 'The access token.')
            ->setHelp(<<<EOF
The <info>%command.name%</info> command fetches user info
for the specified access token.

  <info>php %command.full_name% access-token</info>
EOF
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /** @var Authenticator $service */
        $service = $this->getContainer()->get('biplane_yandex_direct.auth');

        $userInfo = $service->getUserInfo($input->getArgument('token'));

        if ($output->getVerbosity() >= OutputInterface::VERBOSITY_VERBOSE) {
            $output->writeln(print_r($userInfo, true), OutputInterface::OUTPUT_RAW);
        } else {
            $output->writeln('  <comment>ID:</comment>    ' . $userInfo->getId());
            $output->writeln('  <comment>Login:</comment> ' . $userInfo->getLogin());
        }

        return 0;
    }
}
