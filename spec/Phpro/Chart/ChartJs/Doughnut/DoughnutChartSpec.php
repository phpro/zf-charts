<?php

namespace spec\Phpro\Chart\ChartJs\Doughnut;

use Phpro\Chart\ChartJs\Doughnut\DoughnutChart;
use Prophecy\Argument;
use spec\Phpro\Chart\ChartJs\AbstractChartSpec;

class DoughnutChartSpec extends AbstractChartSpec
{

    public function it_is_a_doughnut_chart()
    {
        $this->getType()->shouldReturn(DoughnutChart::TYPE);
    }

}
