<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" \>
    <title><?php bloginfo('name');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="<?php bloginfo('charset')?>">
    <?php wp_head();?> 
</head>

<body <?php body_class(); ?>>


<nav class="navbar navbar-expand-md" role="navigation">
    <div class="container global_container center_elements">
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="center_elements">
			<a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" class="logo-header" alt="logo"></a>
		</div>
			
			<div class="center_elements">
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		
        
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ) );
            ?>
		</div>
    </div>
</nav>