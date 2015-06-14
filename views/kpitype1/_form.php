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
$kpi_id=$_GET['kpi_id'];
$rep_year=$_GET['rep_year'];

if($model->isNewRecord){
    $province = [];
    $ampur = [];
    
    
    $district_list = [];
    $tambon_list = [];
}else{
    $province = $model->ctambon->changwatcode;
    $district = $model->ctambon->amppurcode;
    $tambon = $model->tamboncode;
    
    $district_list = ArrayHelper::map(Campur::find()
            ->where(['provcode'=>$province])->all(), 'ampurcode', 'tambonname');
   // $tambon_list = ArrayHelper::map(Tambon::find()
    //        ->where(['district_id'=>$district])->all(), 'id', 'tambon_name');
    
}


echo $province = $model->Ctambon->changwatcode;;

?>

<div class="kpi-type1-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'kpi_id')->textInput(['maxlength' => true,'value'=>$kpi_id,'readonly' => true]) ?>

    <?= $form->field($model, 'rep_year')->textInput(['maxlength' => true,'value'=>$rep_year,'readonly' => true]) ?>

    <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provcode')->textInput(['maxlength' => true]) ?>
    
     <div class="form-group">
        <?= Html::label('จังหวัด','province');?>
        <?= Html::dropDownList('province',$province,
            ArrayHelper::map(Cchangwat::find()
                    ->orderBy('provname ASC')
                    ->all(),'provcode','provname'),
                [
                    'class'=>'form-control',
                    'id'=>'province',
                    'prompt'=>'-เลือกจังหวัด-',
                    'onchange'=>'
                        $.get("'.Url::toRoute('base/loaddistrict').'",
                        {id:$(this).val()})
                        .done(function(data){
                            $("select#district").html(data);
                        });
                    '
                ]
                );?>
    </div>
    <div class="form-grop">
        <?= Html::label('อำเภอ','district');?>
        <?= Html::dropDownList('district',$ampur,$district_list,[
            'class'=>'form-control',
            'id'=>'district',
            'prompt'=>'-เลือกอำเภอ-',
            'onchange'=>'
                $.get("'.Url::toRoute('base/loadtambon').'",
                {id:$(this).val()})
                .done(function(data){
                    $("select#tambon").html(data);
                });
            '
        ]);?>
    </div>

    <?= $form->field($model, 'ampcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target')->textInput(['value'=>0]) ?>

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
