<?php 
get_header();
if (have_posts()) : 
while (have_posts()) : the_post(); ?>

<div class="master_container">

<div class="background-header center_elements">
    <?php echo get_the_post_thumbnail( $page->ID, 'loguito'); ?>
</div>

<?php
    $i=0;

    if($i>4){
        $i=0;
    }

    $fondos = array("background-drinks", "background-res", "background-enter", "background-disco", "background-acti");

	$mypages = get_pages( array( 'child_of' => 85, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) ); /*comprobar que el numero de pagina sea el correcto*/

	foreach( $mypages as $page ) {		
		$content = $page->post_content;

    ?>
        <div class="center_elements <?php echo $fondos[$i]; ?>">
        <div class="title_distance"><h1><?php echo $page->post_title; ?></h1></div>
        
        
        <?php
            echo '<div class="textos center_elements">' .$content.'</div>';
            echo get_the_post_thumbnail( $page->ID, 'banner_img');
            $i++;
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
