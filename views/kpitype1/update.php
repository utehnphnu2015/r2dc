<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType1 */

$this->title = 'Update Kpi Type1: ' . ' ' . $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'Kpi Type1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi_id, 'url' => ['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year, 'hospcode' => $model->hospcode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-type1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
        'rep_year' => $rep_year,
        'kpi_id' => $kpi_id
    ])
    ?>

</div>
