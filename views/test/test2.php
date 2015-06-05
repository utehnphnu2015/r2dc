<?php

use fedemotta\datatables\DataTables;
use yii\helpers\Html;

//$searchModel = new ModelSearch();
//$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
?>

<?=

DataTables::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        //['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'id'
        ],
        [
            'attribute' => 'topic',
            'label' => 'ตัวชี้วัด',
            'format' => 'raw',
            'value' => function($data) {
                $params = [
                    'province/changwat', // action
                    'kpi_id' => $data['id'],
                    'rep_year' => 2015
                ];

                return Html::a($data['topic'], $params);
            }],
                [
                    'attribute' => 'note1'
                ],
            ],
            'clientOptions' => [
                "info" => false,
                "responsive" => true,
                "dom" => 'lfTrtip',
                "tableTools" => [
                    "aButtons" => [
                        [
                            "sExtends" => "copy",
                            "sButtonText" => "Copy to clipboard"
                        ], [
                            "sExtends" => "csv",
                            "sButtonText" => "Save to CSV"
                        ], [
                            "sExtends" => "xls",
                            "oSelectorOpts" => ["page" => 'current']
                        ], [
                            "sExtends" => "pdf",
                            "sButtonText" => "Save to PDF"
                        ], [
                            "sExtends" => "print",
                            "sButtonText" => "Print"
                        ],
                    ]
                ]
            ],
        ]);




        