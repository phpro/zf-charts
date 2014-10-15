<?php

namespace Phpro\Chart\ChartJs\Doughnut;

use Phpro\Chart\ChartInterface;
use Phpro\Chart\ChartJs\AbstractChart;
use Zend\Stdlib\ArrayObject;

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
     * @var ArrayObject
     */
    protected $data;

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
     * @return ArrayObject
     */
    public function getData()
    {
        if (!$this->data) {
            $this->data = new ArrayObject();
        }
        return $this->data;
    }

}
