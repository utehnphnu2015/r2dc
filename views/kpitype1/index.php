<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kpi ระดับสถานบริการ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-type1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-undo"></i>', ['moph/index'], ['class' => 'btn btn-flat btn-warning']) ?>
        <?= Html::a('เพิ่มข้อมูล', ['create','rep_year'=>$rep_year,'kpi_id'=>$kpi_id], ['class' => 'btn btn-success',['rep_year'=>'2333']]) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'kpi_id',
                'label' => 'รหัส Kpi'
            ],
            [
                'attribute' => 'rep_year',
                'label' => 'ปีงบประมาณ'
            ],
            [
                'attribute' => 'hospcode',
                'label' => 'สถานบริการ'
            ],
            [
                'attribute' => 'provcode',
                'label' => 'จังหวัด'
            ],
            [
                'attribute' => 'ampcode',
                'label' => 'อำเภอ'
            ],
            [
                'attribute' => 'target',
                'label' => 'เป้าหมาย'
            ],
            [
                'attribute' => 'total',
                'label' => 'ผลงาน'
            ],
            // 'mon1',
            // 'mon2',
            // 'mon3',
            // 'mon4',
            // 'mon5',
            // 'mon6',
            // 'mon7',
            // 'mon8',
            // 'mon9',
            // 'mon10',
            // 'mon11',
            // 'mon12',
            // 'ratio',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
