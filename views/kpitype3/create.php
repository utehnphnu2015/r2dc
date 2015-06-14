<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KpiType3 */

$this->title = 'Create Kpi Type3';
$this->params['breadcrumbs'][] = ['label' => 'Kpi Type3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-type3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
