<?php

namespace Biplane\YandexDirectBundle\DependencyInjection;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('biplane_yandex_direct');

        $rootNode
            ->fixXmlConfig('profile')
            ->children()
                ->scalarNode('default_profile')->defaultNull()->end()
                ->scalarNode('application_id')
                    ->defaultNull()
                    ->info('The identifier of application for OAuth authorization.')
                ->end()
                ->scalarNode('application_secret')
                    ->defaultNull()
                    ->info('The secret key of application for OAuth authorization.')
                ->end()
                ->arrayNode('profiles')
                    ->canBeUnset()
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->children()
                            ->enumNode('locale')
                                ->defaultValue(BaseConfiguration::LOCALE_RU)
                                ->values(array(
                                    BaseConfiguration::LOCALE_RU,
                                    BaseConfiguration::LOCALE_EN,
                                    BaseConfiguration::LOCALE_UA,
                                ))
                                ->info('The locale for localize message of errors.')
                            ->end()
                            ->scalarNode('login')
                                ->info('The Yandex account name. If empty, will be used a profile name')
                            ->end()
                            ->scalarNode('master_token')
                                ->info('The master token needs for finance operations.')
                            ->end()
                            ->scalarNode('cert_file')
                                ->info('Path to a sertificate file (*.pem)')
                            ->end()
                            ->scalarNode('access_token')
                                ->info('The access token for OAuth authorization')
                            ->end()
                        ->end()
                        ->validate()
                            ->ifTrue(function($v) { return isset($v['cert_file']) && isset($v['access_token']); })
                            ->thenInvalid('At the same time can not be specified the cert and the access token.')
                        ->end()
                        ->validate()
                            ->ifTrue(function($v) { return !isset($v['cert_file']) && !isset($v['access_token']); })
                            ->thenInvalid('The cert or the access token has to be specified.')
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('limits')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('max_connections')
                            ->defaultValue(12)
                            ->validate()
                                ->always(function ($v) {
                                    return $v >= 1 ? $v : null;
                                })
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
