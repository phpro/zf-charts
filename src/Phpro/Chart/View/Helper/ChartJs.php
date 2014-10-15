<?php

namespace Phpro\Chart\View\Hepler;

use Phpro\Chart\ChartInterface;
use Zend\View\Helper\AbstractHelper;
use Zend\View\Model\ViewModel;

/**
 * Class ChartJs
 *
 * @package Phpro\Chart\View\Hepler
 */
class ChartJs extends AbstractHelper
{

    /**
     * @param null|ChartInterface $chart
     * @return string|self
     */
    public function __invoke($chart = null)
    {
        if (null === $chart) {
            return $this;
        }

        return $this->render($chart);
    }

    /**
     * @param ChartInterface $chart
     *
     * @return string
     */
    public function render($chart)
    {
        $viewModel = new ViewModel();
        $viewModel->setTemplate('zf-charts/chartjs.phtml');
        $viewModel->setVariable('chart', $chart);
        $viewModel->setVariable('id', spl_object_hash($chart));

        return $this->getView()->render($viewModel);
    }

}
