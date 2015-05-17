<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminLte2Asset;

$themes = yii::getAlias("@themes") . "/adminlte2";

AdminLte2Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <title><?= Yii::$app->name ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php $this->head() ?>


    </head>
    <body class="skin-green-light sidebar-mini">
        <?php $this->beginBody() ?>
        <!-- Site wrapper -->
        <div class="wrapper">

            <?php echo $this->render('_header', ['themes' => $themes]) ?>            
            <?php echo $this->render('_left', ['themes' => $themes]); ?>          


            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">                    
                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ])
                    ?>
                </section>

                <!-- Main content -->
                <section class="content" style="margin-top: 15px">
                    
                    <?= $content ?>
                    

                </section><!-- /.content -->
            </div>

            <?php echo $this->render('_footer', ['themes' => $themes]); ?>     
            <?php echo $this->render('_control_menu', ['themes' => $themes]); ?>


        </div><!-- ./wrapper -->


        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>