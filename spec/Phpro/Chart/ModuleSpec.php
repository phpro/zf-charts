<?php

namespace spec\Phpro\Chart;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ModuleSpec extends ObjectBehavior
{

    /**
     * should provide configuration
     */
    public function it_should_provide_configuration()
    {
        $this->shouldImplement('Zend\ModuleManager\Feature\ConfigProviderInterface');
    }

    public function it_should_be_dependent_on_other_modules()
    {
        $this->shouldImplement('Zend\ModuleManager\Feature\DependencyIndicatorInterface');
    }
}
