<?php

use yii\helpers\Html;

$this->params['breadcrumbs'][] = ['label' => 'ตัวชี้วัดเขต', 'url' => ['epi/index']];
$this->params['breadcrumbs'][] = ['label' => '1.ร้อยละของโรงเรียนที่เข้าร่วมโครงการโรงเรียนส่งเสริมสุขภาพ', 'url' => ['epi/report1']];
$this->params['breadcrumbs'][] = ['label' => 'จังหวัด', 'url' => ['region/changwat']];
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">1.ร้อยละของโรงเรียนที่เข้าร่วมโครงการโรงเรียนส่งเสริมสุขภาพ</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <!--เริ่ม content-->
        <?php
        echo yii\grid\GridView::widget([
            //echo \kartik\grid\GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'hosname',
                    'label' => 'สถานบริการ',
                ],
                [
                    'attribute' => 'target',
                    'header' => 'เป้าหมาย'
                ],
                [
                    'attribute' => 'work',
                    'header' => 'ผลงาน',
                ],
                [
                    'attribute' => 'percent',
                    'header' => 'ร้อยละ',
                ],
                [
                    'attribute' => 'm10',
                    'header' => 'ต.ค'
                ],
                [
                    'attribute' => 'm11',
                    'header' => 'พ.ย'
                ],
                [
                    'attribute' => 'm12',
                    'header' => 'ธ.ค'
                ],
                [
                    'attribute' => 't1',
                    'header' => 'รวม',
                ],
                [
                    'attribute' => 'm01',
                    'header' => 'ม.ค'
                ],
                [
                    'attribute' => 'm02',
                    'header' => 'ก.พ'
                ],
                [
                    'attribute' => 'm03',
                    'header' => 'มี.ค'
                ],
                [
                    'attribute' => 't2',
                    'header' => 'รวม'
                ],
                [
                    'attribute' => 'm04',
                    'header' => 'เม.ย'
                ],
                [
                    'attribute' => 'm05',
                    'header' => 'พ.ค'
                ],
                [
                    'attribute' => 'm06',
                    'header' => 'มิ.ย'
                ],
                [
                    'attribute' => 't3',
                    'header' => 'รวม'
                ],
                [
                    'attribute' => 'm07',
                    'header' => 'ก.ค'
                ],
                [
                    'attribute' => 'm08',
                    'header' => 'ส.ค'
                ],
                [
                    'attribute' => 'm09',
                    'header' => 'ก.ย'
                ],
                [
                    'attribute' => 't4',
                    'header' => 'รวม'
                ],
            ],
        ]);
        ?>




        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->