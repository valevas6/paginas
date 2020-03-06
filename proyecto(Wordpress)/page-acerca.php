<?php 
get_header();
if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<div class="master_container">

<div class="background-header center_elements">
    <?php echo get_the_post_thumbnail( $page->ID, 'medium_large'); ?>
</div>

<?php

    $i=0;

    if($i>2){
        $i=0;
    }

    $fondos = array("background-ab1", "background-ubi", "background-ab2");  

	$mypages = get_pages( array( 'child_of' => 156, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); /*comprobar que el numero de pagina sea el correcto*/

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

    ?>
        <div class="center_elements <?php echo $fondos[$i]; ?>">
        <div class="title_distance"><h1><?php echo $page->post_title; ?></h1></div>
        
        
        <?php
            echo '<div class="textos center_elements">' .$content.'</div>';
            echo get_the_post_thumbnail( $page->ID, 'res_imgs center_img');
            $i++;
            echo '</div>';
	}	
?>

</div>


<?php 
endwhile;
else :
    echo "<p>No hay contenido que mostrar</p>";
   endif;
?>
 <?php
    get_footer();
 ?>


<!--
    <div class="background-header center_elements">
        <img src="/assets/img/logo.png" class="loguito">
    </div>

    <div class="background-ab1">
        <h1 class="title_distance center_elements paddingtoprow">Restaurant</h1>
        <p class="textos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate?</p>
        <br>
        <img src="/assets/img/mesas.jpg" class="res_imgs center_img">
    </div>

    <div class="background-ubi">
        <div class="row paddingtoprow">
            <div class="col-md-6 col-xs-12">
            <h1 class="title_distance center_elements letraspink">Bar</h1>
            <p class="textos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate?</p>
            <br>
            </div>
            <div class="col-md-6 col-xs-12">
            <h1 class="title_distance center_elements letraspink">Disco</h1>
            <p class="textos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate?</p>
            <br>
            </div>
            <div class="col-md-6 col-xs-12">
            <h1 class="title_distance center_elements letraspink">Restaurant</h1>
            <p class="textos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate?</p>
            <br>
            </div>
            <div class="col-md-6 col-xs-12">
            <h1 class="title_distance center_elements letraspink">Food</h1>
            <p class="textos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate?</p>
            <br>
            </div>
        </div>
    </div>

    <div class="background-ab2">

        <h1 class="title_distance center_elements paddingtoprow">Purpose</h1>
            <p class="textos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate? Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Eius voluptates tempore quo iste minus architecto dolore facilis libero enim. Eum soluta officia aliquid quae modi possimus saepe odio laudantium voluptate?</p>
            <br>

    </div>



    
