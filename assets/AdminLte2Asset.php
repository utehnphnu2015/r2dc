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
        'font-awesome/css/font-awesome.min.css',
        "plugins/jvectormap/jquery-jvectormap-1.2.2.css"
    ];
    public $js = [
        'js/app.min.js',
        'js/demo.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'plugins/chartjs/Chart.min.js',
        "plugins/sparkline/jquery.sparkline.min.js",
        //"js/pages/dashboard2.js" ,
        "plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
        "plugins/jvectormap/jquery-jvectormap-world-mill-en.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'fedemotta\datatables\DataTablesAsset',
    ];
}
