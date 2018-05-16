<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use elephantsGroup\base\EGController;
use elephantsGroup\stat\traits\StatTrait;

/**
 * Site controller
 */
class SiteController extends EGController
{
	use StatTrait;

    public function actionIndex()
    {
		return $this->render('index');
    }
}