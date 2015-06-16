<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KpiTest */

$this->title = $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'Kpi Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-test-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'hospcode' => $model->hospcode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'hospcode' => $model->hospcode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kpi_id',
            'rep_year',
            'hospcode',
            'provcode',
            'ampcode',
            'target',
            'total',
            'mon1',
            'mon2',
            'mon3',
            'mon4',
            'mon5',
            'mon6',
            'mon7',
            'mon8',
            'mon9',
            'mon10',
            'mon11',
            'mon12',
            'ratio',
        ],
    ]) ?>

</div>
