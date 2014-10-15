<?php

namespace Phpro\Chart\ChartJs;

use Zend\Stdlib\AbstractOptions;

/**
 * Class GlobalOptions
 * @link http://www.chartjs.org/docs/#getting-started-global-chart-configuration
 *
 * @package Phpro\Chart\ChartJs
 */
class GlobalOptions extends AbstractOptions
{
    /**
     * @var bool
     */
    protected $animation = true;

    /**
     * @var int
     */
    protected $animationSteps = 60;

    /**
     * @var string
     */
    protected $animationEasing = 'easeOutQuart';

    /**
     * @var bool
     */
    protected $showScale = true;

    /**
     * @var bool
     */
    protected $scaleOverride = false;

    /**
     * @var int
     */
    protected $scaleSteps = NULL;

    /**
     * @var int
     */
    protected $scaleStepWidth = NULL;

    /**
     * @var int
     */
    protected $scaleStartValue = NULL;

    /**
     * @var string
     */
    protected $scaleLineColor = 'rgba(0,0,0,.1)';

    /**
     * @var int
     */
    protected $scaleLineWidth = 1;

    /**
     * @var bool
     */
    protected $scaleShowLabels = true;

    /**
     * @var string
     */
    protected $scaleLabel = '<%=value%>';

    /**
     * @var bool
     */
    protected $scaleIntegersOnly = true;

    /**
     * @var bool
     */
    protected $scaleBeginAtZero = false;

    /**
     * @var string
     */
    protected $scaleFontFamily = '\'Helvetica Neue\', \'Helvetica\', \'Arial\', sans-serif';

    /**
     * @var int
     */
    protected $scaleFontSize = 12;

    /**
     * @var string
     */
    protected $scaleFontStyle = 'normal';

    /**
     * @var string
     */
    protected $scaleFontColor = '#666';

    /**
     * @var bool
     */
    protected $responsive = false;

    /**
     * @var bool
     */
    protected $maintainAspectRatio = true;

    /**
     * @var bool
     */
    protected $showTooltips = true;

    /**
     * @var array
     */
    protected $tooltipEvents = array (
        0 => 'mousemove',
        1 => 'touchstart',
        2 => 'touchmove',
    );

    /**
     * @var string
     */
    protected $tooltipFillColor = 'rgba(0,0,0,0.8)';

    /**
     * @var string
     */
    protected $tooltipFontFamily = '\'Helvetica Neue\', \'Helvetica\', \'Arial\', sans-serif';

    /**
     * @var int
     */
    protected $tooltipFontSize = 14;

    /**
     * @var string
     */
    protected $tooltipFontStyle = 'normal';

    /**
     * @var string
     */
    protected $tooltipFontColor = '#fff';

    /**
     * @var string
     */
    protected $tooltipTitleFontFamily = '\'Helvetica Neue\', \'Helvetica\', \'Arial\', sans-serif';

    /**
     * @var int
     */
    protected $tooltipTitleFontSize = 14;

    /**
     * @var string
     */
    protected $tooltipTitleFontStyle = 'bold';

    /**
     * @var string
     */
    protected $tooltipTitleFontColor = '#fff';

    /**
     * @var int
     */
    protected $tooltipYPadding = 6;

    /**
     * @var int
     */
    protected $tooltipXPadding = 6;

    /**
     * @var int
     */
    protected $tooltipCaretSize = 8;

    /**
     * @var int
     */
    protected $tooltipCornerRadius = 6;

    /**
     * @var int
     */
    protected $tooltipXOffset = 10;

    /**
     * @var string
     */
    protected $tooltipTemplate = '<%if (label){%><%=label%>: <%}%><%= value %>';

    /**
     * @var string
     */
    protected $multiTooltipTemplate = '<%= value %>';

    /**
     * @return boolean
     */
    public function isAnimation()
    {
        return $this->animation;
    }

