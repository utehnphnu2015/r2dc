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

<div class="kpi-type2-form">


    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'kpi_id')->hiddenInput(['value' => $kpi_id])->label(FALSE) ?>


    <?= $form->field($model, 'rep_year')->hiddenInput(['value' => $rep_year])->label(FALSE) ?>

    <div class="row">
        <div class="col-md-4">
            <h4><span style="color: white;background-color:green">ผลการดำเนินงาน ปีงบประมาณ <?= $rep_year + 543 ?></span></h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <?=
            $form->field($model, 'provcode')->dropDownList(
                    ArrayHelper::map(Cchangwat::find()->all(), 'provcode', 'provname'), [
                'id' => 'dlProv',
                'prompt' => '--จังหวัด--'
                    ]
            );
            ?>
        </div>
        
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'target')->textInput(['value' => 0]) ?>
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
<?php
$route_get_amp = \Yii::$app->urlManager->createUrl(['ajax/get-amp']);
$route_get_hos = \Yii::$app->urlManager->createUrl(['ajax/get-hos']);

$js = <<<JS
 
   $('#dlProv').on('change', function(){
      
        var param = $(this).val();
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "$route_get_amp",
            cache: false,
            data: "p="+param,
            success: function(res){            
                $("#dlAmp").empty();
                $("#dlAmp").append("<option>-- อำเภอ --</option>");
                $.each(res,function(index,value){
                    $("#dlAmp").append("<option value="+value.ampcode+">" + value.ampcode +"-"+ value.ampname  + "</option>");                

                });        
            }
        });
        
   });// จบดึงอำเภอ
        
     $('#dlAmp').on('change', function(){
      
        var a = $(this).val();
        var p = $('#dlProv').val();
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "$route_get_hos",
            cache: false,
            data: "p="+p+"&a="+a,
            success: function(res){            
                $("#dlHos").empty();
                $("#dlHos").append("<option>-- หน่วยงาน --</option>");
                $.each(res,function(index,value){
                    $("#dlHos").append("<option value="+value.hospcode+">" + value.hospcode+"-"+value.hosname  + "</option>");                

                });        
            }
        });
        
   });// จบดึงสถานบริการ
        
   
        
        
JS;
?>

<?php
$this->registerJs($js);
?>
