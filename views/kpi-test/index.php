<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KpiTestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kpi Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-test-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kpi Test', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kpi_id',
            'rep_year',
            'hospcode',
            'provcode',
            'ampcode',
            // 'target',
            // 'total',
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
    ]); ?>

</div>
