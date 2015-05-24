<?php

use yii\helpers\Url;
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $themes ?>/img/nurse.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
        //*************************** count ตัวชี้วัด *************************
        
        $command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_moph');
        $moph = $command->queryScalar();
        $command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_region');
        $region = $command->queryScalar();
        $command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_province');
        $province = $command->queryScalar();
        $command = Yii::$app->db->createCommand('SELECT COUNT(id) AS tcount FROM topic_qof');
        $qof = $command->queryScalar();
        
            //End*************************** count ตัวชี้วัด *************************
        ?>
        
        <ul class="sidebar-menu">


            <li class="header"><h5><div class="label label-default"> รายการ</div></h5></li>
            <li><a href="<?php echo Url::to(['dashboard/index','type'=>1]); ?>"><i class="fa fa-circle text-aqua"></i> <span>ตัวชี้วัดกระทรวง</span><small class="label pull-right bg-red"><?=$moph?></small></a></li>

            <li><a href="<?php echo Url::to(['dashboard/index','type'=>2]); ?>"><i class="fa fa-circle text-green"></i> <span>ตัวชี้วัดเขต</span> <small class="label pull-right bg-orange"><?=$region?></small></a> </li>
            <li><a href="<?php echo Url::to(['dashboard/index','type'=>3]); ?>"><i class="fa fa-circle text-orange"></i> <span>ตัวชี้วัดจังหวัด</span><small class="label pull-right bg-blue"><?=$province?></small></a></li>
            <li><a href="<?php echo Url::to(['dashboard/index','type'=>4]); ?>"><i class="fa fa-circle text-red"></i> <span>ตัวชี้วัด QOF</span><small class="label pull-right bg-aqua"><?=$qof?></small></a></li>
            
             <li class="header"><h5><div class="label label-default">ข้อมูลพื้นฐาน</div></h5></li>
                    <li><a href="#"><i class="fa fa-check-circle-o text-red"></i> <span>ข้อมูลทั่วไป</span></a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o text-yellow"></i> <span>การเงินการคลัง</span></a></li>
                    <li><a href="#"><i class="fa fa-check-circle-o text-aqua"></i> <span>กำลังคน</span></a></li>
                  
            <li class="header"><h5><div class="label label-default"> จังหวัด</div></h5></li>
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>พิษณุโลก</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>อุตรดิตถ์</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>เพชรบูรณ์</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-blue"></i> <span>สุโขทัย</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-danger"></i> <span>ตาก</span></a></li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
