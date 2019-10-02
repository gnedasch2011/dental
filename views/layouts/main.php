<?php
/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use app\assets\Land1Asset;
use yii\web\View;

Land1Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="MediPress - Health & Medical HTML Template"/>
    <meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5"/>
    <meta name="author" content="ThemeMascot"/>
    <!-- Page Title -->
    <title>DentalPro | Dental Clinic, Dentist & Dental Care HTML5 Template</title>

    <!-- Favicon and Touch Icons -->
    <link href="/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

</head>
<?php $this->beginBody() ?>
<body class="has-side-panel side-panel-right fullwidth-page">
<div id="wrapper">
    <header id="header" class="header">
        <div class="header-top bg-theme-colored sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="widget text-white">
                            <i class="fa fa-clock-o text-white"></i> Часы работы: Пнд - Вск :
                            8.00 - 22.00
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget pull-right flip sm-pull-none">
                            <div id="side-panel-trigger" class="side-panel-trigger mt-5">
                                <a href="#"><i class="fa fa-bars text-white font-24"></i></a>
                            </div>
                        </div>
                        <!--                        <div class="widget">-->
                        <!--                            <ul class="list-inline text-right flip sm-text-center">-->
                        <!--<!--                                <li>-->-->
                        <!--<!--                                    <a class="text-white" href="#">FAQ</a>-->
                        -->
                        <!--<!--                                </li>-->-->
                        <!--                                <li class="text-white">|</li>-->
                        <!--                                <li>-->
                        <!--                                    <a class="text-white" href="#">Help Desk</a>-->
                        <!--                                </li>-->
                        <!--                                <li class="text-white">|</li>-->
                        <!--                                <li>-->
                        <!--                                    <a class="text-white" href="#">Support</a>-->
                        <!--                                </li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle p-0 bg-lighter xs-text-center">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <a class=" pull-left flip sm-pull-center mb-15"
                           href="index-mp-layout1.html"><img src="images/page_index/logo.png"
                                                             alt=""></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="header-widget-contact-info-box sm-text-center">
                            <div class="media element contact-info">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-envelope text-theme-colored font-icon sm-display-block"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="title">Email</a>
                                    <h5 class="media-heading subtitle">
                                        <a href="mailto:<?= Yii::$app->params['email']; ?>"
                                           class="">
                                            <?= Yii::$app->params['email']; ?>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                            <div class="media element contact-info">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-phone-square text-theme-colored font-icon sm-display-block"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="title">Консультация</a>
                                    <h5 class="media-heading subtitle">
                                        <a href="tel:<?= Yii::$app->params['phoneAncor']; ?>"
                                           class="">
                                            <?= Yii::$app->params['phone']; ?>,<br>
                                            <?= Yii::$app->params['phone2']; ?>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                            <div class="media element contact-info">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-building-o text-theme-colored font-icon sm-display-block"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="title">Адрес</a>
                                    <h5 class="media-heading subtitle">
                                        <?= Yii::$app->params['addr1']; ?>,<br>
                                        <?= Yii::$app->params['addr2']; ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container">
                    <nav id="menuzord" class="menuzord blue no-bg">
                        <div class="pull-right sm-pull-left mb-sm-15">
                            <a class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 ajaxload-popup"
                               href="ajax-load/form-appointment.html">Записаться на приём</a>
                        </div>
                        <ul class="list-inline nav-side-icon-list pull-right">
                            <li>
                                <a href="#fullscreen-search-form" id="fullscreen-search-btn"><i
                                            class="search-icon fa fa-search"></i></a>
                                <div id="fullscreen-search-form" class="hanging-top-search-form">
                                    <button type="button" class="close">×</button>
                                    <form>
                                        <input type="search" value=""
                                               placeholder="Search keywords(s)"/>
                                        <button type="submit"><i
                                                    class="search-icon fa fa-search"></i></button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i
                                                class="fa fa-bars font-24"></i></a></div>
                            </li>
                        </ul>
                        <ul class="menuzord-menu">
                            <li class="active">
                                <a href="#home">О докторе</a>
                            </li>

                            <li class="active">
                                <a href="#home">Протезирование</a>
                            </li>
                            <li class="active">
                                <a href="#home">Отбеливание</a>
                            </li>
                            <li class="active">
                                <a href="#home">Установка коронок</a>
                            </li>

                            <li class="active">
                                <a href="#home">Композитные виниры</a>
                            </li>
