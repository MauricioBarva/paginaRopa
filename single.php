<?php get_header();?>
<section class="main py-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php bloginfo('home');?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Boots</a></li>
                    <li class="breadcrumb-item active">   <?php the_title();?></li>
                </ol>
            </nav>
        </div>

        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="h4 text-muted text-center font-weight-light">
                        <?php the_title();?>
                    </h3>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="row p-0 ">
                        <div class="col-3 d-flex flex-column flex-wrap align-content-center">
                            <a href="#" class="d-block my-3 w-75 border"><img src="<?php bloginfo('template_url')?>/img/d1.png" class="img-fluid"
                                    class="rounded img-fluid  " alt=""></a>
                            <a href="#" class="d-block my-3 w-75 border"><img src="<?php bloginfo('template_url')?>/img/verde.png"
                                    class="rounded img-fluid  " alt=""></a>
                            <a href="#" class="d-block my-3 w-75 border"><img src="<?php bloginfo('template_url')?>/img/rojo.png"
                                    class="rounded img-fluid  " alt=""></a>
                            <a href="#" class="d-block my-3 w-75 border"><img src="<?php bloginfo('template_url')?>/img/azul.png"
                                    class="rounded img-fluid  " alt=""></a>
                            <a href="#" class="d-block my-3 w-75 border"><img src="<?php bloginfo('template_url')?>/img/amarillo.png"
                                    class="rounded img-fluid  " alt=""></a>
                        </div>
                        <div class="col-9 p-0 align-self-center border">
                            <?php if(has_post_thumbnail()) : the_post_thumbnail('homepage-thumb');?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 p-5 align-self-center">

                    <div class="extracto-single">
                        <p class="border-bottom pb-4"><span class="d-block font-weight-bold mb-2 h3"><?php the_excerpt();?></span>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita reiciendis
                            consectetur
                            rerum, sit temporibus.
                        </p>

                    </div>
                    <div class="form-group select-color row border-bottom pb-4">
                        <div class="col-6">
                            <label for="color" class="d-block">Color</label>
                            <select class="form-control" id="color">
                                <option>Brown</option>
                                <option>Green</option>
                                <option>Red</option>
                                <option>Yellow</option>
                                <option>Blue</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <div class="col-6">
                            <label for="quantity" class="d-block">Quantity</label>
                            <input class="form-control" type="number" value="1" id="quantity">
                        </div>
                        <div class="col-12 py-4">
                            <a href="#" class="btn-shopping">Add to Shopping Cart</a>
                            <a href="#" class="continue-shopping">← Continue Shopping</a>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row descripcion-producto">

                <div class="col-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="details-tab" data-toggle="tab" href="#details" role="tab"
                                aria-controls="details" aria-selected="false">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="share-tab" data-toggle="tab" href="#share" role="tab"
                                aria-controls="share" aria-selected="false">Share</a>
                        </li>
                    </ul>
                    <div class="tab-content py-3 border-bottom" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <h4 class="h5 text-muted"><?php the_title();?></h4>
                            <p class="mb-0"><?php the_content();?></p>
                        </div>
                        <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                            <h4 class="h5 text-muted">Fabrication</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam,
                                beatae ipsa
                                enim
                                deserunt porro doloremque minus vitae ullam repellat.</p>
                        </div>
                        <div class="tab-pane fade" id="share" role="tabpanel" aria-labelledby="share-tab">
                            <h4 class="h5 text-muted">Lorem ipsum dolor sit amet.</h4>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam,
                                beatae ipsa
                                enim
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 contenedor-redes pt-3 ">
                    <small class="font-weight-bold">SHARE THIS PRODUCT ON:</small>
                    <div class="iconos-redes mt-2">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="carousel-single">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h3 class="titulo-single text-center text-muted h4 my-5 font-weight-light">You might also be
                            interested in</h3>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-10">
                        <div id="my-slider" class="carousel slide position-relative" data-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item active ">
                                    <div class="contenedor-art row d-flex justify-content-between">
                                        <article class="articulo  col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white ">
                                                <a href="#"><img src="img/d1.png" class="img-fluid " alt=""></a>
                                            </div>
                                            <p class="precio my-2"> €501.60 <span class="descuento-carousel">( €627.00 )</span>
                                            </p>
                                            <p class="titulo-carousel">
                                                <a href="#">Steve Madden Shoes, Bruklyn Lace Boots</a>
                                            </p>
                                        </article>
                                        <article class="articulo col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white ">
                                                <a href="#"><img src="img/d6.png" class="img-fluid" alt=""></a>
                                            </div>
                                            <p class="precio my-2"> €172.00 </p>
                                            <p class="titulo-carousel">
                                                <a href="#">BedStu Shoes, Bryden Boots</a>
                                            </p>
                                        </article>
                                        <article class="articulo col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white">
                                                <a href="#"><img src="img/d3.png" class="img-fluid" alt=""></a>
                                            </div>
                                            <p class="precio my-2"> €7,628.00 <span class="descuento-carousel">( €10,000 )</span>
                                            </p>
                                            <p class="titulo-carousel">
                                                <a href="#">Armani Jeans Shoes, Wax Leather Boots</a>
                                            </p>
                                        </article>
                                        <article class="articulo col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white">
                                                <a href="#"><img src="img/d4.png" class="img-fluid" alt=""></a>
                                            </div>
                                            <p class="precio my-2"> €7,628.00 <span class="descuento-carousel">( €10,000 )</span>
                                            </p>
                                            <p class="titulo-carousel">
                                                <a href="#">Armani Jeans Shoes, Wax Leather Boots</a>
                                            </p>
                                        </article>
                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="contenedor-art row  d-flex justify-content-between">
                                        <article class="articulo col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white">
                                                <a href="#"><img src="img/d4.png" class="img-fluid" alt=""></a>
                                            </div>
                                            <p class="precio my-2">€234.00 </p>
                                            <p class="titulo-carousel">

                                                <a href="#">Cole Haan Boots, Stanton Waterproof Chelsea Boots</a>
                                            </p>
                                        </article>
                                        <article class="articulo col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white">
                                                <a href="#"><img src="img/d5.png" class="img-fluid" alt=""></a>
                                            </div>
                                            <p class="precio my-2">€834.00 </p>
                                            <p class="titulo-carousel">

                                                <a href="#">Lorem ipsum dolor sit amet consectetur elit.</a>
                                            </p>
                                        </article>
                                        <article class="articulo col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white">
                                                <a href="#"><img src="img/d6.png" class="img-fluid" alt=""></a>
                                            </div>
                                            <p class="precio my-2">€544.00 <span class="descuento-carousel">( €727.00 ) </p>
                                            <p class="titulo-carousel">

                                                <a href="#">Lorem ipsum dolor sit amet consectetur elit. </a>
                                            </p>
                                        </article>
                                        <article class="articulo col-6 col-sm-6 col-lg-3">
                                            <div class="img-articulo bg-white">
                                                <a href="#"><img src="img/d7.png" class="img-fluid" alt=""></a>
                                            </div>
                                            <p class="precio my-2">€2212.00 </p>
                                            <p class="titulo-carousel">

                                                <a href="#">Lorem ipsum dolor sit amet consectetur elit.</a>
                                            </p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#my-slider" role="button" data-slide="prev">
                                <i class="fas fa-angle-left  left1"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#my-slider" role="button" data-slide="next">
                                <i class="fas fa-angle-right  right1"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </section>

<?php get_footer();?> 