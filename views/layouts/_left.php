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
        <ul class="sidebar-menu">


            <li class="header">รายการ</li>
            <li><a href="<?= Url::to(['index']) ?>"><i class="fa fa-circle-o text-orange"></i> <span>หน้าหลัก</span></a></li>

            <li><a href="<?= Url::to(['upload1']) ?>"><i class="fa fa-circle-o text-primary"></i> <span>ส่งข้อมูล (รพศ/รพท/รพช.)</span></a></li>
            <li><a href="<?= Url::to(['upload2']) ?>"><i class="fa fa-circle-o text-yellow"></i> <span>ส่งข้อมูล (รพ.สต/สอ/สสช.)</span></a></li>

            <li class="header">ค้นหา</li>
            <li><a href="<?=  Url::to(['find'])?>"><i class="fa fa-circle-o text-primary"></i> <span>สถานบริการ</span></a></li>

            <li class="header">จังหวัด</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>พิษณุโลก</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>อุตรดิตถ์</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>เพชรบูรณ์</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-blue"></i> <span>สุโขทัย</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> <span>ตาก</span></a></li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
