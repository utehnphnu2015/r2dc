<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KpiType1 */

$this->title = 'บันทึกข้อมูล';
$this->params['breadcrumbs'][] = ['label' => 'Kpi Type1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kpi-type1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
