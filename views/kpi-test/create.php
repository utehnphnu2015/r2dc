<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KpiTest */

$this->title = 'Create Kpi Test';
$this->params['breadcrumbs'][] = ['label' => 'Kpi Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-test-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
