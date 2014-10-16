<?php

namespace spec\Phpro\Chart\ChartJs\Line;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LineOptionsSpec extends ObjectBehavior
{

    public function it_should_extend_the_global_options()
    {
        $this->shouldHaveType('Phpro\Chart\ChartJs\GlobalOptions');
    }

}
