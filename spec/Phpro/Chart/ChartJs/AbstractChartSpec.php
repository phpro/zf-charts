<?php

namespace spec\Phpro\Chart\ChartJs;

use Phpro\Chart\ChartJs\DataInterface;
use Phpro\Chart\ChartJs\OptionsInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

abstract class AbstractChartSpec extends ObjectBehavior
{

    public function let(OptionsInterface $options, DataInterface $data)
    {
        $this->beConstructedWith($options, $data);
    }

    public function it_is_a_chartjs_chart()
    {
        $this->shouldHaveType('Phpro\Chart\ChartJs\ChartJsInterface');
    }

    public function it_should_have_options(OptionsInterface $options)
    {
        $this->getOptions()->shouldReturn($options);
    }

    public function it_should_have_data(DataInterface $data)
    {
        $this->getData()->shouldReturn($data);
    }

}
