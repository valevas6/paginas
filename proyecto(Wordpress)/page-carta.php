<?php 
get_header();
if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<div class="background-menu center_elements">
    <?php echo get_the_post_thumbnail( $page->ID, 'loguito center_elements'); ?>
</div>

<?php
	$mypages = get_pages( array( 'child_of' => 242, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); /*comprobar que el numero de pagina sea el correcto*/

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

    ?>
        <div class="background-menu2 center_elements">

        <?php
            echo '<div class="textos center_elements">' .$content.'</div>';
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
