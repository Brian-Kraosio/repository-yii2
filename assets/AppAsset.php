<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/dist/css/AdminLTE.css',
        'assets/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'assets/bower_components/font-awesome/css/font-awesome.min.css',
        'assets/bower_components/Ionicons/css/ionicons.min.css',
        'assets/dist/css/AdminLTE.min.css',
        'assets/dist/css/skins/_all-skins.min.css',
        'assets/bower_components/morris.js/morris.css',
        'assets/bower_components/jvectormap/jquery-jvectormap.css',
        'assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'assets/bower_components/bootstrap-daterangepicker/daterangepicker.css',
        'assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'
    ];
    public $js = [];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap4\BootstrapAsset',
    // ];
}
