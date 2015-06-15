<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KpiType1 */

$this->title = $kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'กลับ', 'url' => ['index','rep_year'=>$rep_year,'kpi_id'=>$kpi_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-plus-sign"></i> เพิ่ม</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
        
    </div>
    <div class="box-body">
        <!--เริ่ม content-->

    <?= $this->render('_form', [
        'model' => $model,
        'rep_year'=>$rep_year,
        'kpi_id'=>$kpi_id
    ]) ?>

</div>
</div>
