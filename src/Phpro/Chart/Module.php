<?php

namespace Application;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

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

}
