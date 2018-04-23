<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use elephantsGroup\base\EGController;

/**
 * Site controller
 */
class SiteController extends EGController
{
    public function actionIndex()
    {
		return $this->render('index');
    }
}