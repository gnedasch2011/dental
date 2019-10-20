<?php

use app\widgets\ButtonCallback\ButtonCallback;

$utmServ = $_GET['serv'] ?? 'protez';

?>


    <div id="wrapper">
        <!-- Start main-content -->
        <div class="main-content">
            <!-- Section: home -->
            <section id="home" class="divider">
                <div class="container-fluid p-0">
                    <?php

                    $utmServ = $_GET['serv'] ?? 'protez';


                    //
                    //
                    //


                    $serv = [
//                            ''=>
                        'protez' => [
                            'title' => 'Протезирование <span class="text-theme-colored">зубов</span>
                                        <span class="text-theme-color-2">без боли</span> под
                                        анестезией.',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                        'giginena' => [
                            'title' => 'Профессиональная  <span class="text-theme-colored">гигиена</span> полости рта всего за 4000 руб.',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                        'otbelivanie' => [
                            'title' => 'Отбеливание  <span class="text-theme-colored">зубов</span>, результат заметный сразу.',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],
                        'koronki' => [
                            'title' => 'Установка  <span class="text-theme-colored">коронок</span> на зубы, верни свою улыбку',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                        'koronki_keramika_circon' => [
                            'title' => 'Установка <span class="text-theme-colored">циркониевой коронки</span> на зуб',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                        'koronki_keramika_metall' => [
                            'title' => 'Установка <span class="text-theme-colored">металлокерамической коронки</span> на зуб',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                        'koronka_na_implant' => [
                            'title' => 'Установка <span class="text-theme-colored">коронки</span> на имплант, восстановление зубов',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],
                        'koronka_metalokeramika' => [
                            'title' => 'Установка <span class="text-theme-colored">металлокерамической</span> коронки на импланте',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],
                        'koronka_cirkoniy' => [
                            'title' => 'Установка <span class="text-theme-colored">циркониевой</span> коронки на импланте',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                          'restavracia' => [
                            'title' => 'Композитная <span class="text-theme-colored">реставрация</span> зубов, верни свою улыбку ',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                        'protezirovanie' => [
                            'title' => 'Композитная <span class="text-theme-colored">реставрация</span> зубов, верни свою улыбку ',
                            'img' => '/images/page_index/banner_otb.png',
                            'classStyle' => ''
                        ],

                    ];

                    $currentServices = $serv[$utmServ];

                    ?>
                    <!-- START REVOLUTION SLIDER 5.0.7 -->
                    <div id="rev_slider_home_wrapper"
                         class="rev_slider_wrapper fullwidthbanner-container"
                         data-alias="news-gallery34"
                         style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
                        <div id="rev_slider_home" class="rev_slider fullwidthabanner"
                             style="display:none;" data-version="5.0.7">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-1" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default"
                                    data-easeout="default" data-masterspeed="default"
                                    data-thumb="/images/page_index/banner_proectirovanie.png"
                                    data-rotate="0"
                                    data-fstransition="fade" data-fsmasterspeed="1500"
                                    data-fsslotamount="7" data-saveperformance="off"
                                    data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="<?= $currentServices['img']; ?>" alt=""
                                         data-bgposition="center center" data-bgfit="cover"
                                         data-bgrepeat="no-repeat" data-bgparallax="10"
                                         class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                         id="slide-1-layer-1"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="normal"
                                         data-transform_idle="o:1;"
                                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                         data-start="1000"
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                         id="slide-1-layer-2"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['50','50','50','30']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['120','100','70','90']"
                                         data-fontsize="['56','46','40','36']"
                                         data-lineheight="['70','60','50','45']"
                                         data-fontweight="['800','700','700','700']"
                                         data-width="['700','650','600','420']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal; <?= $currentServices['classStyle']; ?>">
                                        <?= $currentServices['title']; ?>
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                         id="slide-1-layer-3"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['50','50','50','30']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['280','220','180','180']"
                                         data-fontsize="['18','18','16','13']"
                                         data-lineheight="['30','30','28','25']"
                                         data-fontweight="['600','600','600','600']"
                                         data-width="['700','650','600','420']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap;">
                                        <!--                                    Ортопедическая стоматология – это сфера,<br> связанная с восстановлением зубного ряда и установкой специальных протезов.-->
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                         id="slide-1-layer-4"
                                         data-x="['left','left','left','left']"
                                         data-hoffset="['53','53','53','30']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['360','290','260','260']"
                                         data-fontsize="['18','18','16','16']"
                                         data-lineheight="['30','30','30','30']"
                                         data-fontweight="['600','600','600','600']"
                                         data-width="['700','650','600','420']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap;">
                                        <a type="button"
                                           href="tel:+<?= Yii::$app->params['phoneAncor']; ?>"
                                           class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 visible-xs">
                                            <!--   class="btn btn-dark btn-theme-colored btn-xl">-->
                                            Бесплатная консультация</a>
                                        <?= ButtonCallback::widget([
                                            'classList' => 'btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 hidden-xs',
                                            'nameButton' => 'Бесплатная консультация',
                                        ]); ?>

                                    </div>
                                </li>
                                <!-- SLIDE 2 -->
                                <?php /* ;?>
                                <li data-index="rs-2" data-transition="slidingoverlayhorizontal"
                                    data-slotamount="default" data-easein="default"
                                    data-easeout="default" data-masterspeed="default"
                                    data-thumb="/images/page_index/banner_otb.png" data-rotate="0"
                                    data-fstransition="fade" data-fsmasterspeed="1500"
                                    data-fsslotamount="7" data-saveperformance="off"
                                    data-title="Make an Impact">
                                    <!-- MAIN IMAGE -->
                                    <img src="/images/page_index/banner_otb.png" alt=""
                                         data-bgposition="center center" data-bgfit="cover"
                                         data-bgrepeat="no-repeat" data-bgparallax="10"
                                         class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                         id="slide-2-layer-1"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']"
                                         data-width="full"
                                         data-height="full"
                                         data-whitespace="normal"
                                         data-transform_idle="o:1;"
                                         data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                         data-start="1000"
                                         data-basealign="slide"
                                         data-responsive_offset="on"
                                         style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);">
                                    </div>
                                    <!-- LAYER NR. 3 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                         id="slide-2-layer-2"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['120','100','70','90']"
                                         data-fontsize="['28','24','24','24']"
                                         data-lineheight="['33','30','30','30']"
                                         data-fontweight="['600','600','600','600']"
                                         data-textalign="['center','center','center','center']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap;">
                                    </div>
                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                         id="slide-2-layer-3"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['165','135','105','130']"
                                         data-fontsize="['56','46','40','36']"
                                         data-lineheight="['70','60','50','45']"
                                         data-fontweight="['800','700','700','700']"
                                         data-textalign="['center','center','center','center']"
                                         data-width="['700','650','600','420']"
                                         data-height="none"
                                         data-whitespace="normal"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">
                                        Профессиональная гигиена полости рта всего за <span
                                                class="text-theme-colored">4000 руб</span>.
                                        <!--                                    Гигиеническая чистка зубов.-->
                                    </div>
                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                         id="slide-2-layer-4"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['320','260','220','220']"
                                         data-fontsize="['18','18','16','13']"
                                         data-lineheight="['30','30','28','25']"
                                         data-fontweight="['600','600','600','600']"
                                         data-textalign="['center','center','center','center']"
                                         data-width="['700','650','600','420']"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap;">
                                    </div>
                                    <!-- LAYER NR. 5 -->
                                    <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0"
                                         id="slide-2-layer-5"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['top','top','top','top']"
                                         data-voffset="['400','340','300','300']"
                                         data-fontsize="['18','18','16','16']"
                                         data-lineheight="['30','30','30','30']"
                                         data-fontweight="['600','600','600','600']"
                                         data-width="none"
                                         data-height="none"
                                         data-whitespace="nowrap"
                                         data-transform_idle="o:1;"
                                         data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                         data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                         data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                         data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                         data-start="1000"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-responsive_offset="on"
                                         style="z-index: 7; white-space: nowrap;">

                                        <?= ButtonCallback::widget(); ?>

                                    </div>
                                </li>
     <?php */; ?>
                            </ul>
                            <div class="tp-bannertimer tp-bottom"
                                 style="height: 5px; background-color: rgba(166, 216, 236, 1.00);"></div>
                        </div>
                    </div>

                    <!-- END REVOLUTION SLIDER -->
                    <?php

                    use yii\web\View;

                    $script = <<< JS
                    var tpj = jQuery;
                    var revapi34;
                    tpj(document).ready(function () {
                        if (tpj("#rev_slider_home").revolution == undefined) {
                            revslider_showDoubleJqueryError("#rev_slider_home");
                        } else {
                            revapi34 = tpj("#rev_slider_home").show().revolution({
                                sliderType: "standard",
                                jsFileLocation: "js/revolution-slider/js/",
                                sliderLayout: "fullwidth",
                                dottedOverlay: "none",
                                delay: 9000,
                                navigation: {
                                    keyboardNavigation: "on",
                                    keyboard_direction: "horizontal",
                                    mouseScrollNavigation: "off",
                                    onHoverStop: "on",
                                    touch: {
                                        touchenabled: "on",
                                        swipe_threshold: 75,
                                        swipe_min_touches: 1,
                                        swipe_direction: "horizontal",
                                        drag_block_vertical: false
                                    }
                                    ,
                                    arrows: {
                                        style: "zeus",
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 600,
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                        left: {
                                            h_align: "left",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        },
                                        right: {
                                            h_align: "right",
                                            v_align: "center",
                                            h_offset: 30,
                                            v_offset: 0
                                        }
                                    },
                                    bullets: {
                                        enable: true,
                                        hide_onmobile: true,
                                        hide_under: 600,
                                        style: "metis",
                                        hide_onleave: true,
                                        hide_delay: 200,
                                        hide_delay_mobile: 1200,
                                        direction: "horizontal",
                                        h_align: "center",
                                        v_align: "bottom",
                                        h_offset: 0,
                                        v_offset: 30,
                                        space: 5,
                                        tmp: '<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                                    }
                                },
                                viewPort: {
                                    enable: true,
                                    outof: "pause",
                                    visible_area: "80%"
                                },
                                responsiveLevels: [1240, 1024, 778, 480],
                                gridwidth: [1240, 1024, 778, 480],
                                gridheight: [600, 550, 500, 450],
                                lazyType: "none",
                                parallax: {
                                    type: "scroll",
                                    origo: "enterpoint",
                                    speed: 400,
                                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                                },
                                shadow: 0,
                                spinner: "off",
                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,
                                shuffle: "off",
                                autoHeight: "off",
                                hideThumbsOnMobile: "off",
                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                debugMode: false,
                                fallbacks: {
                                    simplifyAll: "off",
                                    nextSlideOnWindowFocus: "off",
                                    disableFocusListener: false,
                                }
                            });
                        }
                    }); /*ready*/
              
JS;

                    $this->registerJs($script, yii\web\View::POS_READY); ?>

                    <!-- END REVOLUTION SLIDER -->
                </div>
            </section>

            <!-- Section: home-boxes -->
            <section>
                <div class="container pt-0 pb-0">
                    <div class="section-content">
                        <div class="row equal-height-inner mt-sm-0" data-margin-top="-110px">
                            <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                                <div class="sm-height-auto bg-theme-colored">
                                    <div class="p-30">
                                        <h3 class="text-uppercase text-white mt-0">Опытный врач<br>
                                            <small class="text-gray-lighter">Профессианальные
                                                решения
                                            </small>
                                        </h3>
                                        <p class="text-white">
                                            Более 15-ти лет стоматологической практики.
                                        </p>
                                        <?= ButtonCallback::widget([
                                            'nameButton' => 'Связаться',
                                            'classList' => 'btn btn-border btn-circled btn-transparent btn-sm mt-20'
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                                <div class="sm-height-auto bg-theme-colored2">
                                    <div class="p-30">
                                        <h3 class="text-uppercase text-white mt-0">Часы работы</h3>
                                        <div class="opening-hours">
                                            <ul class="list-unstyled text-white">
                                                <li class="clearfix"><span>Пнд - Вск</span>
                                                    <div class="value">8:00 - 20:30</div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="value"><?= Yii::$app->params['addr1']; ?></div>
                                                    <div class="value"><?= Yii::$app->params['addr2']; ?></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <?= ButtonCallback::widget([
                                            'nameButton' => 'Запросить расписание',
                                            'classList' => 'btn btn-border btn-circled btn-transparent btn-sm mt-20'
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                                <div class="sm-height-auto bg-theme-colored">
                                    <div class="p-30">
                                        <h3 class="text-uppercase text-white mt-0">Полный спектр
                                            услуг
                                        </h3>
                                        <p class="text-white"><?= implode(', ', Yii::$app->params['services']); ?></p>
                                        <?= ButtonCallback::widget([
                                            'nameButton' => 'Узнать подробней',
                                            'classList' => 'btn btn-border btn-circled btn-transparent btn-sm mt-20'
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                                <div class="sm-height-auto bg-theme-colored2">
                                    <div class="p-30">
                                        <h3 class="text-uppercase text-white mt-0">Забронировать
                                            визит
                                            <br>
                                            <small class="text-gray-lighter">оператор на связи
                                            </small>
                                        </h3>
                                        <h2 class="text-white"
                                            style="font-size: 1.5em;"><?= Yii::$app->params['phone']; ?></h2>
                                        <p class="text-white">Забронируйте время приёма по номеру
                                            телефона</p>
                                        <?= ButtonCallback::widget([
                                            'nameButton' => 'Связаться с нами',
                                            'classList' => 'btn btn-border btn-circled btn-transparent btn-sm mt-20'
                                        ]); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section About -->
            <section style="margin-top: 70px;">
                <div class="container pt-0 pb-0">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumb hidden-sm">
                                    <img class="img-fullwidth"
                                         src="/images/page_index/kunit_main_3.png" alt="project">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-uppercase text-theme-colored2 mt-sm-10">Добро
                                    пожаловать на приём</h4>
                                <h2 class="mt-0">Ведет прием в клинике на Мичуринском проспекте.
                                </h2>
                                <p class="lead">
                                    Все виды эстетического протезирования: виниры, коронки, вкладки
                                    (в том числе безметалловая керамика IPS emax). Мы работаем только с официальными технологиями
                                    и материалами. Все керамические конструкции изготавливаются в зуботехнической лаборатории и проходят строгий контроль качества.</p>
                                <div class="uk-section uk-section-muted uk-padding-small uk-margin-medium-top quote">
                                    Уже более 15 лет занимаюсь эстетическим протезированием-виниры,
                                    коронки на своих зубах и на имплантах. Использую только
                                    современные методики и материалы, так как для меня важно
                                    качество выполненной работы!
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Divider: Certificates -->
            <section class="bg-lighter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-4col">
                                <?php for ($i = 1; $i < 11; $i++): ?>
                                    <div class="item">
                                        <a href="/images/certificates/large/<?= $i; ?>.jpg"
                                           data-lightbox-gallery="certificates"
                                           class="imgObj"
                                           title="Certificate">
                                            <img src="/images/certificates/large/<?= $i; ?>.jpg"
                                                 alt=""
                                                 width="100%"
                                            ></a>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: services -->
            <section id="about" style="margin-top: 70px;">
                <div class="section-title text-center">

                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0" style="
    line-height: 1.3em;
">
                            Безболезненное лечение зубов в стоматологии по современной методике
                            работы под микроскопом
                        </h2>
                        <div class="title-icon">
                            <img class="mb-10" src="images/title-icon.png" alt="">
                        </div>
                        <p>В своей практике я работаю с бинокулярами или микроскопом (это оптические
                            приборы, которые повышают качество диагностики кариеса и других
                            заболеваний зубов и полости рта в целом в несколько раз!).</p>
                    </div>
                </div>
                <div class="container">

                    <div class="section-content">

                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="media-heading heading">Отбеливание зубов</h3>
                                <div class="twentytwenty-wrapper twentytwenty-horizontal">
                                    <div class="twentytwenty-container" style="height: 240px;">
                                        <img src="/images/mainBeforeAfter/1/1.jpg" alt=""
                                             class="twentytwenty-before"
                                             style="clip: rect(0px, 180px, 240px, 0px);">
                                        <img src="/images/mainBeforeAfter/1/2.jpg" alt=""
                                             class="twentytwenty-after"
                                             style="clip: rect(0px, 360px, 240px, 180px);">
                                        <div class="twentytwenty-handle" style="left: 180px;"><span
                                                    class="twentytwenty-left-arrow"></span><span
                                                    class="twentytwenty-right-arrow"></span></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <h3 class="media-heading heading"><span class="text-theme-colored">Профессиональная гигиена</span>
                                </h3>
                                <div class="twentytwenty-wrapper twentytwenty-horizontal">
                                    <div class="twentytwenty-container" style="height: 240px;">
                                        <img src="/images/mainBeforeAfter/2/1.jpg" alt=""
                                             class="twentytwenty-before"
                                             style="clip: rect(0px, 180px, 240px, 0px);">
                                        <img src="/images/mainBeforeAfter/2/2.jpg" alt=""
                                             class="twentytwenty-after"
                                             style="clip: rect(0px, 360px, 240px, 180px);">
                                        <div class="twentytwenty-handle" style="left: 180px;"><span
                                                    class="twentytwenty-left-arrow"></span><span
                                                    class="twentytwenty-right-arrow"></span></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <h3 class="media-heading heading">Протезирование на имплантах</h3>

                                <div class="twentytwenty-wrapper twentytwenty-horizontal">
                                    <div class="twentytwenty-container" style="height: 240px;">
                                        <img src="/images/mainBeforeAfter/3/1.jpg" alt=""
                                             class="twentytwenty-before"
                                             style="clip: rect(0px, 180px, 240px, 0px);">
                                        <img src="/images/mainBeforeAfter/3/2.jpg" alt=""
                                             class="twentytwenty-after"
                                             style="clip: rect(0px, 360px, 240px, 180px);">
                                        <div class="twentytwenty-handle" style="left: 180px;"><span
                                                    class="twentytwenty-left-arrow"></span><span
                                                    class="twentytwenty-right-arrow"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div style="margin: 30px 0; ">

                            </div>
                            <div class="col-md-6">
                                <h3 class="media-heading heading"><span class="text-theme-colored">Виниры, "голливудские виниры"</span>
                                </h3>
                                <div class="twentytwenty-wrapper twentytwenty-horizontal">
                                    <div class="twentytwenty-container" style="height: 370px;">
                                        <img src="/images/mainBeforeAfter/4/1.jpg" alt=""
                                             class="twentytwenty-before"
                                             style="clip: rect(0px, 277.5px, 370px, 0px);">
                                        <img src="/images/mainBeforeAfter/4/2.jpg" alt=""
                                             class="twentytwenty-after"
                                             style="clip: rect(0px, 555px, 370px, 277.5px);">
                                        <div class="twentytwenty-handle" style="left: 277.5px;">
                                            <span class="twentytwenty-left-arrow"></span><span
                                                    class="twentytwenty-right-arrow"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h3 class="media-heading heading">Лечение кариеса и каналов</h3>
                                <div class="twentytwenty-wrapper twentytwenty-horizontal">
                                    <div class="twentytwenty-container" style="height: 370px;">
                                        <img src="/images/mainBeforeAfter/5/1.jpg" alt=""
                                             class="twentytwenty-before"
                                             style="clip: rect(0px, 277.5px, 370px, 0px);">
                                        <img src="/images/mainBeforeAfter/5/2.jpg" alt=""
                                             class="twentytwenty-after"
                                             style="clip: rect(0px, 555px, 370px, 277.5px);">
                                        <div class="twentytwenty-handle" style="left: 277.5px;">
                                            <span class="twentytwenty-left-arrow"></span><span
                                                    class="twentytwenty-right-arrow"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--        Вызов экстренной помощи-->
            <section class="divider parallax layer-overlay overlay-theme-colored-8"
                     data-bg-img="images/page_index/paralax_1.png">
                <div class="container">
                    <div class="call-to-action">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <h2 class="text-white"><i class="pe-7s-call text-white"></i>
                                    <a href="tel:<?= Yii::$app->params['phoneAncor']; ?>"
                                       class="text-white">
                                        <?= Yii::$app->params['phone']; ?>
                                    </a>

                                </h2>
                                <h2 class="text-white">Экстренная зубная помощь.</h2>
                                <p class="text-white">Свяжитесь с нами, если у вас есть срочная
                                    проблема.</p>
                                <?= ButtonCallback::widget([
                                    'nameButton' => 'Срочный вопрос',
                                    'classList' => 'btn btn-default btn-theme-colored2 mt-20'
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Divider: Funfact -->
            <?php /* ;?>
        <section class="divider parallax layer-overlay overlay-theme-colored-8"
                 data-bg-img="http://placehold.it/1920x873" data-parallax-ratio="0.7">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-smile mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="1754"
                                class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600">Happy
                                Patients</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-rocket mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="675"
                                class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600">Our Services</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-add-user mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="248"
                                class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600">Our Doctors</h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-global mt-5 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="24"
                                class="animate-number text-white font-42 font-weight-500">0</h2>
                            <h4 class="text-white text-uppercase font-weight-600">Service
                                Points</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <?php */; ?>
            <!-- Section: Depertment -->
            <section id="depertment" class="bg-silver-light">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="col-xs-12">
                            <h2 class="text-uppercase mt-0" name="realized" style="
    line-height: 1.4em;
">Современные методики, новейшая медицинская техника и широчайший спектр стоматологических услуг!
                            </h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p>Бесплатная диагностика в удобное для вас время.</p>
                        </div>

                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                                <div class="p-20 bg-white">
                                    <img src="images/blocks_services/2.jpg" alt="">
                                    <h3 class="">Имплантация зубов</h3>
                                    <p class="">Дентальная имплантология - отрасль стоматологии,
                                        позволяющая восстанавливать утраченные зубы. Методика
                                        установки имплантов уже давно выведена на высокий уровень,
                                        риск отторжения сведён практически к нулю.</p>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                                <div class="p-20 bg-white">
                                    <img src="/images/blocks_services/4.jpg" alt="">
                                    <h3 class="">Протезирование</h3>
                                    <p class="">Протезирование - это основная моя специализация!
                                        Скололся зуб? Стоит старая пломбы? Хотите красивую улыбку?
                                        Вам ко мне! Все виды коронок, виниры - это все то, что
                                        позволит вам снова красиво улыбаться и жевать!</p>

                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                                <div class="p-20 bg-white">
                                    <img src="images/blocks_services/6.jpg" alt="">
                                    <h3 class="">Отбеливание зубов</h3>
                                    <p class="">Существуют два вида отбеливания: домашнее и
                                        офисное(кабинетное). Но в обоих процессах должен принимать
                                        участие ваш стоматолог, чтобы результат был качественным и
                                        надолго! Хотите подробнее? Звоните по номеру!</p>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                                <div class="p-20 bg-white">
                                    <img src="images/blocks_services/1.jpg" alt="">
                                    <h3 class=""><a href="#">Реставрация</a></h3>
                                    <p class="">Полноценная художественная реставрация утраченных
                                        тканей.</p>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                                <div class="p-20 bg-white">
                                    <img src="/images/blocks_services/3.jpg" alt="">
                                    <h3 class="">Лечение каналов</h3>
                                    <p class="">Как правило, пульпит является осложнением кариеса.
                                        Если в зубе вовремя не удалить кариозные образования,
                                        инфекция проникает в корень зуба, то есть в пульповую камеру
                                        зуба, и вызывает воспаление.</p>

                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                                <div class="p-20 bg-white">
                                    <img src="/images/blocks_services/5.jpg" alt="">
                                    <h3 class="">Композитные виниры</h3>
                                    <p class="">Если цвет зубных пластин сильно изменен или сами
                                        премоляры, резцы и клыки далеки от идеальной формы, помогут
                                        виниры, тонкие пластины из фарфора/композитов, которые
                                        скрывают видимые дефекты эмали.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <?php /* ;?>

        <!-- start Doctors Section:-->
        <section id="doctors">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class=" mt-0 line-height-1">Our <span class="text-theme-colored">Dentist</span>
                            </h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem
                                autem<br> voluptatem obcaecati!</p>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                    <div class="col-md-12">
                        <div class="owl-carousel-4col">
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Linda
                                            Feldman</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">
                                            Root Canals Dentist</h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Jessica
                                            Tailor</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">
                                            Implant Surgeon </h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Nicholas
                                            Fleming</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">
                                            Cosmetic Dental Surgeon</h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt=""
                                             src="http://placehold.it/275x370">
                                        <div class="team-overlay"></div>
                                    </div>
                                    <div class="team-details bg-silver-light pt-10 pb-10">
                                        <h4 class="text-uppercase font-weight-600 m-5">Dr. Brian
                                            Adam</h4>
                                        <h6 class="text-theme-colored font-15 font-weight-400 mt-0">
                                            Restorative Dentist</h6>
                                        <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <?php */; ?>
            <?php /* ;?>

        <!-- Section: Pricing -->
        <section id="pricing" class="bg-silver-light">
            <div class="container pb-50">
                <div class="section-title text-center mb-60">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase mt-0">Pricing</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem
                                autem<br> voluptatem obcaecati!</p>
                        </div>
                    </div>
                </div>
                <div class="section-content mt-20">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
                            <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                                <div class="p-40 bg-white">
                                    <div class="pricing-icon">
                                        <i class="flaticon-medical-hammers5 text-theme-colored"></i>
                                    </div>
                                    <h3 class="package-type font-24 text-uppercase">Dental
                                        Whitening</h3>
                                    <h1 class="price text-theme-colored mb-10 font-36">$33</h1>
                                    <h4 class="discount">First Time</h4>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit.
                                        Rem autem voluptatem obcaecati! </p>
                                    <a class="btn btn-colored btn-theme-colored text-uppercase mt-30"
                                       href="#">Request an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInUp animation-delay1">
                            <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                                <div class="p-40 bg-white">
                                    <div class="pricing-icon bg-theme-colored">
                                        <i class="flaticon-medical-human3 text-white"></i>
                                    </div>
                                    <h3 class="package-type font-24 text-uppercase">Root
                                        Treatment</h3>
                                    <h1 class="price text-theme-colored mb-10 font-36">$15</h1>
                                    <h4 class="discount">First Time</h4>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit.
                                        Rem autem voluptatem obcaecati! </p>
                                    <a class="btn btn-colored btn-theme-colored text-uppercase mt-30"
                                       href="#">Request an Appointment</a><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInRight animation-delay1">
                            <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                                <div class="p-40 bg-white">
                                    <div class="pricing-icon">
                                        <i class="flaticon-medical-scalpel3 text-theme-colored"></i>
                                    </div>
                                    <h3 class="package-type font-24 text-uppercase">Dental
                                        Implant</h3>
                                    <h1 class="price text-theme-colored mb-10 font-36">$29</h1>
                                    <h4 class="discount">First Time</h4>
                                    <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit.
                                        Rem autem voluptatem obcaecati! </p>
                                    <a class="btn btn-colored btn-theme-colored text-uppercase mt-30"
                                       href="#">Request an Appointment</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <?php */; ?>
            <!--        Вызов экстренной помощи-->
            <section class="divider parallax layer-overlay overlay-theme-colored-8"
                     data-bg-img="images/page_index/paralax_1.png">
                <div class="container">
                    <div class="call-to-action">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <h2 class="text-white"><i class="pe-7s-call text-white"></i>
                                    <a href="tel:<?= Yii::$app->params['phoneAncor']; ?>"
                                       class="text-white">
                                        <?= Yii::$app->params['phone']; ?>
                                    </a>

                                </h2>
                                <h2 class="text-white">Запись на приём.</h2>
                                <p class="text-white">Свяжитесь с нами, если у вас есть какие либо
                                    вопросы.</p>
                                <?= ButtonCallback::widget([
                                    'nameButton' => 'Записаться',
                                    'classList' => 'btn btn-default btn-theme-colored2 mt-20'
                                ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--start gallary Section-->
            <section class="bg-lighter">
                <div class="container">
                    <div class="section-title text-center mt-0">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="mt-0 line-height-1">Мои <span class="text-theme-colored">работы</span>
                                </h2>
                                <p>На фото ниже представлены примеры работ стоматологии. Вы можете
                                    посмотреть фото зубов до и после лечения, возможно найти свой
                                    случай и посмотреть на результат.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Portfolio Filter -->
                                <div class="portfolio-filter text-center">
                                    <a href="#" class="active" data-filter="*">Все</a>
                                    <a href="#protezirovanie_implants" class=""
                                       data-filter=".protezirovanie_implants">Протезирование на
                                        имплантах</a>
                                    <a href="#otbel" class=""
                                       data-filter=".otbel">Отбеливание</a>
                                    <a href="#vinir" class="" data-filter=".vinir">Виниры</a>
                                    <a href="#karies" class=""
                                       data-filter=".karies">Лечение каналов</a>
                                </div>

                                <!-- Portfolio Gallery Grid -->
                                <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix"
                                     data-lightbox="gallery">
                                    <!-- Portfolio Item Start -->
                                    <?php
                                    echo \app\widgets\RealizedObject\RealizedObject::widget([
                                        'group' => 'karies',
                                    ]);
                                    ?>
                                    <?php
                                    echo \app\widgets\RealizedObject\RealizedObject::widget([
                                        'group' => 'otbel',
                                    ]);
                                    ?>

                                    <?php
                                    echo \app\widgets\RealizedObject\RealizedObject::widget([
                                        'group' => 'protezirovanie_implants',
                                    ]);
                                    ?>

                                    <?php
                                    echo \app\widgets\RealizedObject\RealizedObject::widget([
                                        'group' => 'vinir',
                                    ]);
                                    ?>

                                </div>
                                <!-- End Portfolio Gallery Grid -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--start testimonial Section-->
            <?php /* ;?>

        <section class="divider parallax layer-overlay overlay-theme-colored-8"
                 data-parallax-ratio="0.1" data-bg-img="http://placehold.it/1920x873">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase text-white mt-0 line-height-1">
                                Отзывы</h2>
                            <div class="title-icon">
                                <img class="mb-10" src="images/title-icon-white.png" alt="">
                            </div>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel-3col" data-dots="true">
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p class="text-white">Lorem ipsum dolor sit ametconse
                                                ctetur adipisicing elitvolup tatem error sit qui
                                                dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"><img
                                                        class="img-circle" alt=""
                                                        src="http://placehold.it/95x95"></div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-white">Gavin Smith</h5>
                                                <h6 class="title text-gray-bbb mt-0">Happy
                                                    Patient</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p class="text-white">Lorem ipsum dolor sit ametconse
                                                ctetur adipisicing elitvolup tatem error sit qui
                                                dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"><img
                                                        class="img-circle" alt=""
                                                        src="http://placehold.it/95x95"></div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-white">Jonathan Smith</h5>
                                                <h6 class="title text-gray-bbb mt-0">Happy
                                                    Patient</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p class="text-white">Lorem ipsum dolor sit ametconse
                                                ctetur adipisicing elitvolup tatem error sit qui
                                                dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"><img
                                                        class="img-circle" alt=""
                                                        src="http://placehold.it/95x95"></div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-white">Mary James</h5>
                                                <h6 class="title text-gray-bbb mt-0">Happy
                                                    Patient</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style1">
                                        <div class="comment bg-theme-colored2">
                                            <p class="text-white">Lorem ipsum dolor sit ametconse
                                                ctetur adipisicing elitvolup tatem error sit qui
                                                dolorem facilis.</p>
                                        </div>
                                        <div class="content mt-20">
                                            <div class="thumb pull-right flip"><img
                                                        class="img-circle" alt=""
                                                        src="http://placehold.it/100x100"></div>
                                            <div class="text-right flip pull-right flip mr-20 mt-10">
                                                <h5 class="author text-white">Lucy brown</h5>
                                                <h6 class="title text-gray-bbb mt-0">Happy
                                                    Patient</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php /* ;?>
        <!-- Section: Blog -->
        <section id="blog">
            <div class="container pb-50">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1">Recent <span class="text-theme-colored"> News</span>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem
                                autem<br> voluptatem obcaecati!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-nav="true">
                            <div class="item">
                                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight"
                                         data-wow-delay=".2s">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="http://placehold.it/350x270" alt=""
                                                 class="img-responsive img-fullwidth">
                                        </div>
                                    </div>
                                    <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                                        <span class="mb-10 text-white mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                                                </div>
                                                <div class="entry-content bg-lighter p-20 pr-10">
                                                    <div class="entry-meta mt-0 no-bg no-border">
                                                        <div class="event-content">
                                                            <h3 class="entry-title text-white text-capitalize m-0">
                                                                <a href="#">This is a standard post
                                                                    with
                                                                    thumbnail image</a></h3>
                                                        </div>
                                                    </div>
                                                    <p class="mt-10">Lorem ipsum dolor sit amet,
                                                        consectetur
                                                        adipisi cing elit. Molestias eius illum
                                                        libero dolor
                                                        nobis deleniti, sint assumenda. Pariatur
                                                        iste veritatis
                                                        excepturi, ipsa optio nobis</p>
                                                    <div class="mt-10"><a
                                                                href="blog-single-left-sidebar.html"
                                                                class="btn btn-theme-colored btn-sm">Узнать подробнее</a></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="item">
                                            <article
                                                    class="post clearfix maxwidth600 mb-30 wow fadeInRight"
                                                    data-wow-delay=".2s">
                                                <div class="entry-header">
                                                    <div class="post-thumb thumb">
                                                        <img src="http://placehold.it/350x270"
                                                             alt=""
                                                             class="img-responsive img-fullwidth">
                                                    </div>
                                                </div>
                                                <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                                        <span class="mb-10 text-white mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                                                </div>
                                                <div class="entry-content bg-lighter p-20 pr-10">
                                                    <div class="entry-meta mt-0 no-bg no-border">
                                                        <div class="event-content">
                                                            <h3 class="entry-title text-white text-capitalize m-0">
                                                                <a href="#">This is a standard post
                                                                    with
                                                                    thumbnail image</a></h3>
                                                        </div>
                                                    </div>
                                                    <p class="mt-10">Lorem ipsum dolor sit amet,
                                                        consectetur
                                                        adipisi cing elit. Molestias eius illum
                                                        libero dolor
                                                        nobis deleniti, sint assumenda. Pariatur
                                                        iste veritatis
                                                        excepturi, ipsa optio nobis</p>
                                                    <div class="mt-10"><a
                                                                href="blog-single-left-sidebar.html"
                                                                class="btn btn-theme-colored btn-sm">Узнать подробнее</a></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="item">
                                            <article
                                                    class="post clearfix maxwidth600 mb-30 wow fadeInRight"
                                                    data-wow-delay=".2s">
                                                <div class="entry-header">
                                                    <div class="post-thumb thumb">
                                                        <img src="http://placehold.it/350x270"
                                                             alt=""
                                                             class="img-responsive img-fullwidth">
                                                    </div>
                                                </div>
                                                <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                                        <span class="mb-10 text-white mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                                                </div>
                                                <div class="entry-content bg-lighter p-20 pr-10">
                                                    <div class="entry-meta mt-0 no-bg no-border">
                                                        <div class="event-content">
                                                            <h3 class="entry-title text-white text-capitalize m-0">
                                                                <a href="#">This is a standard post
                                                                    with
                                                                    thumbnail image</a></h3>
                                                        </div>
                                                    </div>
                                                    <p class="mt-10">Lorem ipsum dolor sit amet,
                                                        consectetur
                                                        adipisi cing elit. Molestias eius illum
                                                        libero dolor
                                                        nobis deleniti, sint assumenda. Pariatur
                                                        iste veritatis
                                                        excepturi, ipsa optio nobis</p>
                                                    <div class="mt-10"><a
                                                                href="blog-single-left-sidebar.html"
                                                                class="btn btn-theme-colored btn-sm">Узнать подробнее</a></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </article>
                                        </div>
                                        <div class="item">
                                            <article
                                                    class="post clearfix maxwidth600 mb-30 wow fadeInRight"
                                                    data-wow-delay=".2s">
                                                <div class="entry-header">
                                                    <div class="post-thumb thumb">
                                                        <img src="http://placehold.it/350x270"
                                                             alt=""
                                                             class="img-responsive img-fullwidth">
                                                    </div>
                                                </div>
                                                <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                                        <span class="mb-10 text-white mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                                                    <span class="mb-10 text-white mr-10 font-13"><i
                                                                class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                                                </div>
                                                <div class="entry-content bg-lighter p-20 pr-10">
                                                    <div class="entry-meta mt-0 no-bg no-border">
                                                        <div class="event-content">
                                                            <h3 class="entry-title text-white text-capitalize m-0">
                                                                <a href="#">This is a standard post
                                                                    with
                                                                    thumbnail image</a></h3>
                                                        </div>
                                                    </div>
                                                    <p class="mt-10">Lorem ipsum dolor sit amet,
                                                        consectetur
                                                        adipisi cing elit. Molestias eius illum
                                                        libero dolor
                                                        nobis deleniti, sint assumenda. Pariatur
                                                        iste veritatis
                                                        excepturi, ipsa optio nobis</p>
                                                    <div class="mt-10"><a
                                                                href="blog-single-left-sidebar.html"
                                                                class="btn btn-theme-colored btn-sm">Узнать подробнее</a></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>


        <!-- Divider: Clients -->
        <section class="clients bg-theme-colored">
            <div class="container pt-10 pb-0">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Section: Clients -->
                        <div class="owl-carousel-6col text-center owl-nav-top">
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                            <div class="item"><a href="#"><img src="http://placehold.it/200x120"
                                                               alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <?php */; ?>
        </div>
    </div>

<?php
$script = <<< JS
  // $(".pull-right a").click()
JS;

$this->registerJs($script, yii\web\View::POS_READY); ?>