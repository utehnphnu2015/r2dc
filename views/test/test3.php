<?php

use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="glyphicon glyphicon-th-list"></i> TEST3</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>

    </div>
    <div class="box-body">
        <button  id="btn-open" class="btn btn-danger" value="<?= Url::to(['kpitype1/create','rep_year'=>'2015','kpi_id'=>'m00101','feq'=>'mon']) ?>">Test</button>
    </div>
</div>

<?php
Modal::begin([
    'id' => 'my-modal',    
    'size' => 'modal-lg'
]);
?>
<div id="modal-content">Loading..</div>
<?php
Modal::end();
?>

<?php
$this->registerJsFile(Yii::$app->request->baseUrl . '/js/script.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
?>