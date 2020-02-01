<?php get_header(); ?>

<?php 
    // Argumentos para una busqueda de post type
    $args = array(
      'post_type' => 'banner', // Nombre del post type
      'order' => 'ASC'
    );
    $banners = new WP_Query($args);
    if ($banners->posts):
      // Foreach para recorrer el resultado de la busqueda
        foreach ($banners->posts as $banner):
          $banner_name = $banner->post_title;
          $banner_img = wp_get_attachment_url( get_post_thumbnail_id($banner->ID, 'full') ); // Url de la imagen en tamaño Full
  ?>

    <section class="banner-principal" style="background-image: url('<?php echo $banner_img;?>')" id="inicio" alt="<?php echo $banner_name; ?>">
        <a class="arrow-move arrow-move-down js-btn" href="#contacto"></a>
    </section>
    	<?php
    	 endforeach;
		 endif; 
        ?>
    <section class="container-fluid p-content" id="nosotros">
        <div class="row">
            <div class="offset-md-1 col-12 col-md-4 d-flex justify-content-center flex-column">
                <h2 class="color-blue title-line">NOSOTROS</h2>

                <?php 
                    // Argumentos para una busqueda de post type
                    $args = array(
                      'post_type' => 'texto_destacado', // Nombre del post type
                      'order' => 'ASC'
                    );
                    $textos = new WP_Query($args);
                    if ($textos->posts):
                      // Foreach para recorrer el resultado de la busqueda
                        foreach ($textos->posts as $texto):
                            $texto_desc = $texto->post_content;
                            $texto_img = wp_get_attachment_url( get_post_thumbnail_id($texto->ID, 'full') ); // Url de la imagen en tamaño Full
                  ?>
                <p><?php echo $texto_desc; ?></p>
                <?php
                 endforeach;
                 endif; 
                ?>
                <div id="accordion" class="w-100 acordion-item">
                <?php 
                    // Argumentos para una busqueda de post type
                    $args = array(
                      'post_type' => 'descripcin', // Nombre del post type
                      'order' => 'ASC'
                    );
                    $nosotros = new WP_Query($args);
                    if ($nosotros->posts):
                        $i = 1;
                      // Foreach para recorrer el resultado de la busqueda
                        foreach ($nosotros->posts as $descripcion):
                          $descripcion_name = $descripcion->post_title;
                          $descripcion_desc = $descripcion->post_content;
                  ?>
                    <a class="card-link montserrat-font color-blue" data-toggle="collapse" href="<?php echo "#collapse".$i ?>">
                        <?php echo $descripcion_name ?>
                    </a>
                    <div id="<?php echo "collapse".$i ?>" class="collapse <?php echo $active = ($i == 1 )? "show" : "";?>" data-parent="#accordion">
                        <div class="card-body">
                            <?php echo $descripcion_desc; ?>    
                        </div>
                    </div>
                <?php
                    $i++;
                    endforeach;
                    endif; 
                ?>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 offset-md-1 d-flex align-items-center">
                <img src="<?php echo $texto_img; ?>" alt="" class="w-100">
            </div>
        </div>
    </section>

<?php 
    // Argumentos para una busqueda de post type
    $argsServicio = array(
      'post_type' => 'servicio', // Nombre del post type
      'order' => 'ASC'
    );
    $servicios = new WP_Query($argsServicio);
    if ($servicios->posts):
    	$i = 1;
    	$j = 1;
  ?>
<section class="container-fluid p-content px-0" id="servicios">
    <div class="container">
        <h2 class="color-blue title-line">SERVICIOS</h2>
    </div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
	<?php 
    	foreach ($servicios->posts as $servicio):
		$servicio_name = $servicio->post_title;
		$servicio_slug = $servicio->post_name;

    ?>
        <li class="nav-item">
            <a class="nav-link <?php echo $active = ($i == 1 )? "active" : "";?>" data-toggle="tab" href="#<?php echo $servicio_slug;?>"><?php  echo "0".$i.". ".$servicio_name ?></a>
        </li>
        <?php
    		$i++;
    		endforeach;
        ?>
    </ul>
    
    <div class="bg-yellow">
        <div class="tab-content">
        		<?php 
			    	foreach ($servicios->posts as $servicio):
					$servicio_name = $servicio->post_title;
					$servicio_desc = $servicio->post_content;
					$servicio_img = wp_get_attachment_url( get_post_thumbnail_id($servicio->ID, 'full') );
					$servicio_slug = $servicio->post_name;
			    ?>
            <div id="<?php echo $servicio_slug?>" class="container-fluid tab-pane <?php echo $active = ($j == 1 )? "active" : "";?>">
                <div class="row">
                    <div class="col-12 col-md-5 px-0">
                        <img src="<?php echo $servicio_img;?>" alt="<?php echo $servicio_name;?>" class="w-100">
                    </div>
                    <div class="col-12 col-md-5 offset-md-2 d-flex item-tab">
                        <h2><?php  echo "0".$j.". ".$servicio_name ?></h2>
                        <p><?php echo $servicio_desc?></p>
                        <a href="#contacto" class="btn-general">COTIZAR</a>
                    </div>
                </div>
            </div>
            <?php
	    		$j++;
	    		endforeach;
	        ?>
        </div>
    </div>
</div>
</section>
		<?php
    		endif 
        ?>


