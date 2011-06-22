<?php

namespace Biplane\YandexDirectBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * BiplaneYandexDirectExtension
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class BiplaneYandexDirectExtension extends Extension
{
    /**
     * @param array $configs
     * @param ContainerBuilder $container
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
        
        $processor = new Processor();
        $configuration = new Configuration();

        $config = $processor->processConfiguration($configuration, $configs);

        // коллекция профилей
        $profilesDefs = array();

        foreach ($config['profiles'] as $name => $options) {
            // конфигурация для клиента
            $configDef = new Definition();
            $configDef->setPublic(false);

            if (isset($options['cert'])) {
                $configDef
                    ->setClass('Biplane\\YandexDirectBundle\\Configuration\\CertificateConfiguration')
                    ->addArgument($options['cert']['local_cert'])
                ;
            }
            else if (isset($options['token'])) {
                $configDef
                    ->setClass('Biplane\\YandexDirectBundle\\Configuration\\AuthTokenConfiguration')
                    ->addArgument($options['token']['login'])
                    ->addArgument($options['token']['application_id'])
                    ->addArgument($options['token']['token'])
                ;
            }

            $profileDef = new Definition('Biplane\\YandexDirectBundle\\Profile\\Profile');
            $profileDef
                ->addArgument($options['type'])
                ->addArgument($configDef)
            ;

            $profilesDefs[$name] = $profileDef;
        }

        $container->getDefinition('biplane_yandex_direct.api.factory')
            ->replaceArgument(2, $config['default_profile']);

        $container->getDefinition('biplane_yandex_direct.profile.manager')
            ->replaceArgument(0, $profilesDefs);
    }
}