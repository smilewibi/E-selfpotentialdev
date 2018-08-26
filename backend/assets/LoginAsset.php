<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'adminLTE/bootstrap/css/bootstrap.min.css',
        'adminLTE/dist/css/AdminLTE.min.css',
		'adminLTE/plugins/iCheck/flat/blue.css',
    ];
    public $js = [
		'adminLTE/plugins/iCheck/icheck.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
    ];
}
