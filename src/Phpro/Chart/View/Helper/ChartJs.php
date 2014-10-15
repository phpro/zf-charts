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
     * @param array $options
     *
     * @return string|self
     */
    public function __invoke($chart = null, $options = [])
    {
        if (null === $chart) {
            return $this;
        }

        return $this->render($chart, $options);
    }

    /**
     * Call this method if you want to include chartJS yourself!
     */
    public function markAsInitialized()
    {
        $this->chartJsInitialized = true;
    }

    /**
     * @param ChartInterface $chart
     * @param array $options
     *
     * @return string
     */
    public function render($chart, $options = [])
    {
        $this->initializeChartJs();

        $viewModel = new ViewModel([
            'id' => spl_object_hash($chart),
            'chart' => $chart,
            'width' => isset($options['width']) ? $options['width'] : 400,
            'height' => isset($options['height']) ? $options['height'] : 400,
            'showLegend' => isset($options['show_legend']) ? $options['show_legend'] : true,
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
            '/zf-charts/vendor/Chart.js/Chart.min.js',
            'text/javascript'
        );
       $this->markAsInitialized();
    }
}
