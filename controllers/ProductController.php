<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Product;

class ProductController extends Controller
{
	public function actionIndex() {
		return $this->actionList();
	}

	
	public function actionList() {
		$category_id = Yii::$app->request->get('id');

		$products = Product::find()->where(['category_id' => $category_id])
									->orderBy('prod_cd')
									->all();

		return $this->render('list', ['products' => $products]);
	}
	
	public function actionItem() {
		$product_id = Yii::$app->request->get('id');

		$product = Product::find()->where(['id' => $product_id])->one();

		// Get first 3 products as suggested product
		$suggest_products = Product::find()->where(['category_id' => $product->category_id])
									->orderBy('prod_cd')
									->limit(3) //TODO configurable
									->all();

		return $this->render('item', ['product' => $product, 'suggest_products'=>$suggest_products]);
	}
}