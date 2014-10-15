<?php

namespace Phpro\Chart\ChartJs;

use Phpro\Chart\ChartInterface;

/**
 * Interface ChartJsInterface
 *
 * @package Phpro\Chart\ChartJs
 */
interface ChartJsInterface extends ChartInterface
{

    /**
     * @return string
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @return GlobalOptions
     */
    public function getOptions();

}
