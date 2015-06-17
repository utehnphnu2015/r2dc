<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kpi ระดับจังหวัด';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-type3-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-undo"></i>', ['moph/index'], ['class' => 'btn btn-flat btn-warning']) ?>
        <?= Html::a('เพิ่มข้อมูล', ['create','kpi_id'=>$kpi_id,'rep_year'=>$rep_year], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
         'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '0'],
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
                'attribute' => 'provcode',
                'label' => 'จังหวัด'
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
