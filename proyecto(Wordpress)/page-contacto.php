<?php 
get_header();
?>

<div class="master_container">

<div class="background_cocktail center_elements">
    <?php echo get_the_post_thumbnail( $page->ID, 'loguito'); ?>
</div>

<?php

	$mypages = get_pages( array( 'child_of' => 183, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); /*comprobar que el numero de pagina sea el correcto*/

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

    ?>
        <div class="center_elements fondoazul">
        <div class="title_distance"><h1><?php echo $page->post_title; ?></h1></div>
        
        
        <?php
            echo '<div class="textos center_elements">' .$content.'</div>';
            echo get_the_post_thumbnail( $page->ID, 'medium_large');
            echo '</div>';
	}	
?>

    <div class="background-contact">
        <div class="row container">
            <div class="col-lg-6 col-md-12 mar">
                <center>
                    <h2>Formulario</h2>
                </center>
                <div class="form-group row paddingtoprow">
                    <div class="col-lg-3 col-md-12"><label> <h3>Nombre:</h3> </label></div>
                    <div class="col-lg-9 col-md-12"><input type="text" class="form-control" placeholder=""></div>
                </div>
                <div class="form-group row paddingtoprow">
                    <div class="col-lg-3 col-md-12"><label><h3>Email:</h3></label></div>
                    <div class="col-lg-9 col-md-12"><input type="email" class="form-control" placeholder=""></div>
                </div>
                <div class="form-group row paddingtoprow">
                    <div class="col-lg-3 col-md-12"><label><h3>Comentario:</h3></label></div>
                    <div class="col-lg-9 col-md-12"><textarea type="text" rows="3" class="form-control" placeholder=""></textarea></div>
                </div>
                <br>
                <center><button class="btn button">Enviar</button></center>
            </div>
            <div class="col-lg-6 col-md-12">
                <center>
                    <h2>Manténtente en contacto</h2>
                </center>
                <div class="row margin-gett">
                    <div class="col-2 margintextgett"><img src="<?php bloginfo('template_directory'); ?>/assets/img/tel.png" class="gettouch"></div>
                    <div class="col-10 margintextgett">
                        <p>2453-50-38</p>
                    </div>

                    <div class="col-2 margintextgett"><img src="<?php bloginfo('template_directory'); ?>/assets/img/ubi.png" class="gettouch"></div>
                    <div class="col-10 margintextgett">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>

                    <div class="col-2 margintextgett"><img src="<?php bloginfo('template_directory'); ?>/assets/img/mensa.png" class="gettouch"></div>
                    <div class="col-10 ">
                        <p>pockets87@gmail.com
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php 
get_footer();
?>