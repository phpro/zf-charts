<?php

namespace Phpro\Chart\View\Helper;

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
     * Indicates if the chartJS script is already initialized
     * @var bool
     */
    protected $chartJsInitialized = false;

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
        $this->initializeChartJs();
        $viewModel = new ViewModel([
            'id' => 'chart-' . spl_object_hash($chart),
            'chart' => $chart,
            'width' => 400,
            'height' => 400,
        ]);
        $viewModel->setTemplate('zf-charts/chartjs');

        return $this->getView()->render($viewModel);
    }

    /**
     * Initialize ChartJS in headscript
     */
    protected function initializeChartJs()
    {
        if ($this->chartJsInitialized) {
            return;
        }

        $this->getView()->headScript()->appendFile(
            '/zf-charts/vendor/Chart.js/chart.min.js',
            'text/javascript'
        );
        $this->chartJsInitialized = true;
    }
}
