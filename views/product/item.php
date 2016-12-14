<?
$homeUrl = Yii::$app->homeUrl; 
$img_path = Yii::$app->params['product_image_path'];
?>

<!--flex slider-->
<script defer src="<?=$homeUrl ?>js/jquery.flexslider-min.js"></script>
<link rel="stylesheet" href="<?=$homeUrl ?>css/flexslider-item.css" type="text/css" media="screen" />

<div class="single">
   <div class="container">
   	 <div class="single-main">
   	 	<div class="single-top-main">
	   		<div class="col-md-5 single-top">	
			   <div class="flexslider">
				  <ul class="slides">
				  	<? for ($i = 1; $i <= $product->sub_img_count; $i++) { ?>
					    <li data-thumb="<?=$homeUrl.$img_path.'/'.$product->prod_cd.'_s'.$i.'.jpg' ?>">
					        <div class="thumb-image"> <img src="<?=$homeUrl.$img_path.'/'.$product->prod_cd.'_b'.$i.'.jpg' ?>" data-imagezoom="true" class="img-responsive"> </div>
					    </li>
				    <? } ?>

				  </ul>
				</div>
			</div>
			<div class="col-md-7 single-top-left simpleCart_shelfItem">
				<h2>產品型號：<?=$product->prod_cd ?></h2>
				<h1>鑽石資訊：<?=$product->name ?></h1>
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
					      <a href="#"><img src="<?=$homeUrl.$img_path.'/'.$product->prod_cd.'.jpg' ?>" alt="" class="img-responsive zoom-img"></a>
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
});
</script>
