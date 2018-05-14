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
class SbAdminRTLAsset extends AssetBundle
{
    public function init() {
        $this->jsOptions['position'] = View::POS_BEGIN;
        parent::init();
    }

    public $basePath = '@webroot';
    public $baseUrl = '@web/assets_b/sb-admin';
    public $css = [
        'css/bootstrap-rtl.css',
        'css/sb-admin-rtl.css',
    ];

    public $js = [
    ];
    public $depends = [
    ];
}
