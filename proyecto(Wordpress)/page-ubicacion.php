<?php 
get_header();
if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<div class="master_container">

<div class="background-header center_elements">
    <?php echo get_the_post_thumbnail( $page->ID, 'medium_large'); ?>
</div>

<?php

	$mypages = get_pages( array( 'child_of' => 125, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); /*comprobar que el numero de pagina sea el correcto*/

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

    ?>
        <div class="center_elements background-ubi">
        <div class="title_distance"><h1><?php echo $page->post_title; ?></h1></div>
        
        
        <?php
            echo '<div class="textos center_elements">' .$content.'</div>';
            echo get_the_post_thumbnail( $page->ID, 'medium_large');
            echo '<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18687.21404136206!2d-84.44329672626199!3d10.05782215267885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa05aca0a996d37%3A0x350b16bac4c64adb!2sChelip&#39;s!5e0!3m2!1ses!2scr!4v1549157534148" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>';
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