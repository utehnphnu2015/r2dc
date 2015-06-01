<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\TopicMoph;
?>

<?php
$this->params['breadcrumbs'][] = ['label' => 'รายการตัวชี้วัดระดับกระทรวง', 'url' => ['index', 'rep_year' => $rep_year]];
$this->params['breadcrumbs'][] = ['label' => 'รายจังหวัด', 'url' => ['changwat', 'kpi_id' => $kpi_id, 'rep_year' => $rep_year]];
$this->params['breadcrumbs'][] = ['label' => 'รายอำเภอ', 'url' => ['ampur', 'kpi_id' => $kpi_id, 'rep_year' => $rep_year, 'provcode' => $provcode]];
$this->params['breadcrumbs'][] = 'รายสถานบริการ';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title" ><i class="glyphicon glyphicon-th-list"></i> 
            ตัวชี้วัดกระทรวง
            <span style="color: #0000cc">
                <?php
                $topic = TopicMoph::find()->where(['id' => $kpi_id])->asArray()->one();
                echo $kpi_id;
                ?>
            </span>
        </h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>  
        <div style="color: teal">
            <h4><?= $topic['topic']; ?></h4>
        </div>
    </div>
    <div class="box-body">
        <!--เริ่ม content-->
        <div class="before-body">
            <div class="pull-left">
                <a class="btn btn-flat btn-warning" 
                   href="<?= Url::to(['ampur', 'kpi_id' => $kpi_id, 'rep_year' => $rep_year, 'provcode' => $provcode]) ?>">
                    <i class="fa fa-undo"></i>
                </a>
            </div>
            <div class="pull-right">
                <h4>
                    <span style="background-color:#00A2E8; color: white;padding: 5px">ปีงบประมาณ <?= $rep_year + 543 ?></span>
                </h4>
            </div>
        </div>
        <hr style="color: white;line-height: 0px;border-color: white">
        <div class="grid-content">
            <?php
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '0'],
                'summary' => '',
                'columns' => [
                    [
                        'attribute' => 'hospcode',
                        'label' => ''
                    ],
                    [
                        'attribute' => 'hosname',
                        'label' => 'หน่วยบริการ',
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
                ]
            ]);
            ?>


            <!--จบ content-->
        </div>

    </div><!-- /.box -->
</div>