    /**
     * @param boolean $animation
     */
    public function setAnimation($animation)
    {
        $this->animation = $animation;
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
     * @return boolean
     */
    public function isMaintainAspectRatio()
    {
        return $this->maintainAspectRatio;
    }

    /**
     * @param boolean $maintainAspectRatio
     */
    public function setMaintainAspectRatio($maintainAspectRatio)
    {
        $this->maintainAspectRatio = $maintainAspectRatio;
    }

    /**
     * @return string
     */
    public function getMultiTooltipTemplate()
    {
        return $this->multiTooltipTemplate;
    }

    /**
     * @param string $multiTooltipTemplate
     */
    public function setMultiTooltipTemplate($multiTooltipTemplate)
    {
        $this->multiTooltipTemplate = $multiTooltipTemplate;
    }

    /**
     * @return boolean
     */
    public function isResponsive()
    {
        return $this->responsive;
    }

    /**
     * @param boolean $responsive
     */
    public function setResponsive($responsive)
    {
        $this->responsive = $responsive;
    }

    /**
     * @return boolean
     */
    public function isScaleBeginAtZero()
    {
        return $this->scaleBeginAtZero;
    }

    /**
     * @param boolean $scaleBeginAtZero
     */
    public function setScaleBeginAtZero($scaleBeginAtZero)
    {
        $this->scaleBeginAtZero = $scaleBeginAtZero;
    }

    /**
     * @return string
     */
    public function getScaleFontColor()
    {
        return $this->scaleFontColor;
    }

    /**
     * @param string $scaleFontColor
     */
    public function setScaleFontColor($scaleFontColor)
    {
        $this->scaleFontColor = $scaleFontColor;
    }

    /**
     * @return string
     */
    public function getScaleFontFamily()
    {
        return $this->scaleFontFamily;
    }

    /**
     * @param string $scaleFontFamily
     */
    public function setScaleFontFamily($scaleFontFamily)
    {
        $this->scaleFontFamily = $scaleFontFamily;
    }

    /**
     * @return int
     */
    public function getScaleFontSize()
    {
        return $this->scaleFontSize;
    }

    /**
     * @param int $scaleFontSize
     */
    public function setScaleFontSize($scaleFontSize)
    {
        $this->scaleFontSize = $scaleFontSize;
    }

    /**
     * @return string
     */
    public function getScaleFontStyle()
    {
        return $this->scaleFontStyle;
    }

    /**
     * @param string $scaleFontStyle
     */
    public function setScaleFontStyle($scaleFontStyle)
    {
        $this->scaleFontStyle = $scaleFontStyle;
    }

    /**
     * @return boolean
     */
    public function isScaleIntegersOnly()
    {
        return $this->scaleIntegersOnly;
    }

    /**
     * @param boolean $scaleIntegersOnly
     */
    public function setScaleIntegersOnly($scaleIntegersOnly)
    {
        $this->scaleIntegersOnly = $scaleIntegersOnly;
    }

    /**
     * @return string
     */
    public function getScaleLabel()
    {
        return $this->scaleLabel;
    }

    /**
     * @param string $scaleLabel
     */
    public function setScaleLabel($scaleLabel)
    {
        $this->scaleLabel = $scaleLabel;
    }

    /**
     * @return string
     */
    public function getScaleLineColor()
    {
        return $this->scaleLineColor;
    }

    /**
     * @param string $scaleLineColor
     */
    public function setScaleLineColor($scaleLineColor)
    {
        $this->scaleLineColor = $scaleLineColor;
    }

    /**
     * @return int
     */
    public function getScaleLineWidth()
    {
        return $this->scaleLineWidth;
    }

    /**
     * @param int $scaleLineWidth
     */
    public function setScaleLineWidth($scaleLineWidth)
    {
        $this->scaleLineWidth = $scaleLineWidth;
    }

    /**
     * @return boolean
     */
    public function isScaleOverride()
    {
        return $this->scaleOverride;
    }

    /**
     * @param boolean $scaleOverride
     */
    public function setScaleOverride($scaleOverride)
    {
        $this->scaleOverride = $scaleOverride;
    }

    /**
     * @return boolean
     */
    public function isScaleShowLabels()
    {
        return $this->scaleShowLabels;
    }

    /**
     * @param boolean $scaleShowLabels
     */
    public function setScaleShowLabels($scaleShowLabels)
    {
        $this->scaleShowLabels = $scaleShowLabels;
    }

    /**
     * @return null
     */
    public function getScaleStartValue()
    {
        return $this->scaleStartValue;
    }

    /**
     * @param null $scaleStartValue
     */
    public function setScaleStartValue($scaleStartValue)
    {
        $this->scaleStartValue = $scaleStartValue;
    }

    /**
     * @return null
     */
    public function getScaleStepWidth()
    {
        return $this->scaleStepWidth;
    }

    /**
     * @param null $scaleStepWidth
     */
    public function setScaleStepWidth($scaleStepWidth)
    {
        $this->scaleStepWidth = $scaleStepWidth;
    }

    /**
     * @return null
     */
    public function getScaleSteps()
    {
        return $this->scaleSteps;
    }

    /**
     * @param null $scaleSteps
     */
    public function setScaleSteps($scaleSteps)
    {
        $this->scaleSteps = $scaleSteps;
    }

    /**
     * @return boolean
     */
    public function isShowScale()
    {
        return $this->showScale;
    }

    /**
     * @param boolean $showScale
     */
    public function setShowScale($showScale)
    {
        $this->showScale = $showScale;
    }

    /**
     * @return boolean
     */
    public function isShowTooltips()
    {
        return $this->showTooltips;
    }

    /**
     * @param boolean $showTooltips
     */
    public function setShowTooltips($showTooltips)
    {
        $this->showTooltips = $showTooltips;
    }

    /**
     * @return int
     */
    public function getTooltipCaretSize()
    {
        return $this->tooltipCaretSize;
    }

    /**
     * @param int $tooltipCaretSize
     */
    public function setTooltipCaretSize($tooltipCaretSize)
    {
        $this->tooltipCaretSize = $tooltipCaretSize;
    }

    /**
     * @return int
     */
    public function getTooltipCornerRadius()
    {
        return $this->tooltipCornerRadius;
    }

    /**
     * @param int $tooltipCornerRadius
     */
    public function setTooltipCornerRadius($tooltipCornerRadius)
    {
        $this->tooltipCornerRadius = $tooltipCornerRadius;
    }

    /**
     * @return array
     */
    public function getTooltipEvents()
    {
        return $this->tooltipEvents;
    }

    /**
     * @param array $tooltipEvents
     */
    public function setTooltipEvents($tooltipEvents)
    {
        $this->tooltipEvents = $tooltipEvents;
    }

    /**
     * @return string
     */
    public function getTooltipFillColor()
    {
        return $this->tooltipFillColor;
    }

    /**
     * @param string $tooltipFillColor
     */
    public function setTooltipFillColor($tooltipFillColor)
    {
        $this->tooltipFillColor = $tooltipFillColor;
    }

    /**
     * @return string
     */
    public function getTooltipFontColor()
    {
        return $this->tooltipFontColor;
    }

    /**
     * @param string $tooltipFontColor
     */
    public function setTooltipFontColor($tooltipFontColor)
    {
        $this->tooltipFontColor = $tooltipFontColor;
    }

    /**
     * @return string
     */
    public function getTooltipFontFamily()
    {
        return $this->tooltipFontFamily;
    }

    /**
     * @param string $tooltipFontFamily
     */
    public function setTooltipFontFamily($tooltipFontFamily)
    {
        $this->tooltipFontFamily = $tooltipFontFamily;
    }

    /**
     * @return int
     */
    public function getTooltipFontSize()
    {
        return $this->tooltipFontSize;
    }

    /**
     * @param int $tooltipFontSize
     */
    public function setTooltipFontSize($tooltipFontSize)
    {
        $this->tooltipFontSize = $tooltipFontSize;
    }

    /**
     * @return string
     */
    public function getTooltipFontStyle()
    {
        return $this->tooltipFontStyle;
    }

    /**
     * @param string $tooltipFontStyle
     */
    public function setTooltipFontStyle($tooltipFontStyle)
    {
        $this->tooltipFontStyle = $tooltipFontStyle;
    }

    /**
     * @return string
     */
    public function getTooltipTemplate()
    {
        return $this->tooltipTemplate;
    }

    /**
     * @param string $tooltipTemplate
     */
    public function setTooltipTemplate($tooltipTemplate)
    {
        $this->tooltipTemplate = $tooltipTemplate;
    }

    /**
     * @return string
     */
    public function getTooltipTitleFontColor()
    {
        return $this->tooltipTitleFontColor;
    }

    /**
     * @param string $tooltipTitleFontColor
     */
    public function setTooltipTitleFontColor($tooltipTitleFontColor)
    {
        $this->tooltipTitleFontColor = $tooltipTitleFontColor;
    }

    /**
     * @return string
     */
    public function getTooltipTitleFontFamily()
    {
        return $this->tooltipTitleFontFamily;
    }

    /**
     * @param string $tooltipTitleFontFamily
     */
    public function setTooltipTitleFontFamily($tooltipTitleFontFamily)
    {
        $this->tooltipTitleFontFamily = $tooltipTitleFontFamily;
    }

    /**
     * @return int
     */
    public function getTooltipTitleFontSize()
    {
        return $this->tooltipTitleFontSize;
    }

    /**
     * @param int $tooltipTitleFontSize
     */
    public function setTooltipTitleFontSize($tooltipTitleFontSize)
    {
        $this->tooltipTitleFontSize = $tooltipTitleFontSize;
    }

    /**
     * @return string
     */
    public function getTooltipTitleFontStyle()
    {
        return $this->tooltipTitleFontStyle;
    }

    /**
     * @param string $tooltipTitleFontStyle
     */
    public function setTooltipTitleFontStyle($tooltipTitleFontStyle)
    {
        $this->tooltipTitleFontStyle = $tooltipTitleFontStyle;
    }

    /**
     * @return int
     */
    public function getTooltipXOffset()
    {
        return $this->tooltipXOffset;
    }

    /**
     * @param int $tooltipXOffset
     */
    public function setTooltipXOffset($tooltipXOffset)
    {
        $this->tooltipXOffset = $tooltipXOffset;
    }

    /**
     * @return int
     */
    public function getTooltipXPadding()
    {
        return $this->tooltipXPadding;
    }

    /**
     * @param int $tooltipXPadding
     */
    public function setTooltipXPadding($tooltipXPadding)
    {
        $this->tooltipXPadding = $tooltipXPadding;
    }

    /**
     * @return int
     */
    public function getTooltipYPadding()
    {
        return $this->tooltipYPadding;
    }

    /**
     * @param int $tooltipYPadding
     */
    public function setTooltipYPadding($tooltipYPadding)
    {
        $this->tooltipYPadding = $tooltipYPadding;
    }

}
