<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Product;

class ContactController extends Controller
{
	public function actionIndex() {
		return $this->actionContact();
	}

	public function actionContact() {
		return $this->render('contact');
	}
}