<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\TopicAll;

 $topic = TopicAll::find()->where(['id' => $kpi_id])->asArray()->one();

/* @var $this yii\web\View */
/* @var $model app\models\KpiType3 */

$this->title = $model->kpi_id;
$this->params['breadcrumbs'][] = ['label' => 'กลับ', 'url' => ['index','kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year]];

?>
<div class="kpi-type3-view">

    <h4><?=$kpi_id."-".$topic['topic']?></h4>

    <p>
        <?= Html::a('Update', ['update', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year,'provcode'=>$model->provcode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'kpi_id' => $model->kpi_id, 'rep_year' => $model->rep_year,'provcode'=>$model->provcode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kpi_id',
            'rep_year',
            'provcode',
            'target',
            'total',
            'mon1',
            'mon2',
            'mon3',
            'mon4',
            'mon5',
            'mon6',
            'mon7',
            'mon8',
            'mon9',
            'mon10',
            'mon11',
            'mon12',
            'ratio',
        ],
    ]) ?>

</div>
