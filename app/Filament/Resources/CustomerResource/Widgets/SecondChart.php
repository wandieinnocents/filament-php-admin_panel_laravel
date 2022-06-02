<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use Filament\Widgets\PolarAreaChartWidget;

class SecondChart extends PolarAreaChartWidget
{
    protected function getHeading(): string
    {
        return 'aa posts';
    }
 
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}
