<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use fedemotta\datatables\DataTables;

//$this->params['breadcrumbs'][] = ['label' => 'หน้าหลัก', 'url' => ['site/index']];

$this->params['breadcrumbs'][] = 'CMI';
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-th-list"></i> CMI</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>

    </div>
    <div class="box-body">
        <!--เริ่ม content-->
        <div class="btn-group" role="group" aria-label="...">
            <a  class="btn btn-default" href="<?= Url::to(['index', 'rep_year' => '2014']) ?>">2557</a>
            <a  class="btn btn-default" href="<?= Url::to(['index', 'rep_year' => '2015']) ?>">2558</a>
            <a  class="btn btn-default" href="<?= Url::to(['index', 'rep_year' => '2016']) ?>">2559</a>
        </div>
        <div class="pull-right">
            <h4>
                <span style="background-color:#00A2E8; color: white;padding: 5px">ปีงบประมาณ <?= $rep_year + 543 ?></span>
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
                    'attribute' => 'provname',
                    'label' => 'จังหวัด'
                ],
                [
                   'attribute' => 'hospcode',
                    'label' => 'รหัส' 
                ],
                [
                    'attribute' => 'hospname',
                    'label' => 'สถานบริการ'
                ],
                [
                    'attribute' => 'sumcase',
                    'label' => 'จำนวนผู้ป่วย'
                ],
                [
                    'attribute' => 'sumadjrw',
                    'label' => 'รวม Adjrw'
                ],
                [
                    'attribute' => 'refcmi',
                    'label' => 'CMI'
                ],
                ]
                
        ]);
        ?>


        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->