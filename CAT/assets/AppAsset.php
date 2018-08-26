<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assetspage/css/bootstrap.min.css',
		'assetspage/font-awesome/css/font-awesome.min.css',
		'assetspage/plugins/cubeportfolio/css/cubeportfolio.min.css',
		'assetspage/css/nivo-lightbox.css',
		'assetspage/css/nivo-lightbox-theme/default/default.css',
		'assetspage/css/owl.carousel.css',
		'assetspage/css/owl.theme.css',
		'assetspage/css/animate.css',
		'assetspage/css/style.css',
		'assetspage/bodybg/bg1.css',
		'assetspage/color/default.css',
		'css/site.css',
    ];
    public $js = [
		'assetspage/js/jquery.min.js',
		'assetspage/js/bootstrap.min.js',
		'assetspage/js/jquery.easing.min.js',
		'assetspage/js/wow.min.js',
		'assetspage/js/jquery.scrollTo.js',
		'assetspage/js/jquery.appear.js',
		'assetspage/js/stellar.js',
		'assetspage/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js',
		'assetspage/js/owl.carousel.min.js',
		'assetspage/js/nivo-lightbox.min.js',
		'assetspage/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
