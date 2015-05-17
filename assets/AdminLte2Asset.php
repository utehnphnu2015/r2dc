<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLte2Asset extends AssetBundle
{
    public $sourcePath = '@themes/adminlte2';
    public $css = [
        'css/AdminLTE.min.css',
        'css/skins/_all-skins.min.css',
        'ionicons/css/ionicons.min.css',
        'font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
        'js/app.min.js',
        'js/demo.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
