<?php

namespace Biplane\Bundle\YandexDirectBundle\DependencyInjection;

use Biplane\YandexDirect\User;
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
            ->children()
                ->arrayNode('auth')
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('app_id')
                            ->isRequired()
                            ->cannotBeEmpty()
                            ->info('The identifier of application for OAuth authorization.')
                        ->end()
                        ->scalarNode('app_secret')
                            ->isRequired()
                            ->cannotBeEmpty()
                            ->info('The secret key of application for OAuth authorization.')
                        ->end()
                    ->end()
                ->end()
                ->enumNode('locale')
                    ->defaultValue(User::LOCALE_RU)
                    ->values(array(
                        User::LOCALE_RU,
                        User::LOCALE_EN,
                        User::LOCALE_UA,
                    ))
                    ->info('The locale for localize message of errors.')
                ->end()
                ->arrayNode('user')
                    ->canBeUnset()
                    ->children()
                        ->scalarNode('access_token')
                            ->isRequired()
                            ->cannotBeEmpty()
                            ->info('The access token for OAuth authorization')
                        ->end()
                        ->scalarNode('login')
                            ->info('The Yandex\'s login. Required when the master_token is set.')
                        ->end()
                        ->scalarNode('master_token')
                            ->info('The master token needs for finance operations.')
                        ->end()
                    ->end()
                    ->validate()
                        ->ifTrue(function($v) { return isset($v['master_token']) && empty($v['login']); })
                        ->thenInvalid('The login has to be specified.')
                    ->end()
                ->end()
                ->arrayNode('concurrent_listener')
                    ->canBeEnabled()
                    ->info('Restricts a number of concurrent connections to API.')
                    ->children()
                        ->integerNode('connections')
                            ->defaultValue(12)
                            ->min(1)
                            ->max(12)
                            ->info('A number between 1 and 12.')
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('dump_listener')
                    ->canBeEnabled()
                    ->children()
                        ->enumNode('dump')
                            ->defaultValue('all')
                            ->values(array('all', 'only-fail'))
                        ->end()
                    ->end()
                ->end()
                ->arrayNode('dump')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('directory')->defaultValue('%kernel.cache_dir%/api_dumps')->end()
                    ->end()
                ->end()
                ->arrayNode('ipc')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('directory')
                            ->defaultValue('%kernel.cache_dir%/ipc')
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
