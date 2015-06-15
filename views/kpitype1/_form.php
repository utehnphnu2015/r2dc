<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cchangwat;
use app\models\Campur;
use app\models\Ctambon;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\KpiType1 */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="kpi-type1-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'kpi_id')->textInput(['maxlength' => true, 'value' => $kpi_id, 'readonly' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'rep_year')->textInput(['maxlength' => true, 'value' => $rep_year, 'readonly' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?=
            $form->field($model, 'provcode')->dropDownList(
                    ArrayHelper::map(Cchangwat::find()->all(), 'provcode', 'provname'), array(
                'id' => 'provcode',
                    )
            );
            ?>
        </div>
        <div class="col-md-4">

            <?php
            echo $form->field($model, 'ampcode')->dropDownList(
                    ArrayHelper::map(Campur::find()->where(['provcode' => $model->provcode])->all(), 'ampcodefull', 'ampname'), array(
                'id' => 'ampcodefull',
                'prompt' => '--อำเภอ--'
            ));
            ?>
        </div>
       
    </div>

    <div class="row">
         <div class="col-md-4">
            <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'target')->textInput(['value' => 0]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            ผลการดำเนินงาน
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'mon1')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon2')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon3')->textInput() ?>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'mon4')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon5')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon6')->textInput() ?>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'mon7')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon8')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon9')->textInput() ?>
        </div>        
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'mon10')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon11')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'mon12')->textInput() ?>
        </div>        
    </div>





    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'เพิ่ม' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
