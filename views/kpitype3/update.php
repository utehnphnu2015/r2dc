<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType3 */

$this->title = 'Update Kpi Type3: ' . ' ' . $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'Kpi Type3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi_id, 'url' => ['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-type3-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
