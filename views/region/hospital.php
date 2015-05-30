<?php

use yii\helpers\Html;

$id=$_GET['id'];
$amp=$_GET['amp'];
$chw=$_GET['chw'];
$year=$_GET['year'];
$this->params['breadcrumbs'][] = ['label' => 'ตัวชี้วัดเขต', 'url' => ['dashboard/index', 'type' =>2]];
$this->params['breadcrumbs'][] =  ['label' => 'จังหวัด', 'url' => ['region/changwat','id'=>$id]];
$this->params['breadcrumbs'][] =  ['label' => 'อำเภอ', 'url' => ['region/ampur','id'=>$id,'chw'=>$chw,'year'=>$year]];
$this->params['breadcrumbs'][] =  ['label' => 'สถานบริการ', 'url' => ['region/hopital']];
//$this->params['breadcrumbs'][] = ['label' => '1.ร้อยละของโรงเรียนที่เข้าร่วมโครงการโรงเรียนส่งเสริมสุขภาพ', 'url' => ['epi/report1']];

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
                    'attribute' => 'total',
                    'header' => 'ผลงาน',
                ],
                [
                    'attribute' => 'ratio',
                    'header' => 'ร้อยละ',
                ],
                [
                    'attribute' => 'mon1',
                    'header' => 'ต.ค'
                ],
                [
                    'attribute' => 'mon2',
                    'header' => 'พ.ย'
                ],
                [
                    'attribute' => 'mon3',
                    'header' => 'ธ.ค'
                ],
                [
                    'attribute' => 'mon4',
                    'header' => 'ม.ค'
                ],
                [
                    'attribute' => 'mon5',
                    'header' => 'ก.พ'
                ],
                [
                    'attribute' => 'mon6',
                    'header' => 'มี.ค'
                ],
                [
                    'attribute' => 'mon7',
                    'header' => 'เม.ย'
                ],
                [
                    'attribute' => 'mon8',
                    'header' => 'พ.ค'
                ],
                [
                    'attribute' => 'mon9',
                    'header' => 'มิ.ย'
                ],
                [
                    'attribute' => 'mon10',
                    'header' => 'ก.ค'
                ],
                [
                    'attribute' => 'mon11',
                    'header' => 'ส.ค'
                ],
                [
                    'attribute' => 'mon12',
                    'header' => 'ก.ย'
                ],
                
            ],
        ]);
        ?>




        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->