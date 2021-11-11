<?php get_header(); ?>  
  <body<?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php get_template_part('header-sub'); ?>

    <main class = "l-main">
      <div class = "p-single">
        <h2>Works</h2>
        <div class = "p-single__inner">
          <div class = "p-single__inner__visual">
            <?php the_post_thumbnail('large'); ?>
          </div>
          <p class = "p-single__inner__title"><?php the_title(); ?></p>
          <?php the_content(); ?>
        </div>
        </div>
      </div>
    </main>

    <div class = "c-footer-link-sub">
      <a href="https://twitter.com/AKIHIKORaiseTe1"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="https://github.com/Akihiko0423"><i class="fab fa-github fa-2x c-icon"></i></a>
    </div>
<?php get_footer(); ?>