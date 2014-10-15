<?php

namespace Phpro\Chart\ChartJs\Line;

use Phpro\Chart\ChartJs\DataInterface;
use Zend\Stdlib\AbstractOptions;

/**
 * Class LineData
 * @link http://www.chartjs.org/docs/#line-chart-data-structure
 *
 * @package Phpro\Chart\ChartJs\Line
 */
class LineData extends AbstractOptions
    implements DataInterface
{

    /**
     * @var array
     */
    protected $labels = array();

    /**
     * @var LineDataset[]
     */
    protected $datasets = array();

    /**
     * @return LineDataset[]
     */
    public function getDatasets()
    {
        return $this->datasets;
    }

    /**
     * @param $dataset
     */
    public function addDataset($dataset)
    {
        $this->datasets[] = $dataset;
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

}
