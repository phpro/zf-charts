<?php

namespace Phpro\Chart\ChartJs\Doughnut;

use Phpro\Chart\ChartJs\DataInterface;

/**
 * Class DoughnutData
 *
 * @package Phpro\Chart\ChartJs\Doughnut
 */
class DoughnutData
    implements DataInterface
{

    protected $data = [];

    /**
     * @param DoughnutDataset $dataset
     */
    public function addDataset(DoughnutDataset $dataset)
    {
        $this->data[] = $dataset;
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        $json = [];
        foreach ($this->data as $data) {
            $json[] = $data->jsonSerialize();
        }

        return $json;
    }

}
