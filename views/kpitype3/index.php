<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\TopicAll;
use app\models\Cchangwat;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = "KPI ระดับจังหวัด";
$this->params['breadcrumbs'][] = $this->title;
 $topic = TopicAll::find()->where(['id' => $kpi_id])->asArray()->one();
?>


<div class="kpi-type3-index">
    
    <?php
//test zone

 //$prov=Cchangwat::find()->where(['provcode'=>67])->one();
 //echo $prov->provname;

?>

      <h4><?= Html::encode("ตัวชี้วัด : " . $kpi_id . "-" . $topic['topic']) ?></h4>
      <?php
        $feq= $topic['frequency'];
      ?>

    <p>
        <?= Html::a('<i class="fa fa-undo"></i>', ['moph/index'], ['class' => 'btn btn-flat btn-warning']) ?>
        <?= Html::a('เพิ่มข้อมูล', ['create','kpi_id'=>$kpi_id,'rep_year'=>$rep_year,'feq'=>$feq], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
         'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => '0'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'kpi_id',
                'label' => 'รหัส Kpi'
            ],
            [
                'attribute' => 'rep_year',
                'label' => 'ปีงบประมาณ',
                'value'=>  function ($model){
                    return $model->rep_year+543;
                }
            ],
            [
                'attribute' => 'provcode',
                'label' => 'จังหวัด',
                'value'=>  function ($model){
                    $provcode=$model->provcode;
                    $prov=Cchangwat::find()->where(['provcode'=>$provcode])->one();
                    return $prov->provname;
                }
               
            ],
            [
                'attribute' => 'target',
                'label' => 'เป้าหมาย'
            ],
            [
                'attribute' => 'total',
                'label' => 'ผลงาน'
            ],
            // 'mon1',
            // 'mon2',
            // 'mon3',
            // 'mon4',
            // 'mon5',
            // 'mon6',
            // 'mon7',
            // 'mon8',
            // 'mon9',
            // 'mon10',
            // 'mon11',
            // 'mon12',
            // 'ratio',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
