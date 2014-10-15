<?php

namespace Phpro\Chart\ChartJs\Line;

use Phpro\Chart\ChartJs\AbstractChart;

/**
 * Class LineChart
 *
 * @package Phpro\Chart\ChartJs\Line
 */
class LineChart extends AbstractChart
{

    const TYPE = 'Line';

    /**
     * @var string
     */
    protected $type = self::TYPE;

    /**
     * @return LineOptions
     */
    public function getOptions()
    {
        if (!$this->options) {
            $this->options = new LineOptions();
        }
        return $this->options;
    }

    /**
     * @return LineData
     */
    public function getData()
    {
        if (!$this->data) {
            $this->data = new LineData();
        }
        return $this->data;
    }

}
