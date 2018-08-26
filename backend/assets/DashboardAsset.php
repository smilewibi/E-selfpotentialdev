<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'adminLTE/bootstrap/css/bootstrap.min.css',
        'adminLTE/dist/css/AdminLTE.min.css',
		'adminLTE/dist/css/skins/_all-skins.min.css',
		'adminLTE/plugins/iCheck/flat/blue.css',
		'adminLTE/plugins/morris/morris.css',
		'adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
		'adminLTE/plugins/datepicker/datepicker3.css',
		'adminLTE/plugins/daterangepicker/daterangepicker.css',
		'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
		'css/site.css',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
		'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
    ];
    public $js = [
		'//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
		'adminLTE/plugins/sparkline/jquery.sparkline.min.js',
		'adminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
		'adminLTE/plugins/fastclick/fastclick.min.js',
		'adminLTE/dist/js/app.min.js',
		'adminLTE/dist/js/pages/dashboard.js',
		'adminLTE/bootstrap/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
