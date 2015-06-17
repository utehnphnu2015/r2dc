<?php

use yii\helpers\Html;

use app\models\TopicAll;

 $topic = TopicAll::find()->where(['id' => $kpi_id])->asArray()->one();


/* @var $this yii\web\View */
/* @var $model app\models\KpiType3 */


$this->params['breadcrumbs'][] = ['label' => 'กลับ', 'url' => ['index','kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year]];

?>
<div class="kpi-type3-update">

    <h4><?=$kpi_id."-".$topic['topic']?></h4>

    <?=
    $this->render('_form', [
        'model' => $model,
        'rep_year' => $rep_year,
        'kpi_id' => $kpi_id,
        'provcode' => $provcode
    ])
    ?>

</div>
