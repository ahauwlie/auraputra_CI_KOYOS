<?php
    /**
     * Created by PhpStorm.
     * User: Hauw
     * Date: 9/26/2018
     * Time: 9:11 AM
     */
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aura Putra Wijaya</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400" rel="stylesheet">
        <?php echo $css; ?>
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
        <link rel="manifest" href="favicons/site.webmanifest">
        <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body class="page">
        <div class="page__inner animsition">
            <?php echo $header; ?>
            <main>
                <div class="zoom-image-head">
                    <div class="zoom-image-head__body">
                        <div class="zoom-image-head__bg">
                            <div style="background-image:url(inti/img/Bckground.png)" class="zoom-image-head__bg-inner"></div>
                        </div>
                        <img src="<?php echo base_url('/inti/img/model.png'); ?>" alt="" class="zoom-image-head__bg2" />
                        <div class="zoom-image-head__content container">
                            <div class="zoom-image-head__subtitle">Hello from</div>
                            <div class="zoom-image-head__title">Aura Putra<br />Wijaya</div>
                            <div class="zoom-image-head__text">karena bagi kami, kualitas adalah<br /><b>prioritas</b></div>
                            <div class="zoom-image-head__icon icofont-dotted-down"></div>
                        </div>
                    </div>
                </div>
                <div class="zoom-counter">
                    <div class="container">
                        <div class="zoom-counter__inner">
                            <div style="background-image:url(inti/img/zoom-count-bg.jpg)" class="zoom-counter__card">
                                <div class="zoom-counter__card-title">
                                    <p>Sejak</p>
                                    <p>2005</p>
                                </div>
                                <div data-counter-value="16" class="zoom-counter__card-value js-counter">16</div>
                                <div class="zoom-counter__card-description">Tahun<br />Kami Melayani</div>
                            </div>
                            <div class="zoom-counter__info">
                                <div class="zoom-counter__subtitle">Aura Studio</div>
                                <div class="zoom-counter__title">Produksi Kami</div>
                                <div class="zoom-counter__text">
                                    <p style="text-indent: 50px;">Perusahaan kami menggunakan peralatan
                                        produksi yang lengkap dan terbaik
                                        berikut dengan tenaga kerja yang terlatih dan
                                        juga terampil.
                                    </p>
                                    <p style="text-indent: 50px;">Dari proses pra-produksi
                                        sampai packing kami selalu
                                        mengawasi setiap prosesnya
                                        sehingga kualitas produk yang dihasilkan
                                        perusahaan kami selalu
                                        yang terbaik.
                                    </p>
                                    <p style="text-indent: 50px;">Setiap produk yang kami produksi selalu
                                    dibuat berdasarkan pengalaman pengguna.
                                    Sehingga kenyamanan dan estetika dari produk
                                    kami dijamin yang terbaik di kelasnya.</p>
                                </div>
                                <a href="#" class="zoom-counter__read-more zoom-counter__read-more_inverted">Klik disini untuk lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zoom-slider">
                    <div class="zoom-slider__header">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-2">
                                    <div class="zoom-slider__title">Our works</div>
                                </div>
                                <div class="col-12 col-lg-8">
                                    <div class="zoom-slider__filter">
                                        <a href="#" data-value="all" class="zoom-slider__filter-link link link link_active">All</a>
                                        <a href="#" data-value="1" class="zoom-slider__filter-link link">1</a>
                                        <a href="#" data-value="2" class="zoom-slider__filter-link link">2</a>
                                        <a href="#" data-value="3" class="zoom-slider__filter-link link">3</a><a href="#" data-value="4" class="zoom-slider__filter-link link">4</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-2 text-lg-right"><a href="<?php echo site_url('project'); ?>" class="zoom-slider__head-link">see all projects<span class="zoom-slider__head-icon icon-chevron-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="zoom-slider__slider-wrapper">
                        <button type="button" class="zoom-slider__control zoom-slider__control_prev icon-chevron-left"><span class="visually-hidden">prev</span></button><button type="button" class="zoom-slider__control zoom-slider__control_next icon-chevron-right"><span class="visually-hidden">next</span></button>
                        <div class="zoom-slider__slider swiper-container">
                            <div class="swiper-wrapper">
                                <div style="background-image: url('inti/img/zoom-slide-image-1.jpg')" data-filter="2" class="zoom-slider__slide swiper-slide"></div>
                                <div style="background-image: url('inti/img/zoom-slide-image-2.jpg')" data-filter="1" class="zoom-slider__slide swiper-slide"></div>
                                <div style="background-image: url('inti/img/zoom-slide-image-3.jpg')" data-filter="2" class="zoom-slider__slide swiper-slide"></div>
                                <div style="background-image: url('inti/img/zoom-slide-image-4.jpg')" data-filter="3" class="zoom-slider__slide swiper-slide"></div>
                                <div style="background-image: url('inti/img/zoom-slide-image-2.jpg')" data-filter="4" class="zoom-slider__slide swiper-slide"></div>
                                <div style="background-image: url('inti/img/zoom-slide-image-3.jpg')" data-filter="2" class="zoom-slider__slide swiper-slide"></div>
                            </div>
                        </div>
                        <div class="zoom-slider__buttons swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <button type="button" data-filter="2" class="zoom-slider__button zoom-slider__button_active swiper-slide">2
                                    <span class="zoom-slider__button-title">Dummy Data</span>
                                </button>
                                <button type="button" data-filter="1" class="zoom-slider__button swiper-slide">1
                                    <span class="zoom-slider__button-title">Dummy Data</span>
                                </button>
                                <button type="button" data-filter="2" class="zoom-slider__button swiper-slide">2
                                    <span class="zoom-slider__button-title">Dummy Data</span>
                                </button>
                                <button type="button" data-filter="3" class="zoom-slider__button swiper-slide">3
                                    <span class="zoom-slider__button-title">Dummy Data</span>
                                </button>
                                <button type="button" data-filter="4" class="zoom-slider__button swiper-slide">4
                                    <span class="zoom-slider__button-title">Dummy Data</span>
                                </button>
                                <button type="button" data-filter="2" class="zoom-slider__button swiper-slide">2
                                    <span class="zoom-slider__button-title">Dummy Data</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zoom-services">
                    <div class="container">
                        <div class="zoom-services__title">Our services</div>
                        <div class="zoom-services__wrapper zoom-services__wrapper zoom-services__wrapper_bordered">
                            <div class="zoom-services__list">
                                <a href="#" class="zoom-services__item">
                                    <span class="zoom-services__item-title">Isi apa hayooo</span>
                                    <span class="zoom-services__item-text">Isi apa hayooo</span>
                                    <span class="zoom-services__item-footer"><span class="zoom-services__item-icon icon-apartment"></span><span class="zoom-services__more">more</span></span>
                                </a>
                                <a href="#" class="zoom-services__item">
                                    <span class="zoom-services__item-title">Isi apa hayooo</span>
                                    <span class="zoom-services__item-text">Isi apa hayooo</span>
                                    <span class="zoom-services__item-footer"><span class="zoom-services__item-icon icon-home"></span><span class="zoom-services__more">more</span></span>
                                </a>
                                <a href="#" class="zoom-services__item">
                                    <span class="zoom-services__item-title">Isi apa hayooo</span>
                                    <span class="zoom-services__item-text">Isi apa hayooo</span>
                                    <span class="zoom-services__item-footer"><span class="zoom-services__item-icon icon-shovel"></span><span class="zoom-services__more">more</span></span>
                                </a>
                                <a href="#" class="zoom-services__item">
                                    <span class="zoom-services__item-title">Isi apa hayooo</span>
                                    <span class="zoom-services__item-text">Isi apa hayooo</span>
                                    <span class="zoom-services__item-footer"><span class="zoom-services__item-icon icon-bubbles"></span><span class="zoom-services__more">more</span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zoom-counters">
                    <div class="container">
                        <div class="row">
                            <div class="zoom-counters__item col-12 col-lg-6 col-xl-4">
                                <div class="zoom-counters__value">
                                    12000
                                    <div data-counter-value="12000" class="zoom-counters__value-inner js-counter">12,000</div>
                                </div>
                                <div class="zoom-counters__text">Partner<br />worldwide</div>
                            </div>
                            <div class="zoom-counters__item col-12 col-lg-6 col-xl-4">
                                <div class="zoom-counters__value">
                                    4620
                                    <div data-counter-value="4620" class="zoom-counters__value-inner js-counter">4,620</div>
                                </div>
                                <div class="zoom-counters__text">employees and<br />staffs</div>
                            </div>
                            <div class="zoom-counters__item col-12 col-lg-6 col-xl-4">
                                <div class="zoom-counters__value">
                                    2750
                                    <div data-counter-value="2750" class="zoom-counters__value-inner js-counter">2,750</div>
                                </div>
                                <div class="zoom-counters__text">project completed</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="zoom-posts">
                    <div class="container">
                        <div class="zoom-posts__head">
                            <div class="zoom-posts__title">Our blog</div>
                            <a href="#" class="zoom-posts__more-link zoom-posts__more-link_inverted">See all articles</a>
                        </div>
                    </div>
                    <div class="posts">
                        <div class="container">
                            <div class="row">
                                <div class="posts__item col-12 col-lg-4">
                                    <a href="<?php echo site_url('blog/detail'); ?>" class="posts__item-inner">
                                        <img src="<?php echo base_url('/inti/img/studio-post-image-1.jpg'); ?>" alt="" class="posts__image" />
                                        <span class="posts__item-content">
                                            <span class="posts__item-footer">
                                                <span class="posts__category">Category</span>
                                                <span class="posts__date">June 25, 2020</span>
                                            </span>
                                            <span class="posts__item-title">ISI APA HAYOOO</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="posts__item col-12 col-lg-4">
                                    <a href="<?php echo site_url('blog/detail'); ?>" class="posts__item-inner">
                                        <img src="<?php echo base_url('/inti/img/studio-post-image-2.jpg'); ?>" alt="" class="posts__image" />
                                        <span class="posts__item-content">
                                            <span class="posts__item-footer">
                                                <span class="posts__category">Category</span>
                                                <span class="posts__date">June 25, 2020</span>
                                            </span>
                                            <span class="posts__item-title">ISI APA HAYOOO</span>
                                        </span>
                                    </a>
                                </div>
                                <div class="posts__item col-12 col-lg-4">
                                    <a href="<?php echo site_url('blog/detail'); ?>" class="posts__item-inner">
                                        <img src="<?php echo base_url('/inti/img/studio-post-image-3.jpg'); ?>" alt="" class="posts__image" />
                                        <span class="posts__item-content">
                                            <span class="posts__item-footer">
                                                <span class="posts__category">Category</span>
                                                <span class="posts__date">June 25, 2020</span>
                                            </span>
                                            <span class="posts__item-title">ISI APA HAYOOO</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php echo $footer; ?>
        </div>
        <?php echo $js; ?>
    </body>
</html>