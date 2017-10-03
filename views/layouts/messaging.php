<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAsset;

HomeAsset::register($this);
$home_url = urldecode(Url::toRoute(['/site/index']));
$login_url = urldecode(Url::toRoute(['/user/login']));
$register_url = urldecode(Url::toRoute(['/user/register']));
$services_url = urldecode(Url::toRoute(['/site/services']));
$pricing_url = urldecode(Url::toRoute(['/site/pricing']));
$about_url = urldecode(Url::toRoute(['/site/about']));
$api_url = urldecode(Url::toRoute(['/site/api']));
$payment_url = urldecode(Url::toRoute(['/site/payment']));
$contact_url = urldecode(Url::toRoute(['/site/contact']));
$logout_url = urldecode(Url::toRoute(['/user/logout']));
$single_sms_url = urldecode(Url::toRoute(['/message/create']));
$bulk_sms_url = urldecode(Url::toRoute(['/message/bulk']));
$group_sms_url = urldecode(Url::toRoute(['/message/group']));
$addressbook_url = urldecode(Url::toRoute(['/addressbook/index']));
$credit_statistics_url = urldecode(Url::toRoute(['/reports/credit_statistics']));
$today_statistics_url = urldecode(Url::toRoute(['/reports/today_statistics']));
$sms_statistics_url = urldecode(Url::toRoute(['/reports/sms_statistics']));
?>
<?php $this->beginPage() ?>
<!DOCTYPE html><!-- #0B670B #054705 -->
<html><head>
	<?= Html::csrfMetaTags() ?>
    <title>SpeedySMS - <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/favicon-16x16.png">
    <link rel="manifest" href="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo Yii::$app->request->baseUrl; ?>/web/images/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<meta name="description" content="Send bulk SMS quickly and reliably.">

	

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107316048-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107316048-1');
</script>
      

<link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

 
</head>
<body class="home page-template-default page page-id-7  color-custom layout-full-width header-white">
<?php $this->beginBody() ?>
 
<div id="Wrapper">
 
 
<header id="Header">
 
<div class="header_placeholder"></div>
<div id="Top_bar">
<div class="container">
<div class="column one">
 
<div class="logo">
<h1><a id="logo" href="<?= $home_url ?>" title="tawk.to"><img class="scale-with-grid" src="<?php echo Yii::$app->request->baseUrl; ?>/web/images/logo.jpg" alt="speedysms logo"/></a></h1> </div>
 
<div class="menu_wrapper">
 
 <?php
if(Yii::$app->user->isGuest) {
?>
<a id="header_action_button" href="<?= $register_url ?>">Sign Up</a>
<?php } else { ?>
<a id="header_action_button" href="<?= $logout_url ?>" data-method="post">Log Out</a>
<?php } ?>

 

 
<nav id="menu" class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-1647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="<?= $about_url ?>"><span>Why SpeedySMS</span></a>
<ul class="sub-menu ">
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $about_url ?>"><span>About</span></a></li>
<li id="menu-item-752" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $about_url . '#mission' ?>"><span>Mission</span></a></li>
<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $about_url . '#vision' ?>"><span>Vision</span></a></li>
</ul>
</li>
<li id="menu-item-652" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>Pricing</span></a>
<ul class="sub-menu ">
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $pricing_url ?>"><span>Pricing</span></a></li>
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $payment_url ?>"><span>Payment</span></a></li>
<li id="menu-item-752" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $contact_url ?>"><span>Contact Us</span></a></li>
</ul>
</li>
<li id="menu-item-1648" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="<?= $api_url ?>"><span>API</span></a>
</li>
<?php
if(!Yii::$app->user->isGuest) {
?>
<li id="menu-item-652" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>SMS Portal</span></a>
<ul class="sub-menu ">
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><span>Send SMS</span></a>
<ul class="sub-menu ">
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $single_sms_url ?>"><span>Send Single SMS</span></a></li>
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $bulk_sms_url ?>"><span>Send Bulk SMS</span></a></li>
<li id="menu-item-752" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $group_sms_url ?>"><span>Send Group SMS</span></a></li>
</ul>
</li>
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $addressbook_url ?>"><span>Adressbook</span></a>
</li>
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $credit_statistics_url ?>"><span>Credit Reports</span></a></li>
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $today_statistics_url ?>"><span>Today's Statistics</span></a></li>
<li id="menu-item-752" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $sms_statistics_url ?>"><span>SMS Reports</span></a></li>
</ul>
</li>
<?php } ?>
<?php
if(Yii::$app->user->isGuest) {
?>
<li id="menu-item-192" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?= $login_url ?>"><span>Login</span></a></li>
<?php } ?>
</ul></nav> <a class="responsive-menu-toggle" href="#"><i class='icon-menu'></i></a>
</div>
</div>
</div>
</div>
</header>
 
<div id="Content">
<div class="content_wrapper clearfix">
<div id="Subheader"><div class="container"><div class="column one"><h1 class="title"><?= Html::encode($this->title) ?></h1></div></div></div>
<div class="sections_group">
<div class="section" style="padding-top:0px; padding-bottom:0px; background-color:"><div class="section_wrapper clearfix"><div class="items_group clearfix"><div class="column one column_column">
<?= Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>
<?php echo \Yii::$app->view->renderFile('@app/views/layouts/_sidebar_nav.php'); ?>

<?= $content ?>
</div></div></div></div>
</div> 
</div>
</div>
 
<footer id="Footer" class="clearfix">
<div class="widgets_wrapper">
<div class="container">
</div>
</div>
<div class="footer_copy">
<div class="container">
<div class="column one">
<a id="back_to_top" href="#"><i class="icon-up-open-big"></i></a>
 
<div class="copyright">© 2017 Helloworldng.com. All Rights Reserved. </div>

</div>
</div>
</div>
</footer>
</div>

<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
