<?php

namespace EOI\BlackboardBundle\DependencyInjection;

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
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('eoi_blackboard');

        $rootNode
            ->children()
                ->append($this->addProxyToolNode())
                ->end()
            ->end()
        ;

        // Here you should define the parameters that are allowed to
        // configure your bundle. See the documentation linked above for
        // more information on that topic.

        return $treeBuilder;
    }

    private function addProxyToolNode()
    {
        $treeBuilder = new TreeBuilder();
        $node = $treeBuilder->root('proxy_tool');

        $node
            ->isRequired()
            ->children()
                ->scalarNode('password')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('clientVendorId')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('clientProgramId')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('loginExtraInfo')->end()
                ->scalarNode('expectedLifeSeconds')->defaultValue(2)->end()
            ->end()
        ;

        return $node;
    }
}
