<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if( is_home() ){
                echo get_bloginfo('name');
        } else if( is_single() ){
                echo the_title();
        }else{
            echo get_bloginfo('name');
        }?>

    </title>

    <?php
        wp_head();
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/bootstrap-css.min.css">
    <script src="<?php bloginfo('template_url')?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/all.min.css">

    <!--  Mis estilos css y js -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/index.css">
    <script src="<?php bloginfo('template_url')?>/js/index.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    
</head>

<body>

    <header>
        <div class="settings-header">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-block d-lg-none contenedor-btn d-flex position-relative ">
                        <div class="menu-hidden position-absolute" id="menu-hidden">
                            <div class="titulo-menu-hidden">
                                <h5>Classic Theme</h5>
                            </div>
                            <form class="form-inline  mt-3 form-search-hidden justify-content-center">
                                <input class="form-control w-75" type="search" placeholder="Search for products"
                                    aria-label="Search">
                                <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                            <ul class="lista-hidden">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Our Shoes</a></li>
                                <li><a href="#">For Men</a></li>
                                <li><a href="#">For Women</a></li>
                                <li><a href="#">Information</a></li>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Termns and Conditions</a></li>
                                <li><a href="#">Returns and Exchanges</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <button id="btn-hamburguesa" class="btn-hamburguesa "><i class="fas fa-bars"></i></button>
                    </div>
                    <div class="col-9 col-sm-9 col-lg-12 ">
                        <ul class="nav settings-nav">
                            <a href="#" class="nav-link">Login</a>
                            <a href="#" class="nav-link sign-up">Sign Up</a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="language" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    English
                                </a>
                                <div class="dropdown-menu " aria-labelledby="language">
                                    <a class="dropdown-item text-dark" href="#">English</a>
                                    <a class="dropdown-item text-dark" href="#">Español</a>
                                    <a class="dropdown-item text-dark" href="#">Croasant ( Francés )</a>
                                </div>
                            </li>
                            <a href="" class="nav-link cart"><i class="fas fa-shopping-cart"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="principal-part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 contenedor-titulo-principal">
                        <h1><a href="#" class="titulo-principal">Classic Theme</a></h1>
                    </div>
                    <div class="col-12 d-lg-block d-none">
                        <nav class="navegador-principal nav">
                            <a href="#" class="nav-link">Home</a>
                            <li class="nav-item dropdown" id="shoes">
                                <a class="nav-link dropdown-toggle" href="#" id="shoes" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Our Shoes
                                </a>
                                <div class="dropdown-menu" aria-labelledby="shoes" id="type-shoes">
                                    <a class="dropdown-item" href="#">For Men</a>
                                    <a class="dropdown-item" href="#">For Women</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown" id="information-payment">
                                <a class="nav-link dropdown-toggle" href="#" id="information" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Information
                                </a>
                                <div class="dropdown-menu" aria-labelledby="information" id="methods-payment">
                                    <a class="dropdown-item" href="#">Payment Methods</a>
                                    <a class="dropdown-item" href="#">Termns and Conditions</a>
                                    <a class="dropdown-item" href="#">Returns and Exchanges</a>
                                    <a class="dropdown-item" href="#">Privacy Policy</a>
                                </div>
                            </li>
                            <a href="#" class="nav-link">Blog</a>
                            <a href="#" class="nav-link">Contact</a>
                            <form class="form-inline ml-auto my-2 my-lg-0 form-search">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search for products"
                                    aria-label="Search">
                                <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>