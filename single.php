
<?php
        get_header();
        ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                <?php 
                                    if ( have_posts() ):
                                        while ( have_posts() ) : the_post();
                                           
                                    ?>
                <div class="row">
                  <div class="col-6 card" >
                  <?php 
                                         if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('full', array( 'class' => 'img-fluid w-100 h-100' ));
                                             }
                                            ?>
                  </div>
                  <div class="col-6 card">
                  <div class="card col-12" style="width: 80%;">
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title();?></h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php the_content();?></li>
                        <h4 style="color: red"><?php the_excerpt();?></h4>
                      
                      <br>
                      <div class="row">
                          <button class="btn btn-danger mr-2" onclick="agregar_cantidad('resta');" >-</button>
                          <input type="number" value="1" class="form-control col-3" id="cantidad">
                          <button class="btn btn-success ml-2"  onclick="agregar_cantidad('suma');">+</button>
                    </div>
                 
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-success">comprar</button>
                      </div>
                      <br>
                    
                     
                    </div>
                    <p>Categoria: <?php the_category( ' ' ); ?></p>
                   <p>  Por: <?php the_author(); ?> | <?php the_date(); ?></p>
                  </div>
                </div>
                <?php endwhile;
                                    else :
                                        _e('no se encontraron productos en la categoria seleccionada', 'textdomain' );
                                    endif; ?>
                    </div>
                 
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <script>  
              function agregar_cantidad(tipo){
                    var cantidadActual = document.getElementById('cantidad').value;
                  if (tipo=="suma"){
                    var cantidadNueva=parseInt(cantidadActual)+1;
                  }else{ 
                    if(tipo=="resta" && cantidadActual>1){
                    var cantidadNueva=parseInt(cantidadActual)-1;
                  }else {
                    var cantidadNueva = 0;
                  }
                }
                    document.getElementById('cantidad').value=cantidad = cantidadNueva
              }
            
            </script>
            <?php
            get_footer();
            ?>
