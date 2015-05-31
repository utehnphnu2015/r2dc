<?php

use yii\helpers\Url;


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
                <a href="<?php echo Url::to(['moph/index']); ?>" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>

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
                <a href="<?php echo Url::to(['region/index']); ?>" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="<?php echo Url::to(['province/index']); ?>" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="<?php echo Url::to(['qof/index']); ?>" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div>
</div>



