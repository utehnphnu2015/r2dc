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
                    'label' => 'สถานบริการ',
                    'format' => 'raw',
                    'value' => function($model) {
                        $provname = $model['ampurname'];
                        $provcode = $model['provcode'];
                        $amp = $model['ampcode'];
                        $title = $provname . ' ' . $provname;
                        $rep_year = $model['rep_year'];
                        //$url = "index.php?r=region/changwat";
                        return Html::a($provname, [
                                    'region/hospital',
                                    'amp'=>$amp,
                                    'chw' => $provcode,
                                    'year' => $rep_year,
                                        ], ['title' => $title]);
                    }
                        ],
                        /* [
                          'attribute' => 'changwatname',
                          'header' => 'สถานบริการ',
                          'value' => function($model) {
                          $prov = $model['changwatname'];
                          return yii\helpers\Url::to([
                          'region/changwat'
                          ]);
                          }
                          ], */
                        [
                            'attribute' => 'target',
                            'header' => 'เป้าหมาย'
                        ],
                        [
                            'attribute' => 'work',
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
                            'attribute' => 't1',
                            'header' => 'รวม',
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
                            'attribute' => 't2',
                            'header' => 'รวม'
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
                            'attribute' => 't3',
                            'header' => 'รวม'
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