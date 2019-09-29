<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Land1Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/jquery-ui.min.css',
        'css/animate.css',
        'css/css-plugin-collections.css',
        'css/menuzord-megamenu.css',
        'css/style-main.css',
        'css/preloader.css',
        'css/custom-bootstrap-margin-padding.css',
        'css/responsive.css',
        'js/revolution-slider/css/settings.css',
        'js/revolution-slider/css/layers.css',
        'js/revolution-slider/css/navigation.css',
        'css/colors/theme-skin-color-set1.css'
    ];
    public $js = [
        'js/jquery-2.2.4.min.js',
        'js/jquery-ui.min.js',
        'js/bootstrap.min.js',
        'js/jquery-plugin-collection.js',
        'js/revolution-slider/js/jquery.themepunch.tools.min.js',
        'js/revolution-slider/js/jquery.themepunch.revolution.min.js',
        'js/html5shiv.min.js',
        'js/respond.min.js',
        'js/custom.js',
        'js/revolution-slider/js/extensions/revolution.extension.actions.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.carousel.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.migration.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.navigation.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.parallax.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js',
        'js/revolution-slider/js/extensions/revolution.extension.video.min.js',
    ];
}