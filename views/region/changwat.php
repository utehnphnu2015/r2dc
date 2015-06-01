<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\TopicRegion;
?>

<?php
$this->params['breadcrumbs'][] = ['label' => 'รายการตัวชี้วัดระดับเขต', 'url' => ['index', 'rep_year' => $rep_year]];
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title" ><i class="glyphicon glyphicon-th-list"></i> 
            ตัวชี้วัดเขต
            <span style="color: #0000cc">
                <?php
                $topic = TopicRegion::find()->where(['id' => $kpi_id])->asArray()->one();
                echo $kpi_id;
                echo "-" . $topic['topic'];
                ?>
            </span>
        </h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>        
    </div>
    <div class="box-body">
        <!--เริ่ม content-->
        <div style="margin: 1em">
            <a class="btn btn-success" href="<?= Url::to(['index', 'rep_year' => $rep_year]) ?>">ย้อนกลับ</a> 
        </div>
        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '0'],
            'summary' => '',
            'columns' => [
                /* [
                  'attribute' => 'provcode',
                  'label' => 'รหัส'
                  ], */
                [//คลิก column
                    'attribute' => 'provname',
                    'label' => 'จังหวัด',
                    'format' => 'raw',
                    'value' => function($data) use ($kpi_id, $rep_year) {
                        $params = [
                            'region/ampur', // action
                            'kpi_id' => $kpi_id,
                            'rep_year' => $rep_year,
                            'provcode' => $data['provcode']
                        ];

                        return Html::a($data['provname'], $params);
                    }
                        ],
                        [
                            'attribute' => 'target',
                            'header' => 'เป้าหมาย'
                        ],
                        [
                            'attribute' => 'total',
                            'header' => 'ผลงาน'
                        ],
                        [
                            'attribute' => 'ratio',
                            'header' => 'อัตรา(%)'
                        ],
                        [
                            'attribute' => 'mon1',
                            'header' => 'ตค.'
                        ],
                         [
                            'attribute' => 'mon2',
                            'header' => 'พย.'
                        ],
                         [
                            'attribute' => 'mon3',
                            'header' => 'ธค.'
                        ],
                         [
                            'attribute' => 'mon4',
                            'header' => 'มค.'
                        ],
                                 [
                            'attribute' => 'mon5',
                            'header' => 'กพ.'
                        ],
                                 [
                            'attribute' => 'mon6',
                            'header' => 'มีค.'
                        ],
                                 [
                            'attribute' => 'mon7',
                            'header' => 'เมย.'
                        ],
                                 [
                            'attribute' => 'mon8',
                            'header' => 'พค.'
                        ],
                                 [
                            'attribute' => 'mon9',
                            'header' => 'มิย.'
                        ],
                                 [
                            'attribute' => 'mon10',
                            'header' => 'กค.'
                        ],
                                 [
                            'attribute' => 'mon11',
                            'header' => 'สค.'
                        ],
                                 [
                            'attribute' => 'mon12',
                            'header' => 'กย.'
                        ],
                ]]);
                ?>


        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->