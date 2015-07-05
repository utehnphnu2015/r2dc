<?php

use yii\helpers\Html;
use app\models\TopicAll;
 $topic = TopicAll::find()->where(['id' => $model->kpi_id])->asArray()->one();


/* @var $this yii\web\View */
/* @var $model app\models\KpiType2 */

$this->title = $model->kpi_id."-".$topic['topic'];
$this->params['breadcrumbs'][] = ['label' => 'Kpi Type2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kpi_id, 'url' => ['view', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kpi-type2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'rep_year' => $rep_year,
        'kpi_id' => $kpi_id
    ]) ?>

</div>
