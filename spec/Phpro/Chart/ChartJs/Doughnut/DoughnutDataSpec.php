<?php

namespace spec\Phpro\Chart\ChartJs\Doughnut;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DoughnutDataSpec extends ObjectBehavior
{
    public function it_is_a_data_object()
    {
        $this->shouldImplement('Phpro\Chart\ChartJs\DataInterface');
    }

    public function it_is_json_serializable()
    {
        $this->jsonSerialize()->shouldBeArray();
    }
}
