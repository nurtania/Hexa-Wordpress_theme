<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">
<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- favicon Icon -->
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon" />
    <!-- Stylesheets -->
     <?php wp_head();?>
</head>

<body <?php body_class();?>>
  
    <!-- =========================== Main Header =========================== -->
    <header class="main-header">
        <!-- .header-top-->
        <div class="header-top">
            <div class="container h-100">
                <div class="row justify-content-between align-items-center h-100">
                    <div class="icons col col-sm-6">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <!-- .select-lang -->
                    <form class="col col-sm-6 d-flex justify-content-md-end select-lang" action="#" method="get">
                        <div class="form-item">
                            <input class="country_selector" type="text">
                        </div>
                    </form>
                    <!-- //.select-lang -->
                </div>
            </div>
        </div>
        <!-- //.header-top-->
        <!-- .site-branding -->
        <div class="site-branding">
            <nav class="h-100 navbar">
                <div class="container h-100">
                    <div class="h-100 row w-100">
                        <a class="align-items-center col-sm-12 d-flex justify-content-center navbar-brand w-100" href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- //.site-branding -->
        <nav class="navbar main-nav navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler m-menu-btn" type="button" data-toggle="collapse" data-target="#mainNav">
                    <span></span>
                </button>
               <!--  <div class="collapse navbar-collapse" id="mainNav">
                
                    <ul class="navbar-nav">
                        <li class="active"><a href="index.html" class="">Home</a></li>
                        <li class=""><a href="#" class="">Blog</a></li>
                        <li class=""><a href="#" class="">Catagory</a></li>
                        <li class=""><a href="#" class="">Features</a></li>
                        <li class=""><a href="about_page.html" class="">About</a></li>
                        <li class=""><a href="contact_page.html" class="">Contact</a></li>
                    </ul>
                </div> -->

                       <?php
                         wp_nav_menu(array(
                        'theme_location'    =>'top_menuid',
                        'menu_id'           => "mainNav",
                        'menu_class'        => "navbar-nav", 
                        ));
                         ?>


                <!--search form-->
                <form class="form-inline ml-auto" action="#" method="get">
                    <input class="form-control border-0 " type="search" placeholder="write something">
                </form>
            </div>
        </nav>
    </header>
    <!-- =========================== //Main Header =========================== -->
    <!-- =========================== Banner Post =========================== -->
   <!--  <?php
        if(is_home()){
               get_template_part( "templates-parts/Blog-home/featured");


        }
    ?> -->
    <?php get_template_part("templates-parts/Blog-home/featured"); ?>
    <!-- =========================== Banner Post end =========================== -->