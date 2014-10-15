<?php

namespace Phpro\Chart;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\DependencyIndicatorInterface;

/**
 * Class Module
 *
 * @package Phpro\Chart
 */
class Module
    implements ConfigProviderInterface
{

    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/../../../config/module.config.php';
    }

    /**
     * @return array
     */
    public function getModuleDependencies()
    {
        return ['AssetManager'];
    }

}
