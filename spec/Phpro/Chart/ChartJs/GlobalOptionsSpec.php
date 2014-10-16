<?php

namespace spec\Phpro\Chart\ChartJs;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GlobalOptionsSpec extends ObjectBehavior
{
    public function it_is_an_options_object()
    {
        $this->shouldImplement('Phpro\Chart\ChartJs\OptionsInterface');
    }

    public function it_is_configurable_through_options()
    {
        $this->shouldHaveType('Zend\Stdlib\AbstractOptions');
    }

    public function it_is_json_serializable()
    {
        $this->jsonSerialize()->shouldBeArray();
    }
}