<!--                            <li><a href="#">Услуги</a>-->
<!--                                <ul class="dropdown">-->
<!--                                    --><?php //foreach (Yii::$app->params['services'] as $link=>$services): ?>
<!--                                        <li>-->
<!--                                            <a href="--><?//= $link ;?><!--">--><?//= $services ;?><!--</a>-->
<!--                                        </li>-->
<!--                                    --><?php //endforeach; ?>
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="active">-->
<!--                                <a href="#home">Контакты</a>-->
<!--                            </li>-->

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <?= $content ?>
    <!-- Footer -->
    <footer id="footer" class="footer bg-black-111">
        <div class="container pt-70 pb-40">
            <div class="row border-bottom-black">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
                        <p>Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur
                            incidihil quo officia.</p>
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-map-marker text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#">203, Envato Labs, Behind Alis
                                    Steet,
                                    Melbourne, Australia</a></li>
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-phone text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#">123-456-789</a></li>
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#">contact@yourdomain.com</a></li>
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-globe text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#">www.yourdomain.com</a></li>
                        </ul>
                    </div>
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Connect With Us</h5>
                        <ul class="styled-icons icon-dark icon-circled icon-sm">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Useful Links</h5>
                        <ul class="list-border">
                            <li><a href="index-mp-layout1.html">Home</a></li>
                            <li><a href="page-about1.html">About us</a></li>
                            <li><a href="page-contact1.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Other Links</h5>
                        <ul class="list-border">
                            <li><a href="shortcode-sitemap.html">FAQ</a></li>
                            <li><a href="shortcode-sitemap.html">Sitemap</a></li>
                            <li><a href="page-contact1.html">Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Latest News</h5>
                        <div class="latest-posts">
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="blog-single-right-sidebar.html" class="post-thumb"><img
                                            alt="" src="http://placehold.it/80x55"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a
                                                href="blog-single-right-sidebar.html">Sustainable
                                            Construction</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="blog-single-right-sidebar.html" class="post-thumb"><img
                                            alt="" src="http://placehold.it/80x55"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a
                                                href="blog-single-right-sidebar.html">Industrial
                                            Coatings</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="blog-single-right-sidebar.html" class="post-thumb"><img
                                            alt="" src="http://placehold.it/80x55"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a
                                                href="blog-single-right-sidebar.html">Storefront
                                            Installations</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Call Us Now</h5>
                        <div class="text-gray">
                            +61 3 1234 5678 <br>
                            +12 3 1234 5678
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Opening Hours</h5>
                        <div class="opening-hours">
                            <ul class="list-border">
                                <li class="clearfix"><span> Mon - Tues :  </span>
                                    <div class="value pull-right flip"> 6.00 am - 10.00 pm</div>
                                </li>
                                <li class="clearfix text-white"><span> Wednes - Thurs :</span>
                                    <div class="value pull-right flip"> 8.00 am - 6.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Fri : </span>
                                    <div class="value pull-right flip"> 3.00 pm - 8.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Sun : </span>
                                    <div class="value pull-right flip"> Closed</div>
                                </li>
                                <li class="clearfix"><span> Sat : </span>
                                    <div class="value pull-right flip"> 10.00 am - 2.00 pm</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Subscribe Us</h5>
                        <!-- Mailchimp Subscription Form Starts Here -->
                        <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                            <div class="input-group">
                                <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                       class="form-control input-lg font-16" data-height="45px"
                                       id="mce-EMAIL-footer">
                                <span class="input-group-btn">
                  <button data-height="45px"
                          class="btn btn-colored btn-theme-colored btn-xs m-0 font-14"
                          type="submit">Subscribe</button>
                </span>
                            </div>
                        </form>
                        <?php
                        $script = <<< JS
                            $('#mailchimp-subscription-form-footer').ajaxChimp({
                                callback: mailChimpCallBack,
                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                            });

                            function mailChimpCallBack(resp) {
                                // Hide any previous response text
                                var mailchimpform = $('#mailchimp-subscription-form-footer'),
                                    response = '';
                                mailchimpform.children(".alert").remove();
                                if (resp.result === 'success') {
                                    response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                } else if (resp.result === 'error') {
                                    response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                }
                                mailchimpform.prepend(response);
                            }
JS;

                        $this->registerJs($script, yii\web\View::POS_READY); ?>
                        <!-- Mailchimp Subscription Form Validation-->


                        <!-- Mailchimp Subscription Form Ends Here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-222">
            <div class="container pt-10 pb-0">
                <div class="row">
                    <div class="col-md-6 sm-text-center">
                        <p class="font-13 text-black-777 m-0">Copyright &copy;2017 ThemeMascot. All
                            Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right flip sm-text-center">
                        <div class="widget no-border m-0">
                            <ul class="styled-icons icon-dark icon-circled icon-sm">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <?php $this->endBody() ?>
</body>
</html>
<?php
$script = <<< JS
console.log('ste');
          $('.ajaxload-popup').click()
JS;

$this->registerJs($script, yii\web\View::POS_READY); ?>
<?php $this->endPage() ?>
