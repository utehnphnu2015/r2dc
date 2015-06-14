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
//$kpi_id = $_GET['kpi_id'];
//$rep_year = $_GET['rep_year'];

$kpi_id='';
        $rep_year='';
?>

<div class="kpi-type1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kpi_id')->textInput(['maxlength' => true, 'value' => $kpi_id, 'readonly' => true]) ?>

    <?= $form->field($model, 'rep_year')->textInput(['maxlength' => true, 'value' => $rep_year, 'readonly' => true]) ?>

    <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>

   
    
    <?=
    $form->field($model, 'provcode')->dropDownList(
            ArrayHelper::map(Cchangwat::find()->all(), 'provcode', 'provname'), array(
        'id' => 'provcode',
        'onchange' =>
        '$.post("index.php?r=sysconfigmain/listamp&provcode="+this.value,function(data){
                    $("#ampurcodefull").html(data);
                     $("#sysconfigmain-distcode").val(data.substring(3,4));
                });'
            )
    );
    ?>
    
    
    <?php
    echo $form->field($model, 'ampcode')->dropDownList(
            ArrayHelper::map(Campur::find()->where(['provcode' =>$model->provcode])->all(), 'ampcodefull', 'ampname'), array(
        'id' => 'ampcodefull',
        'prompt' => '--อำเภอ--'
    ));
    ?>

   

    <?= $form->field($model, 'target')->textInput(['value' => 0]) ?>

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
