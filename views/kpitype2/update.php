<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType2 */

$this->title = 'Update Kpi Type2: ' . ' ' . $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'Kpi Type2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi_id, 'url' => ['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-type2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
