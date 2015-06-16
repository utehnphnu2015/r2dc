<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KpiTestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-test-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kpi_id') ?>

    <?= $form->field($model, 'rep_year') ?>

    <?= $form->field($model, 'hospcode') ?>

    <?= $form->field($model, 'provcode') ?>

    <?= $form->field($model, 'ampcode') ?>

    <?php // echo $form->field($model, 'target') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'mon1') ?>

    <?php // echo $form->field($model, 'mon2') ?>

    <?php // echo $form->field($model, 'mon3') ?>

    <?php // echo $form->field($model, 'mon4') ?>

    <?php // echo $form->field($model, 'mon5') ?>

    <?php // echo $form->field($model, 'mon6') ?>

    <?php // echo $form->field($model, 'mon7') ?>

    <?php // echo $form->field($model, 'mon8') ?>

    <?php // echo $form->field($model, 'mon9') ?>

    <?php // echo $form->field($model, 'mon10') ?>

    <?php // echo $form->field($model, 'mon11') ?>

    <?php // echo $form->field($model, 'mon12') ?>

    <?php // echo $form->field($model, 'ratio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
