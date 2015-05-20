<?php
namespace app\controllers;
print_r($t1);
print_r($s1);

use yii;
use miloschuman\highcharts\Highcharts;



            echo Highcharts::widget([
                'options' => [
                    'title' => ['text' => '10 อันดับขายดีประจำเดือน'],
                    'xAxis' => [
                        'categories' => $t1
                    ],
                    'yAxis' => [
                        'title' => ['text' => 'จำนวน/แก้ว']
                    ],
                    'series' => [
                        ['type' => 'column',
                            'name' => 'แก้ว',
                            'data' => $s1,
                        ],
                    ]
                ]
            ]);
          
?>
