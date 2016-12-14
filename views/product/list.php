<?
$homeUrl = Yii::$app->homeUrl;
$img_path = Yii::$app->params['product_image_path'];

const NO_OF_COLUMN = 4;
?>

<div class="products">
	<div class="container">
		<div class="products-grids">
			<div class="col-md-12 products-grid-left">
				
				<? 
				$colNo = 0;
				foreach ($products as $product) {
					$colNo++;
					?>

					<? if ($colNo == 1) { ?>
						<div class="products-grid-lft">
					<? } ?>

							<div class="products-grd">
								<div class="p-one simpleCart_shelfItem prd">
									<a href="<?=$homeUrl ?>product/item/<?=$product->id ?>"><img src="<?=$homeUrl.'/'.$img_path.'/'.$product->prod_cd ?>.jpg" alt="" class="img-responsive zoom-img"></a>
									<h4><?=$product->prod_cd ?></h4>
								</div>	
							</div>

					<? if ($colNo == NO_OF_COLUMN) {
						$colNo = 0; 
					?>
						</div>
					<? } ?>
				<?} ?>

			</div>
		</div>
	</div>
</div>


