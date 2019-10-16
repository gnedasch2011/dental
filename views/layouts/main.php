<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\ButtonCallback\ButtonCallback;
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
                            <i class="fa fa-clock-o text-white"></i> Часы
                            работы: <?= Yii::$app->params['workHours']; ?>
                        </div>
                    </div>
                    <div class="col-md-4 text-right">
                        <ul class="styled-icons icon-dark icon-circled icon-sm">
                                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <!--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                            <!--                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                            <li>
                                <a href="https://instagram.com/kunitskiy_valeriy?igshid=1nl0hq76gglia"><i class="fa fa-instagram"></i></a></li>
                            <!--                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle p-0 bg-lighter xs-text-center">
            <div class="container pt-20 pb-20">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <a class=" pull-left flip sm-pull-center mb-15"
                           href="/"><img src="images/page_index/logo.png"
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
                            <?= ButtonCallback::widget([
                                'classList' => 'btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10',
                            ]); ?>
                        </div>

                        <?php /* ;?>

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
                         <?php */
                        ; ?>

                        <ul class="menuzord-menu">
                            <!--                            <li class="active">-->
                            <!--                                <a href="#home">О докторе</a>-->
                            <!--                            </li>-->

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
                            <!--                                            <a href="-->
                            <? //= $link ;?><!--">--><? //= $services ;?><!--</a>-->
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
                <div class="col-sm-6 col-md-4">
                    <div class="widget dark">
                        <img class="mt-10 mb-20" alt="" src="images/page_index/logo_footer.png">
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-map-marker text-theme-colored mr-5"></i> <a
                                        class="text-gray"
                                        href="#"><?= Yii::$app->params['addr1']; ?><br>
                                    <?= Yii::$app->params['addr2']; ?></a></li>
                        </ul>

                    </div>
                    <div class="widget dark">


                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Услуги</h5>
                            <ul class="list-border">
                                <?php foreach( Yii::$app->params['services']  as $link=>$text):?>
                                    <li><a href="<?= $link ;?>"><?= $text ;?></a></li>
                                  <?php endforeach;?>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">

                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Контакты</h5>

                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-map-marker text-theme-colored mr-5"></i> <a
                                        class="text-gray"
                                        href="#"><?= Yii::$app->params['addr1']; ?>, <?= Yii::$app->params['addr2']; ?></a></li>
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-phone text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#"><?= Yii::$app->params['phone']; ?></a></li>
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="mailto:<?= Yii::$app->params['email']; ?>"><?= Yii::$app->params['email']; ?></a></li>
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-globe text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#"><?= Yii::$app->params['domain']; ?></a></li>
                            <li class="m-0 pl-10 pr-10"><i
                                        class="fa fa-clock-o text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#"><?= Yii::$app->params['workHours']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-222">
            <div class="container pt-10 pb-0">
                <div class="row">
                    <div class="col-md-6 sm-text-center">
                        <p class="font-13 text-black-777 m-0">Лицензия на осуществление медицинской
                            деятельности №1</p>
                    </div>
                    <div class="col-md-6 text-right flip sm-text-center">
                        <div class="widget no-border m-0">
                            <ul class="styled-icons icon-dark icon-circled icon-sm">
                                <!--                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
                                <!--                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
                                <!--                                <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
                                <!--                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                                <li>
                                    <a href="https://instagram.com/kunitskiy_valeriy?igshid=1nl0hq76gglia"><i
                                                class="fa fa-instagram"></i></a></li>
                                <!--                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
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
JS;

$this->registerJs($script, yii\web\View::POS_READY); ?>
<?php $this->endPage() ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <section class="no-bg">
        <div class="container position-relative p-0 mt-90" style="max-width: 700px;">
            <h3 class="bg-theme-colored p-15 mt-0 mb-0 text-white">Записаться на приём</h3>
            <div class="section-content bg-white p-30">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Booking Form Starts -->
                        <p class="lead">Введите свои данные и удобное для вас время.</p>
                        <!-- Appointment Form -->
                        <form id="popup_appointment_form" name="popup_appointment_form" class=""
                              method="post" action="includes/appointment.php">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-10">
                                        <input name="form_name" class="form-control" type="text"
                                               required="" placeholder="Введите имя"
                                               aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-10">
                                        <input name="form_email" class="form-control required email"
                                               type="email" placeholder="Введите email"
                                               aria-required="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-10">
                                        <input name="form_appontment_date"
                                               class="form-control required datetime-picker"
                                               type="text" placeholder="Удобное время"
                                               aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-10">
                                <textarea name="form_message" class="form-control required"
                                          placeholder="Текст сообщения" rows="5"
                                          aria-required="true"></textarea>
                            </div>
                            <div class="form-group mb-0 mt-20">
                                <input name="form_botcheck" class="form-control" type="hidden"
                                       value="">
                                <button type="submit" class="btn btn-dark btn-theme-colored"
                                        data-loading-text="Please wait...">Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--            <button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>-->
            <button type="button" class="mfp-close font-36" data-dismiss="modal" aria-label="Close"
                    class="">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    </section>
</div>