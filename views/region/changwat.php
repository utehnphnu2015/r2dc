<?php

use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\TopicRegion;
?>

<?php
$this->params['breadcrumbs'][] = ['label' => 'รายการตัวชี้วัดระดับเขต', 'url' => ['index', 'rep_year' => $rep_year]];

?>
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title" ><i class="glyphicon glyphicon-th-list"></i> 
            ตัวชี้วัดเขต
            <span style="color: #0000cc">
                <?php
                $topic = TopicRegion::find()->where(['id' => $kpi_id])->asArray()->one();
                echo $kpi_id;
                echo "-" . $topic['topic'];
                ?>
            </span>
        </h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>        
    </div>
    <div class="box-body">
        <!--เริ่ม content-->

        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'summary' => '',
            'columns' => [
                /*[
                    'attribute' => 'provcode',
                    'label' => 'รหัส'
                ],*/
                [
                    'attribute' => 'provname',
                    'label' => 'จังหวัด',
                    'format'=>'raw',
                    'value'=>  function($data) use ($kpi_id,$rep_year){
                        $params = [
                            'region/ampur', // action
                            'kpi_id' => $kpi_id,
                            'rep_year' => $rep_year,
                            'provcode'=>$data['provcode']
                        ];

                        return Html::a($data['provname'], $params);
                    }
                ],
                [
                    'attribute' => 'target'
                ],
                 [
                    'attribute' => 'total'
                ],
                 [
                    'attribute' => 'ratio'
                ],
                 [
                    'attribute' => 'mon1',
                     'label'=>'ตค.'
                ],
        ]]);
        ?>


        <!--จบ content-->
    </div>
    <div class="box-footer">

    </div>
</div><!-- /.box -->