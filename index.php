<?php get_header();?>

    <section class="main">
        <section class="carousel-contenido">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-lg-10">
                        <div id="my-slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#my-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#my-slider" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php bloginfo('template_url')?>/img/slider1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php bloginfo('template_url')?>/img/slider2.png" alt="Second slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#my-slider" role="button" data-slide="prev">
                                <i class="fas fa-angle-left left-slider"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#my-slider" role="button" data-slide="next">
                                <i class="fas fa-angle-right next-slider"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <div class="row destacados">
                    <div class="col-12 div-separador">
                        <h3> Featured Products</h3>
                    </div>
                    <div class="col-12 articulos">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   <!--  Asi se coloca una rticulo dependiendo de la categoria -->
                    <?php if(has_category( 'Destacado' ) ) { ?>
                        <article class="articulo destacado">
                            <div class="img-articulo">
                                <a href="<?php the_permalink();?>">
                                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
                                </a>
                            </div>
                            <p class="precio mb-1"><?php the_excerpt();?></p>
                            <p class="extracto mb-0">
                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            </p>
                        </article>
                    <!-- Aqui se cierra el if -->
                    <?php } ?>
                        
                    <?php endwhile; else: ?>
                        <article class="articulo destacado">
                            
                            <p>Lo siento el articulo no hay articulos destacados</p>
                           
                        </article>
                    <?php endif; ?>

                    </div>

                </div>

                <div class="row all-products">
                    <div class="col-12 div-separador modificado">
                        <h3> Products</h3>
                        <div class="form-group d-flex">
                            <label for="sortby">Sort by:</label>
                            <select class="form-control" id="sortby">
                                <option selected>Seleccionar</option>
                                <option>Cuero</option>
                                <option>Tela</option>
                                <option>Lona</option>
                                <option>Sintético</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 articulos">
                        <?php if( have_posts() ): while( have_posts() ) : the_post()?>
                        <article class="articulo col-6 col-sm-6 col-lg-3">
                            <div class="img-articulo bg-white">
                                <a href="<?php the_permalink();?>">
                                    <?php if( has_post_thumbnail()) : the_post_thumbnail('homepage-thumb')?>
                                    <?php endif;?>
                                </a>
                            </div>
                            <p class="precio my-2"><?php the_excerpt();?> </span>
                            </p>
                            <p class="titulo-carousel">
                                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                            </p>
                        </article>
                        <?php endwhile; else:?>
                        <article class="articulo destacado">
                            
                            <p>Lo siento el articulo no hay articulos</p>
                           
                        </article>
                        <?php endif;?>
                    </div>
                </div>
            </div>


        </section>
    </section>

   <?php get_footer();?>