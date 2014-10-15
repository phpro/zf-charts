<?php

namespace Phpro\Chart\ChartJs\Line;

use Zend\Stdlib\AbstractOptions;

/**
 * Class LineDataset
 * @link http://www.chartjs.org/docs/#line-chart-data-structure
 *
 * @package Phpro\Chart\ChartJs\Line
 */
class LineDataset extends AbstractOptions
{

    /**
     * @var string
     */
    protected $label = 'label';

    /**
     * @var string
     */
    protected $fillColor = 'rgba(151,187,205,0.2)';

    /**
     * @var string
     */
    protected $strokeColor = 'rgba(151,187,205,1)';

    /**
     * @var string
     */
    protected $pointColor = 'rgba(151,187,205,1)';

    /**
     * @var string
     */
    protected $pointStrokeColor = '#fff';

    /**
     * @var string
     */
    protected $pointHighlightFill = '#fff';

    /**
     * @var string
     */
    protected $pointHighlightStroke = 'rgba(151,187,205,1)';

    /**
     * @var int[]
     */
    protected $data = array ();

    /**
     * @return \int[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \int[] $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getFillColor()
    {
        return $this->fillColor;
    }

    /**
     * @param string $fillColor
     */
    public function setFillColor($fillColor)
    {
        $this->fillColor = $fillColor;
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
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getPointColor()
    {
        return $this->pointColor;
    }

    /**
     * @param string $pointColor
     */
    public function setPointColor($pointColor)
    {
        $this->pointColor = $pointColor;
    }

    /**
     * @return string
     */
    public function getPointHighlightFill()
    {
        return $this->pointHighlightFill;
    }

    /**
     * @param string $pointHighlightFill
     */
    public function setPointHighlightFill($pointHighlightFill)
    {
        $this->pointHighlightFill = $pointHighlightFill;
    }

    /**
     * @return string
     */
    public function getPointHighlightStroke()
    {
        return $this->pointHighlightStroke;
    }

    /**
     * @param string $pointHighlightStroke
     */
    public function setPointHighlightStroke($pointHighlightStroke)
    {
        $this->pointHighlightStroke = $pointHighlightStroke;
    }

    /**
     * @return string
     */
    public function getPointStrokeColor()
    {
        return $this->pointStrokeColor;
    }

    /**
     * @param string $pointStrokeColor
     */
    public function setPointStrokeColor($pointStrokeColor)
    {
        $this->pointStrokeColor = $pointStrokeColor;
    }

    /**
     * @return string
     */
    public function getStrokeColor()
    {
        return $this->strokeColor;
    }

    /**
     * @param string $strokeColor
     */
    public function setStrokeColor($strokeColor)
    {
        $this->strokeColor = $strokeColor;
    }

} 