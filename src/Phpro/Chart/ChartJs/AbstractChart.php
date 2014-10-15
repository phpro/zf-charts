<?php

namespace Phpro\Chart\ChartJs;

use Phpro\Chart\ChartInterface;
use Zend\Stdlib\AbstractOptions;

/**
 * Class AbstractChart
 *
 * @package Phpro\Chart\ChartJs
 */
abstract class AbstractChart
    implements ChartInterface
{

    /**
     * The type of the chart
     * @var string
     */
    protected $type = '';

    /**
     * @var AbstractOptions[]
     */
    protected $data = [];

    /**
     * @var GlobalOptions
     */
    protected $options;

    /**
     * @return AbstractOptions[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param AbstractOptions $data
     */
    public function addData($data)
    {
        $this->data[] = $data;
    }

    /**
     * @return GlobalOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param GlobalOptions $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}
