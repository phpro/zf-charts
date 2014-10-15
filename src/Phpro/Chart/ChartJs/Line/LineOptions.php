<?php

namespace Phpro\Chart\ChartJs\Line;

use Phpro\Chart\ChartJs\GlobalOptions;

/**
 * Class LineOptions
 * @link http://www.chartjs.org/docs/#line-chart-chart-options
 *
 * @package Phpro\Chart\ChartJs\Line
 */
class LineOptions extends GlobalOptions
{

    /**
     * @var bool
     */
    protected $scaleShowGridLines = true;

    /**
     * @var string
     */
    protected $scaleGridLineColor = 'rgba(0,0,0,.05)';

    /**
     * @var int
     */
    protected $scaleGridLineWidth = 1;

    /**
     * @var bool
     */
    protected $bezierCurve = true;

    /**
     * @var float
     */
    protected $bezierCurveTension = 0.4;

    /**
     * @var bool
     */
    protected $pointDot = true;

    /**
     * @var int
     */
    protected $pointDotRadius = 4;

    /**
     * @var int
     */
    protected $pointDotStrokeWidth = 1;

    /**
     * @var int
     */
    protected $pointHitDetectionRadius = 20;

    /**
     * @var bool
     */
    protected $datasetStroke = true;

    /**
     * @var int
     */
    protected $datasetStrokeWidth = 2;

    /**
     * @var bool
     */
    protected $datasetFill = true;

    /**
     * @var string
     */
    protected $legendTemplate = '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>';

    /**
     * @return boolean
     */
    public function isBezierCurve()
    {
        return $this->bezierCurve;
    }

    /**
     * @param boolean $bezierCurve
     */
    public function setBezierCurve($bezierCurve)
    {
        $this->bezierCurve = $bezierCurve;
    }

    /**
     * @return float
     */
    public function getBezierCurveTension()
    {
        return $this->bezierCurveTension;
    }

    /**
     * @param float $bezierCurveTension
     */
    public function setBezierCurveTension($bezierCurveTension)
    {
        $this->bezierCurveTension = $bezierCurveTension;
    }

    /**
     * @return boolean
     */
    public function isDatasetFill()
    {
        return $this->datasetFill;
    }

    /**
     * @param boolean $datasetFill
     */
    public function setDatasetFill($datasetFill)
    {
        $this->datasetFill = $datasetFill;
    }

    /**
     * @return boolean
     */
    public function isDatasetStroke()
    {
        return $this->datasetStroke;
    }

    /**
     * @param boolean $datasetStroke
     */
    public function setDatasetStroke($datasetStroke)
    {
        $this->datasetStroke = $datasetStroke;
    }

    /**
     * @return int
     */
    public function getDatasetStrokeWidth()
    {
        return $this->datasetStrokeWidth;
    }

    /**
     * @param int $datasetStrokeWidth
     */
    public function setDatasetStrokeWidth($datasetStrokeWidth)
    {
        $this->datasetStrokeWidth = $datasetStrokeWidth;
    }

    /**
     * @return string
     */
    public function getLegendTemplate()
    {
        return $this->legendTemplate;
    }

    /**
     * @param string $legendTemplate
     */
    public function setLegendTemplate($legendTemplate)
    {
        $this->legendTemplate = $legendTemplate;
    }

    /**
     * @return boolean
     */
    public function isPointDot()
    {
        return $this->pointDot;
    }

    /**
     * @param boolean $pointDot
     */
    public function setPointDot($pointDot)
    {
        $this->pointDot = $pointDot;
    }

    /**
     * @return int
     */
    public function getPointDotRadius()
    {
        return $this->pointDotRadius;
    }

    /**
     * @param int $pointDotRadius
     */
    public function setPointDotRadius($pointDotRadius)
    {
        $this->pointDotRadius = $pointDotRadius;
    }

    /**
     * @return int
     */
    public function getPointDotStrokeWidth()
    {
        return $this->pointDotStrokeWidth;
    }

    /**
     * @param int $pointDotStrokeWidth
     */
    public function setPointDotStrokeWidth($pointDotStrokeWidth)
    {
        $this->pointDotStrokeWidth = $pointDotStrokeWidth;
    }

    /**
     * @return int
     */
    public function getPointHitDetectionRadius()
    {
        return $this->pointHitDetectionRadius;
    }

    /**
     * @param int $pointHitDetectionRadius
     */
    public function setPointHitDetectionRadius($pointHitDetectionRadius)
    {
        $this->pointHitDetectionRadius = $pointHitDetectionRadius;
    }

    /**
     * @return string
     */
    public function getScaleGridLineColor()
    {
        return $this->scaleGridLineColor;
    }

    /**
     * @param string $scaleGridLineColor
     */
    public function setScaleGridLineColor($scaleGridLineColor)
    {
        $this->scaleGridLineColor = $scaleGridLineColor;
    }

    /**
     * @return int
     */
    public function getScaleGridLineWidth()
    {
        return $this->scaleGridLineWidth;
    }

    /**
     * @param int $scaleGridLineWidth
     */
    public function setScaleGridLineWidth($scaleGridLineWidth)
    {
        $this->scaleGridLineWidth = $scaleGridLineWidth;
    }

    /**
     * @return boolean
     */
    public function isScaleShowGridLines()
    {
        return $this->scaleShowGridLines;
    }

    /**
     * @param boolean $scaleShowGridLines
     */
    public function setScaleShowGridLines($scaleShowGridLines)
    {
        $this->scaleShowGridLines = $scaleShowGridLines;
    }

}
