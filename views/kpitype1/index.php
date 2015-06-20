<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\TopicAll;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'KPI ระดับสถานบริการ';
$this->params['breadcrumbs'][] = $this->title;
$topic = TopicAll::find()->where(['id' => $kpi_id])->asArray()->one();
?>
<div class="kpi-type1-index">

    <h4><?= Html::encode("ตัวชี้วัด : " . $kpi_id . "-" . $topic['topic']) ?></h4>
   <?php
        $feq= $topic['frequency'];
      ?>
    <p>
        <?= Html::a('<i class="fa fa-undo"></i>', ['moph/index'], ['class' => 'btn btn-flat btn-warning']) ?>
        <?= Html::a('เพิ่มข้อมูล', ['create', 'rep_year' => $rep_year, 'kpi_id' => $kpi_id,'feq'=>$feq], ['class' => 'btn btn-success', ['rep_year' => '2333']]) ?>
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
            'ratio',
              ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
<i class="glyphicon glyphicon-trash"></i>

