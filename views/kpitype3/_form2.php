<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType3 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kpi-type3-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rep_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'mon1')->textInput() ?>

    <?= $form->field($model, 'mon2')->textInput() ?>

    <?= $form->field($model, 'mon3')->textInput() ?>

    <?= $form->field($model, 'mon4')->textInput() ?>

    <?= $form->field($model, 'mon5')->textInput() ?>

    <?= $form->field($model, 'mon6')->textInput() ?>

    <?= $form->field($model, 'mon7')->textInput() ?>

    <?= $form->field($model, 'mon8')->textInput() ?>

    <?= $form->field($model, 'mon9')->textInput() ?>

    <?= $form->field($model, 'mon10')->textInput() ?>

    <?= $form->field($model, 'mon11')->textInput() ?>

    <?= $form->field($model, 'mon12')->textInput() ?>

    <?= $form->field($model, 'ratio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
