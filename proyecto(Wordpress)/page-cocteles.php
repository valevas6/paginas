<?php 
get_header();
if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<div class="background_cocktail center_elements">
    <?php echo get_the_post_thumbnail( $page->ID, 'loguito'); ?>
</div>

<?php
	$mypages = get_pages( array( 'child_of' => 143, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); /*comprobar que el numero de pagina sea el correcto*/

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

    ?>
        <div class="background_cocktail2 center_elements">
        <div class="container-fluid center_elements">
        <div class="row center_elements">
        <div class="title_distance"><h1><?php echo $page->post_title; ?></h1></div>
        
        
        <?php
            echo '<div class="col-md-6 order-2 order-md-2 txt_bebidas">';
            echo '<div class="textos txt_bebidas">' .$content.'</div>';
            echo '</div>';

            echo '<div class="col-md-6 order-1 order-md-1 txt_bebidas">';
            echo get_the_post_thumbnail( $page->ID, 'res_imgs');
            echo '</div>';

            echo '</div>';
            echo '</div>';
            echo '</div>';
         
	}	
?>

<?php 
endwhile;
else :
    echo "<p>No hay contenido que mostrar</p>";
   endif;
?>
 <?php
    get_footer();
 ?>
