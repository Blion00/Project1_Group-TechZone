<?php
// models/ChartModel.php

include_once 'm_base.php';
class ChartModel {
    public function getChartData() {
        return [
            ['Category', 'Quantity'],
            ['Red Wine', 45],
            ['White Wine', 26],
            ['Rose Wine', 29]
        ];
    }
} 
?>
