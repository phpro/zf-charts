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
     * @var DataInterface
     */
    protected $data;

    /**
     * @var OptionsInterface
     */
    protected $options;

    /**
     * @param OptionsInterface $options
     * @param DataInterface $data
     */
    public function __construct(OptionsInterface $options = null, DataInterface $data = null)
    {
        $this->options = $options;
        $this->data = $data;
    }

    /**
     * @return DataInterface
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return OptionsInterface
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
