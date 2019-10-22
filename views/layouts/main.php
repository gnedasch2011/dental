<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\ButtonCallback\ButtonCallback;
use yii\helpers\Html;
use app\assets\Land1Asset;
use app\assets\GoogleAsset;
use yii\web\View;

Land1Asset::register($this);
GoogleAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title>Доктор Куницкий, протезирование, лечение кариеса, установка виниров</title>
        <?php $this->head() ?>

        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="MediPress - Health & Medical HTML Template"/>
        <meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5"/>
        <meta name="author" content="ThemeMascot"/>
        <!-- Page Title -->


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
                            <ul class="styled-icons icon-dark icon-circled icon-sm hidden-xs">
                                <!--                                <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
                                <li><a target="_blank"
                                       href="https://www.facebook.com/kunitskiy.valeriy"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=<?= Yii::$app->params['phoneAncorWhatsapp']; ?>"><i
                                                class="fa fa-whatsapp"></i></a></li>
                                <!--                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                                <li>
                                    <a target="_blank"
                                       href="https://instagram.com/kunitskiy_valeriy?igshid=1nl0hq76gglia"><i
                                                class="fa fa-instagram"></i></a></li>
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
                               href="#"><img src="images/page_index/logo.png"
                                             alt=""></a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-9">
                            <div class="header-widget-contact-info-box sm-text-center">
                                <div class="media element contact-info">
                                    <ul class="styled-icons styled-icons_custom icon-dark icon-circled icon-sm visible-xs">
                                        <!--                                <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
                                        <li><a target="_blank"
                                               href="https://www.facebook.com/kunitskiy.valeriy"><i
                                                        class="fa fa-facebook"></i></a></li>
                                        <li>
                                            <a target="_blank" href="https://api.whatsapp.com/send?phone=79299529973"><i
                                                        class="fa fa-whatsapp"></i></a></li>
                                        <!--                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                                        <li>
                                            <a target="_blank"
                                               href="https://instagram.com/kunitskiy_valeriy?igshid=1nl0hq76gglia"><i
                                                        class="fa fa-instagram"></i></a></li>
                                        <!--                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                    </ul>
                                    <div class="media-left">
                                        <a href="#">
                                            <i class="fa fa-envelope text-theme-colored font-icon sm-display-block"></i>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="mailto:<?= Yii::$app->params['email']; ?>"
                                           class="title">Email</a>
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
                                        <a href="tel:<?= Yii::$app->params['phoneAncor']; ?>"
                                           class="title">Консультация</a>
                                        <h5 class="media-heading subtitle">
                                            <a href="tel:<?= Yii::$app->params['phoneAncor']; ?>"
                                               class="telFZ">
                                                <?= Yii::$app->params['phone']; ?><br>

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
                                        <a href="#adress" class="title">Адрес</a>
                                        <h5 class="media-heading subtitle">
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
                                <a type="button" href="tel:+<?= Yii::$app->params['phoneAncor']; ?>"
                                   class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 visible-xs">
                                    <!--   class="btn btn-dark btn-theme-colored btn-xl">-->
                                    Бесплатная консультация</a>
                                <?= ButtonCallback::widget([
                                    'classList' => 'btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 hidden-xs',
                                    'nameButton' => 'Бесплатная консультация',
                                ]); ?>
                            </div>

                            <?php /* ;?>
                            <?php */; ?>
                            <ul class="menuzord-menu">
                                <li class="active">
                                    <a href="#protezirovanie">Протезирование</a>
                                </li>
                                <li class="active">
                                    <a href="#otbel">Отбеливание</a>
                                </li>
                                <li class="active">
                                    <a href="#protezirovanie">Установка коронок</a>
                                </li>
                                <li class="active">
                                    <a href="#vinire">Композитные виниры</a>
                                </li>
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
                    <div class="col-sm-6 col-md-6">
                        <div class="widget dark">
                            <img class="mt-10 mb-20" alt="" src="images/page_index/logo_footer.png">
                            <ul class="list-inline mt-5">
                                <li class="m-0 pl-10 pr-10"><i
                                            class="fa fa-map-marker text-theme-colored mr-5"></i>
                                    <a class="text-gray">Лицензия на осуществление медицинской
                                        деятельности №ЛО-77-01-003383</a></li>
                            </ul>

                        </div>
                        <div class="widget dark">


                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">

                        <div class="widget dark">
                            <h5 class="widget-title line-bottom">Контакты</h5>

                            <ul class="list-inline mt-5">
                                <li class="m-0 pl-10 pr-10"><i
                                            class="fa fa-map-marker text-theme-colored mr-5"></i> <a
                                            class="text-gray"
                                            href="#"><?= Yii::$app->params['addr2']; ?></a></li>
                                <li class="m-0 pl-10 pr-10"><i
                                            class="fa fa-phone text-theme-colored mr-5"></i> <a
                                            class="text-gray"
                                            href="<?= Yii::$app->params['phoneAncor']; ?>"><?= Yii::$app->params['phone']; ?></a>
                                </li>
                                <li class="m-0 pl-10 pr-10"><i
                                            class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                            class="text-gray"
                                            href="mailto:<?= Yii::$app->params['email']; ?>"><?= Yii::$app->params['email']; ?></a>
                                </li>
                                <li class="m-0 pl-10 pr-10"><i
                                            class="fa fa-globe text-theme-colored mr-5"></i> <a
                                            class="text-gray"
                                            href="#"><?= Yii::$app->params['domain']; ?></a></li>
                                <li class="m-0 pl-10 pr-10"><i
                                            class="fa fa-clock-o text-theme-colored mr-5"></i> <a
                                            class="text-gray"
                                            href="#"><?= Yii::$app->params['workHours']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-black-222">
                <div class="container pt-10 pb-0">
                    <div class="row">
                        <div class="col-md-6 sm-text-center">
                        </div>
                        <div class="col-md-6 text-right flip sm-text-center">
                            <div class="widget no-border m-0">
                                <ul class="styled-icons icon-dark icon-circled icon-sm hidden-xs">
                                    <!--                                <li><a href="#"><i class="fa fa-skype"></i></a></li>-->
                                    <li><a target="_blank"
                                           href="https://www.facebook.com/kunitskiy.valeriy"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank"
                                           href="https://api.whatsapp.com/send?phone=79299529973"><i
                                                    class="fa fa-whatsapp"></i></a></li>
                                    <!--                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                                    <li>
                                        <a target="_blank"
                                           href="https://instagram.com/kunitskiy_valeriy?igshid=1nl0hq76gglia"><i
                                                    class="fa fa-instagram"></i></a></li>
                                    <!--                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>-->
        <a href="https://api.whatsapp.com/send?phone=79299529973" class="visible-xs">
            <img src="images/page_index/wp.png" class="whatsappBlock"></a>


        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NVC7HZ"

                    height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>

        <!-- End Google Tag Manager (noscript) -->
        <?php $this->endBody() ?>


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
                <h3 class="bg-theme-colored p-15 mt-0 mb-0 text-white successTitle">Записаться на
                    приём</h3>
                <div class="section-content bg-white p-30">
                    <div class="row section-content_success">
                        <div class="col-md-12">
                            <!-- Booking Form Starts -->
                            <!--                            <p class="lead">Введите свои данные и мы вам перезвоним.</p>-->
                            <!-- Appointment Form -->

                            <?php

                            use yii\widgets\ActiveForm;

                            $model = new \app\models\ContactForm();
                            $form = ActiveForm::begin([
                                'id' => 'login-form',
                                'options' => ['class' => 'form-horizontal'],
                            ]) ?>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mb-10">
                                    <?= $form->field($model, 'name', ['errorOptions' => ['class' => 'v-msg']])
                                        ->textInput([
                                            'placeholder' => 'Введите имя',
                                            'class' => 'form-control',
                                            'autocomplete' => 'off'
                                        ])->label('Имя', [
                                            'class' => 'input-block__label',
                                        ]); ?>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-10">
                                    <?= $form->field($model, 'phone', ['errorOptions' => ['class' => 'v-msg']])
                                        ->textInput([
                                            'placeholder' => '+7(999)999-99-99',
                                            'class' => 'form-control phone_mask',
                                            'autocomplete' => 'off'
                                        ])->label('Телефон', [
                                            'class' => 'input-block__label',
                                        ]); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <?= Html::submitButton('Отправить', ['class' => 'btn btn-dark btn-theme-colored submitForm']) ?>
                            </div>
                        </div>
                        <button type="button" class="mfp-close font-36" data-dismiss="modal"
                                aria-label="Close"
                                class="">
                            <span aria-hidden="true">×</span>
                        </button>
                        <?php ActiveForm::end() ?>

                    </div>
                    <div class="row section-content_success_block">
                        <div class="">
                            Спасибо за обращение, мы с вами свяжемся в ближайшее время.
                        </div>
                    </div>
                </div>
            </div>

            <!--            <button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>-->

    </div>
    </section>
    </div>

<?php
$script = <<< JS


JS;

$this->registerJs($script, yii\web\View::POS_READY); ?>