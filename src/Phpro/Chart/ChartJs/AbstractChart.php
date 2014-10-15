<?php

namespace Phpro\Chart\ChartJs;

/**
 * Class AbstractChart
 *
 * @package Phpro\Chart\ChartJs
 */
abstract class AbstractChart
    implements ChartJsInterface
{

    /**
     * The type of the chart
     * @var string
     */
    protected $type = '';

    /**
     * @var mixed
     */
    protected $data;

    /**
     * @var GlobalOptions
     */
    protected $options;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return GlobalOptions
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

}
