<?
use yii\helpers\Html;

$homeUrl = Yii::$app->homeUrl; 
?>

<link rel="stylesheet" type="text/css" href="<?=$homeUrl ?>css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=$homeUrl ?>css/responsiveslides.css" media="screen" />

<div class="banner">
	<div class="container">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<a href="#"><? echo Html::img('@web/img/slider_p1.png'); ?></a>
					<div class="flex-caption">
						<h1 style="color: #baa72b; border-bottom: #baa72b solid 1px;">華麗金飾</h1>
					</div>
				</li>
				<li>
					<a href="#"><? echo Html::img('@web/img/slider_p2.png'); ?></a>
					<div class="flex-caption">
						<h1 style="color: #869bcc; border-bottom: #869bcc solid 1px;">閃耀鑽飾</h1>
					</div>
				</li>
				<li>
					<a href="#"><? echo Html::img('@web/img/slider_p4.png'); ?></a>
					<div class="flex-caption">
						<h1 style="color: #396c37; border-bottom: #396c37 solid 1px;">翡翠珍珠</h1>
					</div>
				</li>
				<li>
					<a href="#"><? echo Html::img('@web/img/slider_p5.png'); ?></a>
					<div class="flex-caption">
						<h1 style="color: #736b53; border-bottom: #736b53 solid 1px;">品牌系列</h1>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- About Us -->
<div id="mainTxt" >
	<div class="mainTxt_title" >
		<h1><? echo Yii::t('app', 'About Us'); ?></h1>
	</div>
	<div class="mainTxt_inside"><? echo Yii::t('app', 'About Us Description'); ?></div>
	<!--End of Main Txt -->
</div>

<div style="clear:both;"></div>

<script src="<?=$homeUrl?>js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
  // Slideshow 4
  $("#slider3").responsiveSlides({
    auto: true,
    pager: false,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
      $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      $('.events').append("<li>after event fired.</li>");
    }
  });

});
</script>
