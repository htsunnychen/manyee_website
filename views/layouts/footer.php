<? use yii\helpers\Html;
use yii\helpers\Url; ?>

<div style="width:100%; background:#9f8462; height:130px; position:relative; margin-top:0;">
	<div id="BottomLayer">
		<? echo Html::a(Yii::t('app', 'Site Map'), "#"); ?> |
		<? echo Html::a(Yii::t('app', 'Privacy Statement'), "#"); ?> |
		<? echo Html::a(Yii::t('app', 'Contact Us'), "@web/contact"); ?>
		<br />
		<br />
		
		<div>
			<? echo Html::a('繁', [Yii::$app->request->pathInfo, 'language'=>'zh-HK']); ?> |
			<? echo Html::a('簡', [Yii::$app->request->pathInfo, 'language'=>'zh-CN']); ?>
		</div>
	
		<a style="text-transform:uppercase;">Copyright © 2014 Manyee Jewellery</a>
	</div>
</div>