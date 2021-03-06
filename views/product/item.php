<?
$homeUrl = Yii::$app->homeUrl; 
$img_path = Yii::$app->params['product_image_path'];
?>

<!--flex slider-->
<script defer src="<?=$homeUrl ?>js/jquery.flexslider-min.js"></script>
<script src ="<?=$homeUrl ?>js/magnific.js"></script>

<link rel="stylesheet" href="<?=$homeUrl ?>css/flexslider-item.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?=$homeUrl ?>css/magnific.css" type="text/css" media="screen" />

<style type="text/css">
	.flex-viewport {
	  max-height:500px;
	}
</style>

<div class="single">
   <div class="container">
   	 <div class="single-main">
   	 	<div class="single-top-main">
	   		<div class="col-md-5 single-top">	
			   <div class="flexslider">
				  <ul class="slides">
				  	<? for ($i = 1; $i <= $product->sub_img_count; $i++) { ?>
					    <li data-thumb="<?=$homeUrl.$img_path.'/'.$product->prod_cd.'_s'.$i.'.jpg' ?>">
					        <div class="thumb-image">
					        	<a class="image-popup" href="<?=$homeUrl.$img_path.'/'.$product->prod_cd.'_b'.$i.'.jpg' ?>">
					        		<img src="<?=$homeUrl.$img_path.'/'.$product->prod_cd.'_s'.$i.'.jpg' ?>" data-imagezoom="true" class="img-responsive">
					        	</a>
					        	
				        	</div>
					    </li>
				    <? } ?>

				  </ul>
				</div>
			</div>
			<div class="col-md-7 single-top-left simpleCart_shelfItem">
				<h2><? echo Yii::t('app', 'Product Code'); ?>：<?=$product->prod_cd ?></h2>
				<h1><? echo Yii::t('app', 'Product Information'); ?>：<?=$product->name ?></h1>
				<h3></h3>
				<p stlye="mainTxt_inside"><?=$product->description ?></p>
				
			</div>
		   <div class="clearfix"> </div>
	   </div>
	   
	   <div class="singlepage-product">
	   		<? foreach ($suggest_products as $product) { ?>
	   			<div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="<?=$homeUrl ?>product/item/<?=$product->id ?>"><img src="<?=$homeUrl.$img_path.'/'.$product->prod_cd.'.jpg' ?>" alt="" class="img-responsive zoom-img"></a>
					   </div>
					   <div class="home-product-bottom">
								<h3><a href="single"><?=$product->prod_cd ?></a></h3>
						</div>
					</div>
				 </div>
	   		<? } ?>
			     
		  <div class="clearfix"> </div>
	   </div>
   	 </div>
   </div>
</div>

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });

	$('.image-popup').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
	});
});
</script>
