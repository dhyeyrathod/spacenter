﻿<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#ffffff">
        <?php $this->load->view('common/css') ?>
    </head>
    <body data-spy="scroll"  data-offset="60">
        <main class=" box-shadow-wide">
            <div class="main-box">
                <section class="font-1 p-0">
                    <div class="container">
                        <?php $this->load->view('common/header') ?>
                        <div class="flexslider flexslider-simple">
                            <div class="fg">
                                <form class="zform mt-3" _lpchecked="1">
                                    <div class="row">
                                        <div class=" col-lg-4"> 
                                            <input class="form-control" type="text" placeholder="City Search" required="">
                                        </div>
                                        <div class=" col-lg-3">
                                            <select class="form-control" >
                                                <option>Services</option>
                                            </select>
                                        </div>
                                        <div class=" col-lg-3">
                                            <select class="form-control">
                                                <option>Area</option>
                                            </select>
                                        </div>
                                        <div class=" col-lg-2"> 
                                            <button class="btn btn-md-lg btn-primary" type="Go" style="width:100%;"> <span class="color-white fw-600">GO</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <ul class="slides">
                                <li data-zanim-timeline="{}" class="" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <section class="py-0">
                                        <div class="background-holder" style="background-image:url(<?= base_url('assets') ?>/images/slider-1.jpg);"></div>
                                        <div class="container p-9">
                                        </div>
                                    </section>
                                </li>
                                <li data-zanim-timeline="{}" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;" class="flex-active-slide">
                                    <section class="py-0">
                                        <div class="background-holder" style="background-image:url(<?= base_url('assets') ?>/images/slider-2.jpg);"></div>
                                        <div class="container p-9">
                                        </div>
                                    </section>
                                </li>
                                <li data-zanim-timeline="{}" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                    <section class="py-0">
                                        <div class="background-holder" style="background-image:url(<?= base_url('assets') ?>/images/slider-3.jpg);"></div>
                                        <div class="container p-9">
                                        </div>
                                    </section>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="font-1 py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 mr-0">
                                <div class="vertical-menu">
                                    <h5>Categories</h5>
                                    <hr class="color-9 my-2">
                                    <ul>
                                        <?php foreach ($category_key as $key => $category_data) : ?>
                                            <li><a href="#"><span class="fa fa-list-alt"></span> &nbsp <?= $category_data->category_name ?></a></li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                                <div class="vertical-menu">
                                    <h5>Popular Areas</h5>
                                    <hr class="color-9 my-2">
                                    <ul>
                                        <?php foreach ($area_key as $key => $area_data) : ?>
                                            <li><a href="all-area.html"><span class="fa fa-map-marker"></span> &nbsp <?= $area_data->area_name ?></a></li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                                <div class="vertical-menu">
                                    <h5>Services:</h5>
                                    <hr class="color-9 my-2">
                                    <ul>
                                        <?php foreach ($services_key as $key => $services_data) : ?>
                                            <li><a href="body-massage-centres.html"><span class="fa fa-hand-o-right"></span> &nbsp <?= $services_data->services_name ?></a></li>
                                        <?php endforeach ; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 px-0">
                                <div class="container text-center">
                                    <div class="row mb-6">
                                        <div class="col-lg-12">
                                            <h3 class="fs-2 fs-md-3"> Premium Listing</h3>
                                            <hr class="short" data-zanim="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 4.20873rem; opacity: 1;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php foreach ($paid_profile_key as $key => $paid_profile_data) : ?>
                                            <div class="col-lg-4  mb-3 mt-3 imgp">
                                                <a  class="cuadroa" href="details.html">
                                                    <div class="cuadro_intro_hover ">
                                                        <p style="text-align:center;">
                                                            <img src="<?= base_url('assets') ?>/images/Premium-2.jpg" class="img-responsive" alt="">
                                                        </p>
                                                        <div class="caption">
                                                            <div class="blur"></div>
                                                            <div class="caption-text">
                                                                <h3><marquee><?= $paid_profile_data->title ?></marquee></h3>
                                                                <p><b><?= $paid_profile_data->city_name ?></b> </p>
                                                                <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach ; ?>
                                    </div>
                                </div>
                                <div class="container text-center">
                                    <div class="row mb-6">
                                        <div class="col">
                                            <h3 class="fs-2 fs-md-3">Services</h3>
                                            <hr class="short" data-zanim="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 4.20873rem; opacity: 1;">
                                        </div>
                                    </div>
                                    <div data-dots="true" data-nav="true" data-items='{"0":{"items":2},"600":{"items":2}}' data-autoplay="true" data-margin="30" data-loop="true" class="owl-carousel owl-theme owl-nav-outer  owl-dot-round">
                                        <?php foreach ($services_key as $key => $services_data) : ?>
                                            <div class="item"><img src="<?= base_url('assets') ?>/images/services-1.jpg" class="radius-primary"/><p><b><?= $services_data->services_name ?></b></p></div>
                                        <?php endforeach ; ?>
                                    </div>
                                </div>
                                <div class="container text-center mt-5">
                                    <div class="row mb-6">
                                        <div class="col">
                                            <h3 class="fs-2 fs-md-3">Free Listing</h3>
                                            <hr class="short" data-zanim="{&quot;from&quot;:{&quot;opacity&quot;:0,&quot;width&quot;:0},&quot;to&quot;:{&quot;opacity&quot;:1,&quot;width&quot;:&quot;4.20873rem&quot;},&quot;duration&quot;:0.8}" style="width: 4.20873rem; opacity: 1;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <?php foreach ($free_profile_key as $key => $free_profile_data) : ?>
                                            <div class="col-lg-4  mb-3 mt-3 imgp">
                                                <div class="cuadro_intro_hover ">
                                                    <p style="text-align:center;">
                                                        <img src="<?= base_url('assets') ?>/images/portrait-1.jpg" class="img-responsive" alt="">
                                                    </p>
                                                    <div class="caption">
                                                        <div class="blur"></div>
                                                        <div class="caption-text">
                                                            <h3><marquee><?= $free_profile_data->title ?></marquee></h3>
                                                            <p><b><?= $free_profile_data->city_name ?></b> </p>
                                                            <p class="bgp">You will enjoy different kinds of body treatment and skin care treatments through facial and massage.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach ; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php $this->load->view('common/footer') ?>
            </div>
        </main>
        <?php $this->load->view('common/js') ?>
    </body>
</html>