# Charts

This package provides a PHP abstraction layer for multiple javascript libraries for Zend Framework 2.
At the moment, following libraries are supported:

- [Chart.js](http://www.chartjs.org/) (Lines, Doughnuts)

## Installation
```
curl -s https://getcomposer.org/installer | php
php composer.phar install
```

## Module Installation

### Add to composer.json
```
"phpro/zf-charts": "~0.1"
```

### Add module to application.config.php
```php
return array(
    'modules' => array(
        'AssetManager',
        'Phpro\Chart',
        // other libs...
    ),
    // Other config
);
```

## ChartJS

### Line chart
```php
$options = new LineOptions(['animation' => false]);
$data = new LineData();
$data->setLabels(['January', 'February', 'March', 'April', 'May', 'June', 'July']);
$data->addDataset(new LineDataset([
    'label' => 'My first dataset',
    'fillColor' => 'rgba(220,220,220,0.2)',
    'strokeColor' => 'rgba(220,220,220,1)',
    'pointColor' => 'rgba(220,220,220,1)',
    'pointStrokeColor' => '#fff',
    'pointHighlightFill' => '#fff',
    'pointHighlightStroke' => 'rgba(220,220,220,1)',
    'data' => [65, 59, 80, 81, 56, 55, 40]
]));
$chart = new LineChart($options, $data);
```

## Doughnut chart
```php
$options = new DoughnutOptions(['animation' => false]);
$data = new DoughnutData();
$data->addDataset(new DoughnutDataset([
    'label' => 'label 1',
    'value' => 50,
    'color' => 'green',
    'highlight' => 'green',
]));
$data->addDataset(new DoughnutDataset([
    'label' => 'label 2',
    'value' => 50,
    'color' => 'red',
    'highlight' => 'red',
]));
$chart = new DoughnutChart($options, $data);
```

## View Helper
```php
<?php echo $this->chartjs($this->chart, [
    'show_legend' => true,
    'width' => 900,
    'height' => 400,
]); ?>
```