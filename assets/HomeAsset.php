<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'https://fonts.googleapis.com/css?family=Bad+Script|Courgette|Handlee|Lato|Montserrat',
		'//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css',
		'web/css/base.css',
		'web/css/layout.css',
		'web/css/variables.css',
        'web/css/jquery.datetimepicker.css',
		'web/css/grid.css',
		'web/css/animations.css',
		'web/css/shortcodes.css',
		'web/css/fonts.css',		
		'web/js/owl-carousel/owl.theme6f3e.css',
		'web/css/ui/jquery.ui.all6f3e.css',
		'web/css/responsive6f3e.css',
		'web/css/skins/green/images6f3e.css',
		'web/css/style8a54.css',
		'web/css/style6f3e-2.css',	
		'web/css/style-colors6f3e.css',		
		'web/css/custom6f3e.css',		
		'web/css/pure-min.css',
		'web/css/grids-responsive-min.css',
		'web/css/sms.css',
		
		
	];
    public $js = [
		//'web/js/jqueryb8ff.js',
		'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',
		'web/js/jquery.plugins6f3e.js',
		'web/js/mfn.menu6f3e.js',
		'web/js/jquery-migrate.min330a.js',
		'web/js/scripts6f3e.js',
		'web/js/owl-carousel/owl.carousel.min6f3e.js',
		'web/js/jquery/ui/core.mine899.js',
		'web/js/jquery/ui/widget.mine899.js',
		'web/js/jquery/ui/tabs.mine899.js',
		'web/js/message.js',
		'web/js/jquery.datetimepicker.full.min.js',
		'web/js/sms.js',
	
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}