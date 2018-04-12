<?php get_header();?>
  <?php  while(have_posts()) : the_post()?>


            <h2><?php the_title( ) ?></h2>


      <div class="main-content container">
          <main class="text-center content-text  clear">
              <?php the_content( ) ?>
          </main>
      </div>

  <?php endwhile; ?>
<?php get_footer();?>
