<?php

namespace Biplane\YandexDirectBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Biplane\YandexDirectBundle\Factory\ClientFactory;

/**
 * Configuration
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('biplane_yandex_direct');

        $rootNode
            ->fixXmlConfig('profile')
            ->children()
                ->scalarNode('default_profile')->defaultNull()->end()
                ->arrayNode('profiles')
                    ->canBeUnset()
                    ->useAttributeAsKey('name')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('type')
                                ->isRequired()
                                ->validate()
                                    // TODO: запретим пока json клиент на уровне конфига
                                    ->ifNotInArray(array(/*ClientFactory::TYPE_JSON,*/ ClientFactory::TYPE_SOAP))
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
                        ->end()
                        ->append($this->getCertificateConfig())
                        ->append($this->getTokenConfig())
                        ->validate()
                            ->ifTrue(function($v) { return isset($v['cert']) && isset($v['token']); })
                            ->thenInvalid('At the same time can not be specified the cert and token section.')
                        ->end()
                        ->validate()
                            ->ifTrue(function($v) { return !isset($v['cert']) && !isset($v['token']); })
                            ->thenInvalid('The cert or token section has to be specified.')
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }

    private function getCertificateConfig()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('cert');

        $node
            ->canBeUnset()
            ->children()
                ->scalarNode('local_cert')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $node;
    }

    private function getTokenConfig()
    {
        $builder = new TreeBuilder();
        $node = $builder->root('token');

        $node
            ->canBeUnset()
            ->children()
                ->scalarNode('login')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('application_id')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('token')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $node;
    }
}