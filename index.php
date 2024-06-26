        <?php
        get_header();
        ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="<?php bloginfo('template_url'); ?>/images/banner.png" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="<?php bloginfo('template_url'); ?>/images/banner.png" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid" src="<?php bloginfo('template_url'); ?>/images/banner.png" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <div class="container-fluid row">
                                    <?php 
                                    if ( have_posts() ):
                                        while ( have_posts() ) : the_post();
                                            the_content();
                                    ?>
                                        <div class="col-lg-2 col-md-3 col-sm-6">
                                            <div class="card">
                                                <a href=""><?php 
                                                                if ( has_post_thumbnail() ) {
                                                                    the_post_thumbnail('thumbnail', array( 'class' => 'card-img-top img-fluid' ));
                                                                }
                                                            ?></a>
                                                <img class="card-img-top img-fluid" src="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php the_title();?></h5>
                                                    <p class="card-text"><?php the_excerpt();?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    else :
                                        _e('no se encontraron productos en la categoria seleccionada', 'textdomain' );
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php
            get_footer();
            ?>
