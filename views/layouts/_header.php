<?php
use yii\helpers\Url;
?>
<header class="main-header" style="border-bottom: 1px solid green">
    <!-- Logo -->
    <a href="<?=  Url::to(['site/index'])?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">KPI</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">R2DC</span>
        <?php //Yii::$app->name?>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                 <li>
                    <a href="#" >คลังข้อมูลเขตสุขภาพที่ 2</i></a>
                </li>
                  <?php echo $this->render('_notify', ['themes' => $themes]) ?>  
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>