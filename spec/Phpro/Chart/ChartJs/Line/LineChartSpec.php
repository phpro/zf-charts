<?php

namespace spec\Phpro\Chart\ChartJs\Line;

use Phpro\Chart\ChartJs\Line\LineChart;
use Prophecy\Argument;
use spec\Phpro\Chart\ChartJs\AbstractChartSpec;

class LineChartSpec extends AbstractChartSpec
{

    public function it_is_a_line_chart()
    {
        $this->getType()->shouldReturn(LineChart::TYPE);
    }

}
