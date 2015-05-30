<?php

use yii\helpers\Url;
use yii\helpers\Html;

$command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_moph');
$moph = $command->queryScalar();
$command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_region');
$region = $command->queryScalar();
$command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_province');
$province = $command->queryScalar();
$command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_qof');
$qof = $command->queryScalar();
?>

<div class="constraints">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?= $moph ?></h3>
                    <p>ตัวชี้วัดกระทรวง</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="<?php echo Url::to(['dashboard/index', 'type' => 1]); ?>" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>

            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?= $region ?></h3>
                    <p>ตัวชี้วัดเขต</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo Url::to(['dashboard/index', 'type' => 2]); ?>" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?= $province ?></h3>
                    <p>ตัวชีวัดจังหวัด</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo Url::to(['dashboard/index', 'type' => 3]); ?>" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= $qof ?></h3>
                    <p>ตัวชี้วัด QOF</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo Url::to(['dashboard/index', 'type' => 4]); ?>" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div>
</div>

<?php
IF ($type == 1) {
    $typename = 'ตัวชี้วัดกระทรวง';
    $panel = 'info';
} else if ($type == 2) {
    $typename = 'ตัวชี้วัดเขต';
    $panel = 'success';
} else if ($type == 3) {
    $typename = 'ตัวชี้วัดจังหวัด';
    $panel = 'warning';
} else if ($type == 4) {
    $typename = 'ตัวชี้วัด QOF';
    $panel = 'danger';
}
?>

<div class="col-md-12">
    <div class="panel panel-<?= $panel ?>">
        <div class="panel-heading">
            <h3 class="panel-title"> <i class='glyphicon glyphicon-check'></i> 
<?= $typename; ?>
            </h3>
        </div>
        <div class="panel-body">
            <?php
            echo yii\grid\GridView::widget([
                //echo \kartik\grid\GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'label' => 'รายการ',
                        'format' => 'raw',
                        'value' => function($model) {
                            $topic = $model['topic'];
                            $id = $model['id'];
                            $title = ''; //$provname . ' ' . $provname;
                            //$url = "index.php?r=region/changwat";
                            return Html::a($topic, [
                                        'region/changwat',
                                        'id' => $id,
                                            ], ['title' => $title]);
                        }
                            ],
                            [
                                'attribute' => 'percent',
                                'header' => 'ร้อยละ'
                            ],
                        ],
                    ]);
                    ?>

        </div>
    </div>
</div>