<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"/>
 <title>Welcome to Wordpres Starter Theme </title>
 <?php wp_head(); ?>

</head>
<body <?php body_class();?>>

<header class="site-header">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">
      <img src="" class="img-responsive" alt="Logo" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <?php wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'container_id' => 'navbar',
        'menu_class' => 'navbar-nav mr-auto'
      ) ); ?>

      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search">
      </form>
    </div>
  </nav>
</header>
