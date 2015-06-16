<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KpiTest */

$this->title = 'Update Kpi Test: ' . ' ' . $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'Kpi Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi_id, 'url' => ['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'hospcode' => $model->hospcode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-test-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
