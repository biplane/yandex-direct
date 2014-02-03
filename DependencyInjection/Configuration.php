<?php

namespace Biplane\YandexDirectBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Biplane\YandexDirectBundle\ClientTypes;

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
                    ->info('The client ID for OAuth authorization.')
                ->end()
                ->arrayNode('profiles')
                    ->canBeUnset()
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('type')
                                ->defaultValue('soap')
                                ->validate()
                                    // TODO: запретим пока json клиент на уровне конфига
                                    ->ifNotInArray(array(/*ClientTypes::TYPE_JSON,*/ ClientTypes::TYPE_SOAP))
                                    ->thenInvalid('The "%s" client is not supported.')
                                ->end()
                            ->end()
                            ->scalarNode('locale')
                                ->defaultValue('ru')
                                ->validate()
                                    ->ifNotInArray(array('ru', 'en', 'ua'))
                                    ->thenInvalid('The "%s" locale is not supported.')
                                ->end()
                            ->end()
                            ->booleanNode('is_agency')->defaultFalse()->end()
                            ->scalarNode('login')->
                                info('The Yandex account name. If empty, will be used a profile name')
                            ->end()
                            ->scalarNode('master_token')->end()
                            ->scalarNode('cert')->info('Path to a sertificate file (*.pem)')->end()
                            ->scalarNode('token')->info('The access token for OAuth authorization')->end()
                        ->end()
                        ->validate()
                            ->ifTrue(function($v) { return isset($v['cert']) && isset($v['token']); })
                            ->thenInvalid('At the same time can not be specified the cert and the access token.')
                        ->end()
                        ->validate()
                            ->ifTrue(function($v) { return !isset($v['cert']) && !isset($v['token']); })
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
