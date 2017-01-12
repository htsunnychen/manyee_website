<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\GlobalFunction;

/*AppAsset::register($this);

$session=new Session;
$session->open();
$productMenus = $session['PRODUCT_MENU'];

if ($productMenus == NULL) {
	$productMenus = GlobalFunction::getProductMenus();
	$session['PRODUCT_MENU'] = $productMenus;
}

$session->close(); */

//$productMenus = GlobalFunction::getProductMenus();

$productMenus = GlobalFunction::getProductMenus();

?>

<link rel="stylesheet" type="text/css" href="<?=$homeUrl ?>css/megamenu.css" />

<div style="width:100%; height:166px; background:url(<?=$homeUrl ?>img/topbanner.jpg) repeat-x;">
	<div style="width:100%; height:166px; background:url(<?=$homeUrl ?>img/topbanner.jpg) repeat-x;">
		<div id="TopLayer"><a href="<?=$homeUrl ?>"><img src="<?=$homeUrl ?>img/logo.png" width="169" height="98" border="0" /></a></div>
		<!--div id="GoldPrice" style="width:155px; height:64px;"><div style="width:150px; height:30px; position:absolute; bottom:8px; color:#ffec8b; text-align:center;">買入： 11500港幣/兩<br />賣出： 13500港幣/兩</div></div-->
	</div>
</div>

<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
			 <!-- start header menu -->
			 <ul class="megamenu skyblue">
				
				<? foreach ($productMenus as $menu) { ?>
					<li class="grid">
						<? if (sizeOf($menu->subMenus) == 0) {
							echo Html::a($menu->name, "@web/product/list/".$menu->id);
						} else { ?>
							<a class="color1" href="#"><? echo $menu->name; ?></a>
							<div class="megapanel">
								<div class="row">
									<div class="col1">
										<div class="h_nav">
											<ul>
												<? foreach ($menu->subMenus as $subMenu) { ?>
													<li><? echo Html::a($subMenu->name, "@web/product/list/".$subMenu->id); ?></li>
												<? } ?>
											</ul>	
										</div>
									</div>
								</div>
							</div>
						<? } ?>
					</li>
				<? } ?>

				<li class="grid"><? echo Html::a(Yii::t('app', 'Contact Us'), "@web/contact", ['class'=>'color1']); ?></li>
			</ul>
		</div>
	</div>
</div>

<div style="clear:both;"></div>

<!-- Menu bar -->
<script type="text/javascript" src="<?=$homeUrl ?>js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
