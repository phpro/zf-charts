<?php

namespace Phpro\Chart\ChartJs\Doughnut;

use Phpro\Chart\ChartJs\AbstractChart;

/**
 * Class DoughnutChart
 *
 * @package Phpro\Chart\ChartJs\Doughnut
 */
class DoughnutChart
    extends AbstractChart
{

    const TYPE = 'Daughnut';

    /**
     * @var string
     */
    protected $type = self::TYPE;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @return DoughnutOptions
     */
    public function getOptions()
    {
        if (!$this->options) {
            $this->options = new DoughnutOptions();
        }
        return $this->options;
    }

    /**
     * @param DoughnutData $data
     */
    public function addData(DoughnutData $data)
    {
        $this->data[] = $data;
    }

}
