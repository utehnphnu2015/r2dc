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
                    <i class="ion ion-medkit"></i>
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
                    <i class="ion ion-ios-book-outline"></i>
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


<div class="constraints">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3>0</h3>
                    <p>ข้อมูลทั่วไป</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>

            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-teal-active">
                <div class="inner">
                    <h3>0</h3>
                    <p>กำลังคน</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-stalker"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-olive">
                <div class="inner">
                    <h3>0</h3>
                    <p>การเงินการคลัง</p>
                </div>
                <div class="icon">
                    <i class="ion ion-erlenmeyer-flask-bubbles"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-light-blue-gradient">
                <div class="inner">
                    <h3>0</h3>
                    <p>GIS</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-pin"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div>
</div>

<div class="constraints">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-fuchsia-active">
                <div class="inner">
                    <h3>0</h3>
                    <p>ส่งข้อมูล</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-upload"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>

            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-lime-active">
                <div class="inner">
                    <h3>0</h3>
                    <p>สถิติ</p>
                </div>
                <div class="icon">
                    <i class="ion ion-connection-bars"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-gray-active">
                <div class="inner">
                    <h3>0</h3>
                    <p>อื่นๆ</p>
                </div>
                <div class="icon">
                    <i class="ion ion-erlenmeyer-flask-bubbles"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple-active">
                <div class="inner">
                    <h3>0</h3>
                    <p>Back Office</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-settings"></i>
                </div>
                <a href="#" class="small-box-footer">รายละเอียด<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div>
</div>

