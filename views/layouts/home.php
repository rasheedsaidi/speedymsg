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
?>
<?php $this->beginPage() ?>
<!DOCTYPE html><!-- #0B670B #054705 -->
<html><head>
	<title>SpeedySMS - Simple and Fast SMS Messaging</title>
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

	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

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
<body class="home page-template-default page page-id-7  color-custom layout-full-width header-white header-bg">
<?php $this->beginBody() ?>
 
<div id="Wrapper">
 
 
<header id="Header">
 
<div class="header_placeholder"></div>
<div id="Top_bar">
<div class="container">
<div class="column one">
 
<div class="logo">
<h1><a id="logo" href="index.html" title="tawk.to"><img class="scale-with-grid" src="<?php echo Yii::$app->request->baseUrl; ?>/web/images/logo.jpg" alt="speedysms logo"/></a></h1> </div>
 
<div class="menu_wrapper">
 
<a id="header_action_button" href="<?= $register_url ?>">Sign Up</a>
 

 
<nav id="menu" class="menu-main-menu-container"><ul id="menu-main-menu" class="menu"><li id="menu-item-1647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="<?= $about_url ?>"><span>Why SpeedySMS</span></a>
<ul class="sub-menu ">
<li id="menu-item-844" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $about_url ?>"><span>About</span></a></li>
<li id="menu-item-752" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $about_url . '#mission' ?>"><span>Mission</span></a></li>
<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $about_url . '#vision' ?>"><span>Vision</span></a></li>
</ul>
</li>
<li id="menu-item-652" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $pricing_url ?>"><span>Pricing</span></a></li>
<li id="menu-item-1648" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="<?= $api_url ?>"><span>API</span></a>
</li>
<li id="menu-item-192" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?= $login_url ?>"><span>Login</span></a></li>
</ul></nav> <a class="responsive-menu-toggle" href="#"><i class='icon-menu'></i></a>
</div>
</div>
</div>
</div>
</header>
 
<div id="Content">
<div class="content_wrapper clearfix">
 
<?= $content ?>
 
</div>
</div>
 
<footer id="Footer" class="clearfix">
<div class="widgets_wrapper">
<div class="container">
<div class="one-third column"><aside id="nav_menu-2" class="widget widget_nav_menu"><h4>Product</h4><div class="menu-product-container"><ul id="menu-product" class="menu"><li id="menu-item-1646" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1646"><a href="features/index.html">Features</a></li>
<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250"><a href="features/iphone-app/index.html">iPhone App</a></li>
<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="features/android-app/index.html">Android App</a></li>
<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252"><a href="knowledgebase/integrations/index.html">Integrations</a></li>
<li id="menu-item-653" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-653"><a href="knowledgebase/index.html">Knowledgebase</a></li>
</ul></div></aside></div><div class="one-third column"><aside id="nav_menu-3" class="widget widget_nav_menu"><h4>About</h4><div class="menu-about-container"><ul id="menu-about" class="menu"><li id="menu-item-380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-380"><a href="team/index.html">Mission & Vision</a></li>
<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="blog/index.html">Blog</a></li>
<li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a href="privacy-policy/index.html">Privacy Policy</a></li>
<li id="menu-item-817" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-817"><a href="terms-of-service/index.html">Terms of Service</a></li>
<li id="menu-item-315" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-315"><a href="join-the-team/index.html">Career</a></li>
</ul></div></aside></div><div class="one-third column"><aside id="text-3" class="widget widget_text"><h4>Connect and follow us on our various social media</h4> <div class="textwidget"><p>Try our messaging platform today.</p>
<div class="social">
<ul>
<li class="twitter"><a target="_blank" href="https://twitter.com/tawktotawk/" title="Twitter"><i class="icon-twitter"></i></a>
<li class="facebook"><a target="_blank" href="https://www.facebook.com/tawkto/" title="Facebook"><i class="icon-facebook"></i></a></li>
<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCmmsTnOAYjv1pZl-ueAMM-A" title="Youtube"><i class="icon-play"></i></a></li>
<li class="linked_in"><a target="_blank" href="https://www.linkedin.com/company/tawk-to" title="LinkedIn"><i class="icon-linkedin"></i></a></li>
</ul>
</div>
</div>
</aside></div>
</div>
</div>
<div class="footer_copy">
<div class="container">
<div class="column one">
<a id="back_to_top" href="#"><i class="icon-up-open-big"></i></a>
 
<div class="copyright">
© 2017 SpeedySMS.com.ng inc. All Rights Reserved. </div>
 
<div class="social">
<ul>
</ul>
</div>
</div>
</div>
</div>
</footer>
</div>

<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>
