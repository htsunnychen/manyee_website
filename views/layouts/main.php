<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\web\Session;
use app\assets\AppAsset;

$homeUrl = Yii::$app->homeUrl;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="keywords" content="Man Yee Jewellery, gold, diamond, Hong Kong Jewellery, 18K, Jade Jewellery, Jewellery gift, Wedding Jewllery, Gemstone" />
    <link id="favicon" rel="icon" type="image/ico" sizes="16x16" href="<?=$homeUrl ?>img/favicon.jpg" />
    
    <?= Html::csrfMetaTags() ?>
    <title>Test - MANYEE Jewellery<?= Html::encode($this->title) ?></title>
    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?=$homeUrl ?>css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?=$homeUrl ?>css/component.css" />
	<link rel="stylesheet" type="text/css" href="<?=$homeUrl ?>css/style.css" />
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
	<script src="<?=$homeUrl ?>js/bootstrap.js"></script>
    
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<? include "header.php"; ?>

<div>
	<div class="container">
        <?= $content ?>
    </div>
</div>

<? include "footer.php"; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