<section class="container-fluid p-content px-0" id="proyectos">
    <div class="row m-0">
        <div class="offset-lg-1 col-lg-4">
            <h2 class="color-blue title-line">PROYECTOS</h2>
        </div>
    </div>
    <div class="carousel-pop slide">
        <?php 
            // Argumentos para una busqueda de post type
            $args = array(
              'post_type' => 'proyecto', // Nombre del post type
              'order' => 'ASC'
            );
            $proyectos = new WP_Query($args);
            if ($proyectos->posts):
              // Foreach para recorrer el resultado de la busqueda
                foreach ($proyectos->posts as $proyecto):
                    $proyecto_name = $proyecto->post_title;
                    $proyecto_img = wp_get_attachment_url( get_post_thumbnail_id($proyecto->ID, 'full') ); // Url de la imagen en tamaño Full
                    $proyecto_fecha = $proyecto->fecha_proyecto;
                    $proyecto_ubicacion = $proyecto->ubicacion;
                    $proyecto_reto = $proyecto->tab_reto;
                    $proyecto_solucion = $proyecto->tab_solucion;
          ?>
            <div>
                <div class="row mx-0">
                    <div class="col-12 offset-lg-1 col-lg-4 order-1 order-lg-0 d-flex align-items-center">
                        <div id="accordion2" class="w-100 acordion-item">
                            <a class="card-link montserrat-font color-blue" data-toggle="collapse" href="#collapseOne<?php echo $k;?>">EL RETO</a>
                            <div id="collapseOne<?php echo $k?>" class="collapse show" data-parent="#accordion2">
                                <div class="card-body">
                                    <?php echo $proyecto_reto;?>
                                </div>
                            </div>
                            <a class="collapsed card-link montserrat-font color-blue" data-toggle="collapse" href="#collapseTwo<?php echo $k;?>">LA SOLUCIÓN</a>
                            <div id="collapseTwo<?php echo $k?>" class="collapse" data-parent="#accordion2">
                                <div class="card-body">
                                    <?php echo $proyecto_solucion;?>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-12 col-lg-6 offset-lg-1 order-lg-1 order-0">
                        <a href="#" onclick="restartSlick()" data-toggle="modal" class="d-block img-pop" data-target="#<?php echo $proyecto->post_name ?>">
                            <img src="<?php echo $proyecto_img;?>" alt="" class="w-100">
                        </a>
                        <div class="carousel-text d-flex bg-blue montserrat-font color-yellow flex-wrap">
                            <div class="col-12 col-sm-4">
                                <p>CLIENTE
                                    <span><?php echo $proyecto_name;?></span>
                                        
                                </p>
                            </div>
                            <div class="col-12 col-sm-4">
                                <p>UBICACIÓN
                                    <span><?php echo $proyecto_ubicacion;?></span>
                                </p>
                            </div>
                            <div class="col-12 col-sm-4">
                                <p>FECHA
                                    <span><?php echo $proyecto_fecha;?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endforeach;
            endif; 
        ?>
    </div>
    <!-- Modal -->
    <?php 
        // Argumentos para una busqueda de post type
        $args = array(
          'post_type' => 'proyecto', // Nombre del post type
          'order' => 'ASC'
        );
        $proyectos = new WP_Query($args);
        if ($proyectos->posts):
            foreach ($proyectos->posts as $proyecto):
    ?>
    <div class="modal fade show" id="<?php echo $proyecto->post_name; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bg-blue">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="color-yellow">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-0 py-0">
                    <div class="slide">
                        <?php 
                            // Foreach para recorrer el resultado de la busqueda
                                $argsImage = array( 
                                    'post_type' => 'attachment', 
                                    'post_mime_type' => 'image',
                                    'numberposts' => -1,
                                    'post_status' => null,
                                    'exclude' => get_post_thumbnail_id($proyecto->ID, 'full'),
                                    'post_parent' => $proyecto->ID 
                                ); 
                                $attached_images = get_posts( $argsImage );
                        if($attached_images){
                                foreach ($attached_images as $image):
                        ?>
                            <div><img src="<?php echo $image->guid; ?>" class="w-100"></div>
                        <?php
                                endforeach;
                            }else{
                                $imagePop = wp_get_attachment_url( get_post_thumbnail_id($proyecto->ID, 'full') );
                        ?>
                            <div><img src="<?php echo $imagePop; ?>" class="w-100"></div>
                        <?php 
                            }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php 
        endforeach;
    endif;
    ?>
</section>            
<section class="container-fluid d-none d-md-block">
    <div class="row"><img src="<?php echo get_template_directory_uri(); ?>/img/separador.png" alt="" class="w-100"></div>
</section>
<section class="container-fluid form-page" id="contacto">
    <div class="row">
        <div class="col-12 col-md-6 bg-celeste">
            <div class="form-contact">
                <h2 class="color-blue title-line">CONTACTANOS</h2>

                <?php 
                    // Argumentos para una busqueda de post type
                    $args = array(
                      'post_type' => 'contacto', // Nombre del post type
                      'order' => 'ASC'
                    );
                    $contactos = new WP_Query($args);
                    if ($contactos->posts):
                      // Foreach para recorrer el resultado de la busqueda
                        foreach ($contactos->posts as $contacto):
                          $contacto_desc = $contacto->code;
                          $contacto_descripcion = $contacto->texto_formulario;
                          $contacto_contacto = $contacto->datos_contacto;
                  ?> 
                  <?php
                     endforeach;
                     endif; 
                    ?>
                <?php echo $contacto_desc;?>
            </div>
        </div>
        <div class="col-12 col-md-6 px-0 d-flex text-form montserrat-font color-blue">
            <div class="bg-yellow data-text d-flex justify-content-center flex-column">
                <?php echo $contacto_descripcion;?>
            </div>
            <div class="data-contact montserrat-font d-flex flex-column justify-content-center">
                <?php echo $contacto_contacto;?>
                <p class="tel"><a href="tel:573045613670">(+57) 3045613670</a></p>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>