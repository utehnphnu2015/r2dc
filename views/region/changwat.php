<?php

use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;

$this->params['breadcrumbs'][] = ['label' => 'ตัวชี้วัดเขต', 'url' => ['epi/index']];
$this->params['breadcrumbs'][] = ['label' => '1.ร้อยละของโรงเรียนที่เข้าร่วมโครงการโรงเรียนส่งเสริมสุขภาพ', 'url' => ['epi/report1']];
$this->params['breadcrumbs'][] = 'จังหวัด';
?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">เลือกปีงบประมาณ</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-6">
        <?php
                if (isset($_POST['year'])) {
                    $y = $_POST['year'];
                } else {
                    $y = date('Y');
                }
                ?>
                <?php
                $cyear = date('Y');
                ?>
                <?= Html::beginForm(); ?>
                <?=
                Html::dropDownList('year', $y, [$cyear - 3 => ($cyear - 3) + 543,
                    $cyear - 2 => ($cyear - 2) + 543,
                    $cyear - 1 => ($cyear - 1) + 543,
                    $cyear => ($cyear) + 543], ['class' => 'form-control', 'prompt' => 'โปรดเลือกปี', 'required' => true]);
                ?>
        </div>
        <div class="col-md-6">
                <?= Html::submitButton('ประมวลผล', ['class' => 'btn btn-danger']); ?>
        </div>
                <?= Html::endForm(); ?>

    </div>
</div>

<!-- Default box -->
<?php if($a==1){ ?>
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
        //print_r($changwatname);
        echo yii\grid\GridView::widget([
            //echo \kartik\grid\GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'label' => 'สถานบริการ',
                    'format' => 'raw',
                    'value' => function($model) {
                        $provname = $model['changwatname'];
                        $provcode = $model['provcode'];
                        $title = $provname . ' ' . $provname;
                        $rep_year = $model['rep_year'];
                        //$url = "index.php?r=region/changwat";
                        return Html::a($provname, [
                                    'region/ampur',
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

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">

                <?php
                //$tt = array('1', '2', '3', '4');
                //print_r($tt);
                //print_r($work);
                echo Highcharts::widget([
                    'options' => [
                        'chart' => [
                            'type' => 'column'
                        ],
                        'title' => ['text' => 'ร้อยละของโรงเรียนที่เข้าร่วมโครงการโรงเรียนส่งเสริมสุขภาพ'],
                        'xAxis' => [
                            'categories' => $changwatname
                        ],
                        'yAxis' => [
                            'title' => ['text' => 'จำนวน(ร้อยละ)']
                        ],
                        'series' => [

                            [
                                'name' => 'ร้อยละ',
                                'data' => $percent
                            ],
                        ]
                    ],
                ]);
                ?>

    </div>
</div>
<?php }else{ ?>
        
        <div class="alert alert-warning" role="alert">ไม่มีข้อมูล</div>
        
<?php } ?>

