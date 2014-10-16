<?php

namespace spec\Phpro\Chart\ChartJs\Line;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LineDataSpec extends ObjectBehavior
{
    public function it_is_a_data_object()
    {
        $this->shouldImplement('Phpro\Chart\ChartJs\DataInterface');
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
