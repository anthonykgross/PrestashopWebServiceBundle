<?php

namespace KkuetNet\PrestashopWebServiceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('kkuet_net_prestashop_web_service');
        $rootNode
            ->children()
                ->scalarNode('website')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('key')->isRequired()->cannotBeEmpty()->end()
            ->end();
        return $treeBuilder;
    }
}
