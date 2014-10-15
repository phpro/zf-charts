<?php

namespace Phpro\Chart\ChartJs\Doughnut;

use Phpro\Chart\ChartJs\DatasetInterface;
use Zend\Stdlib\AbstractOptions;

/**
 * Class Data
 * @link http://www.chartjs.org/docs/#doughnut-pie-chart-data-structure
 *
 * @package Phpro\Chart\ChartJs\Doughnut
 */
class DoughnutDataSet extends AbstractOptions
    implements DatasetInterface
{

    /**
     * @var string
     */
    protected $label = 'label';

    /**
     * @var int
     */
    protected $value;

    /**
     * @var string
     */
    protected $color = '#F7464A';

    /**
     * @var string
     */
    protected $highlight = '#FF5A5E';

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = (string) $color;
    }

    /**
     * @return string
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * @param string $highlight
     */
    public function setHighlight($highlight)
    {
        $this->highlight = (string) $highlight;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = (string) $label;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = (int) $value;
    }

}
