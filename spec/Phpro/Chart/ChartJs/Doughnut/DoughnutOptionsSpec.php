<?php

namespace spec\Phpro\Chart\ChartJs\Doughnut;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DoughnutOptionsSpec extends ObjectBehavior
{

    public function it_should_extend_the_global_options()
    {
        $this->shouldHaveType('Phpro\Chart\ChartJs\GlobalOptions');
    }

}
