<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KpiType2 */

$this->title = 'Create Kpi Type2';
$this->params['breadcrumbs'][] = ['label' => 'Kpi Type2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-type2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
