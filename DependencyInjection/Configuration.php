<?php

namespace Chaplean\Bundle\KanbanizeApiClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link https://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('chaplean_kanbanize_api_client');
        if (method_exists($treeBuilder, 'root')) {
            $treeBuilder->root('chaplean_kanbanize_api_client');
        }

        return $treeBuilder;
    }
}
