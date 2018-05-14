<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets_b;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 */
class SbAdminAsset extends AssetBundle
{
    public function init() {
        $this->jsOptions['position'] = View::POS_BEGIN;
        parent::init();
    }

    public $basePath = '@webroot';
    public $baseUrl = '@web/assets_b/sb-admin';
    public $css = [
        'css/bootstrap.min.css',
        'css/sb-admin.css',
        'css/morris.css',
        'css/font-awesome.min.css',
    ];

    public $js = [
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/raphael.min.js',
        'js/morris.min.js',
        'js/morris-data.js',
    ];
    public $depends = [
        //'yii\web\JqueryAsset',
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
