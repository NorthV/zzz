<?php

namespace Aaa\ZzzBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{


    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('aaa_zzz');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('bbb')->end()
                ->scalarNode('ccc')->end()
            ->end()
        ;

        return $treeBuilder;
    }

























}
