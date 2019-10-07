<!-- <h2>The Header!</h2>
<hr> -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <title><?php bloginfo( 'name' ); ?></title>
<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
 <header class="site-header">
 <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
 <h4><?php bloginfo( 'description' ); ?></h4>
<<<<<<< HEAD
 <nav id="headroom" class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="/images/logo-m.png" alt="">
            </a>
        </div>
        <?php
        wp_nav_menu( array(
            /* Theme_location chính là phần bạn tùy chỉnh Menu cần hiển thị 
            Bạn có thể thay bằng "primary-menu" để lấy menu chính. */
            'theme_location'    => 'bst_menu',
 
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>
    </div>
</nav>
 <div class="header-search">
      <?php get_search_form(); ?>
 </div>
 </header>


=======
 </header>

>>>>>>> 2008f9d2573023c254af82f6744a0a93708a143a
