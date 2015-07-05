<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use fedemotta\datatables\DataTables;

//$this->params['breadcrumbs'][] = ['label' => 'หน้าหลัก', 'url' => ['site/index']];

$this->params['breadcrumbs'][] = 'ร้อยละของเด็กนักเรียนมีภาวะอ้วน';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-th-list"></i> ร้อยละของเด็กนักเรียนมีภาวะอ้วน</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>

    </div>
    <div class="box-body">
        <!--เริ่ม content-->
       
        <div class="pull-right">
            <h4>
                <span style="background-color:#00A2E8; color: white;padding: 5px">ปีงบประมาณ <?=$rep_year+543?></span>
            </h4>
        </div>
        <?php
        //echo GridView::widget([
        echo DataTables::widget([
            'dataProvider' => $dataProvider,
            'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '0'],
            'summary' => '',
            'columns' => [
                [
                    'attribute' => 'ampcode',
                    'label' => 'รหัส'
                ],
                [//คลิก column
                    'attribute' => 'ampname',
                    'label' => 'อำเภอ',
                    'format' => 'raw',
                    'value' => function($data) use ($rep_year) {
                        $params = [
                            'student/type1', // action
                            //'kpi_id' => $kpi_id,
                            'rep_year' => $rep_year,
                            'provcode' => $data['provcode'],
                            'ampcode' => $data['ampcode']
                        ];

                        return Html::a($data['ampname'], $params);
                    }
                        ],
                [
                    'attribute' => 'target1',
                    'label' => 'เป้าหมายเทอม 1'
                ],
                [
                    'attribute' => 'result1',
                    'label' => 'ผลงาน'
                ],
                [
                    'attribute' => 'ratio1',
                    'label' => 'ร้อยละ'
                ],
                [
                    'attribute' => 'target2',
                    'label' => 'เป้าหมายเทอม 2'
                ],
                [
                    'attribute' => 'result2',
                    'label' => 'ผลงาน'
                ],
                [
                    'attribute' => 'ratio2',
                    'label' => 'ร้อยละ'
                ]
            ],
        ]);
        ?>


        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->