<?php

namespace spec\Phpro\Chart\View\Helper;

use Phpro\Chart\ChartInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Zend\View\Model\ViewModel;
use Zend\View\Renderer\RendererInterface as Renderer;

class ChartJsSpec extends ObjectBehavior
{

    public function let(Renderer $view)
    {
        $this->setView($view);
    }

    public function it_is_a_view_helper()
    {
        $this->shouldHaveType('Zend\View\Helper\AbstractHelper');
    }

    public function it_should_render_chartjs_charts(Renderer $view, ChartInterface $chart)
    {
        $view->render(Argument::that(function($viewModel) use ($chart) {
            return $viewModel instanceof ViewModel
                && $viewModel->getTemplate() === 'zf-charts/chartjs'
                && $viewModel->getVariable('chart') === $chart->getWrappedObject()
                && $viewModel->getVariable('width') === 100
                && $viewModel->getVariable('height') === 100
                && $viewModel->getVariable('showLegend') === false;
        }))->willReturn('chart-html');

        $this->markAsInitialized(true);
        $this->render($chart, [
            'width' => 100,
            'height' => 100,
            'show_legend' => false,
        ])->shouldBe('chart-html');
    }

}
