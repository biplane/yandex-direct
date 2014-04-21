<?php

namespace Biplane\YandexDirectBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

/**
 * BiplaneYandexDirectExtension
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class BiplaneYandexDirectExtension extends ConfigurableExtension
{
    /**
     * {@inheritdoc}
     */
    protected function loadInternal(array $config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');

        $container->getDefinition('biplane_yandex_direct.auth')->setArguments(array(
            $config['application_id'],
            $config['application_secret'],
        ));

        // коллекция профилей
        $profilesDefs = array();

        foreach ($config['profiles'] as $name => $options) {
            if (empty($options['login'])) {
                $options['login'] = $name;
            }

            // конфигурация для клиента
            $profilesDefs[$name] = $configDef = new Definition();
            $configDef
                ->setPublic(false)
                ->addMethodCall('setLocale', array($options['locale']));

            if (!empty($options['master_token'])) {
                $configDef->addMethodCall('setMasterToken', array($options['master_token']));
            }

            if (isset($options['cert'])) {
                $configDef
                    ->setClass('Biplane\\YandexDirectBundle\\Configuration\\CertificateConfiguration')
                    ->addArgument($options['login'])
                    ->addArgument($options['cert']);
            } else if (isset($options['token'])) {
                $configDef
                    ->setClass('Biplane\\YandexDirectBundle\\Configuration\\AuthTokenConfiguration')
                    ->addArgument($options['login'])
                    ->addArgument($options['token']);
            }
        }

        if (!empty($config['default_profile'])) {
            $container->getDefinition('biplane_yandex_direct.api.factory')
                ->addMethodCall('setDefaultProfile', array($config['default_profile']));
        }

        $container->getDefinition('biplane_yandex_direct.config.registry')
            ->addArgument($profilesDefs);

        $this->applyApiLimits($config['limits'], $container);
    }

    /**
     * Applies the API limits.
     *
     * @param array            $limits    The API limits configuration
     * @param ContainerBuilder $container A ContainerBuilder instance
     */
    private function applyApiLimits(array $limits, ContainerBuilder $container)
    {
        if (null !== $limit = $limits['max_connections']) {
            $container
                ->getDefinition('biplane_yandex_direct.event_listener.total_limits')
                ->replaceArgument(1, $limit);
        } else {
            $container->removeDefinition('biplane_yandex_direct.event_listener.total_limits');
        }
    }
}
