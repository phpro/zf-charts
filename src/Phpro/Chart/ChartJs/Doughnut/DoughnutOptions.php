<?php

namespace Phpro\Chart\ChartJs\Doughnut;

use Phpro\Chart\ChartJs\GlobalOptions;

/**
 * Class Options
 * @link http://www.chartjs.org/docs/#doughnut-pie-chart-chart-options
 *
 * @package Phpro\Chart\ChartJs\Doughnut
 */
class DoughnutOptions extends GlobalOptions
{

    /**
     * @var bool
     */
    protected $segmentShowStroke = true;

    /**
     * @var string
     */
    protected $segmentStrokeColor = '#fff';

    /**
     * @var int
     */
    protected $segmentStrokeWidth = 2;

    /**
     * @var int
     */
    protected $percentageInnerCutout = 50;

    /**
     * @var int
     */
    protected $animationSteps = 100;

    /**
     * @var string
     */
    protected $animationEasing = 'easeOutBounce';

    /**
     * @var bool
     */
    protected $animateRotate = true;

    /**
     * @var bool
     */
    protected $animateScale = false;

    /**
     * @var string
     */
    protected $legendTemplate = '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>';

    /**
     * @return boolean
     */
    public function isAnimateRotate()
    {
        return $this->animateRotate;
    }

    /**
     * @param boolean $animateRotate
     */
    public function setAnimateRotate($animateRotate)
    {
        $this->animateRotate = $animateRotate;
    }

    /**
     * @return boolean
     */
    public function isAnimateScale()
    {
        return $this->animateScale;
    }

    /**
     * @param boolean $animateScale
     */
    public function setAnimateScale($animateScale)
    {
        $this->animateScale = $animateScale;
    }

    /**
     * @return string
     */
    public function getAnimationEasing()
    {
        return $this->animationEasing;
    }

    /**
     * @param string $animationEasing
     */
    public function setAnimationEasing($animationEasing)
    {
        $this->animationEasing = $animationEasing;
    }

    /**
     * @return int
     */
    public function getAnimationSteps()
    {
        return $this->animationSteps;
    }

    /**
     * @param int $animationSteps
     */
    public function setAnimationSteps($animationSteps)
    {
        $this->animationSteps = $animationSteps;
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
     * @return int
     */
    public function getPercentageInnerCutout()
    {
        return $this->percentageInnerCutout;
    }

    /**
     * @param int $percentageInnerCutout
     */
    public function setPercentageInnerCutout($percentageInnerCutout)
    {
        $this->percentageInnerCutout = $percentageInnerCutout;
    }

    /**
     * @return boolean
     */
    public function isSegmentShowStroke()
    {
        return $this->segmentShowStroke;
    }

    /**
     * @param boolean $segmentShowStroke
     */
    public function setSegmentShowStroke($segmentShowStroke)
    {
        $this->segmentShowStroke = $segmentShowStroke;
    }

    /**
     * @return string
     */
    public function getSegmentStrokeColor()
    {
        return $this->segmentStrokeColor;
    }

    /**
     * @param string $segmentStrokeColor
     */
    public function setSegmentStrokeColor($segmentStrokeColor)
    {
        $this->segmentStrokeColor = $segmentStrokeColor;
    }

    /**
     * @return int
     */
    public function getSegmentStrokeWidth()
    {
        return $this->segmentStrokeWidth;
    }

    /**
     * @param int $segmentStrokeWidth
     */
    public function setSegmentStrokeWidth($segmentStrokeWidth)
    {
        $this->segmentStrokeWidth = $segmentStrokeWidth;
    }

}
