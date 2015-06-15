<?php

use fedemotta\datatables\DataTables;
use yii\helpers\Html;
?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-th-list"></i> รายการตัวชี้วัด QOF</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
        
    </div>
    <div class="box-body">

<?php

echo DataTables::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '0.00'],
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
                "info" => TRUE,
                "responsive" => true,
                 //"lengthMenu"=> [[10,-1], [10,Yii::t('app',"All")]],
                "dom" => 'lfTrtip',
                "tableTools" => [
                    "aButtons" => [
                        [
                            "sExtends" => "copy",
                            "sButtonText" => "Copy"
                        ], [
                            "sExtends" => "csv",
                            "sButtonText" => "CSV"
                        ], [
                            "sExtends" => "xls",
                            "oSelectorOpts" => ["page" => 'current']
                        ], [
                            "sExtends" => "pdf",
                            "sButtonText" => "PDF"
                        ], [
                            "sExtends" => "print",
                            "sButtonText" => "Print"
                        ],
                    ]
                ]
            ],
        ]);


?>

    </div>
</div>


        