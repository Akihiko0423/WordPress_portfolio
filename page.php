<?php get_header(); ?>  
    <body<?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('header-sub'); ?>

    <main class = "l-main">
        <div class = "p-page">
            <div class = "p-page__inner">
                <h2>Contact</h2>
                <div class = "p-page__inner__detail">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
    </main>


<?php get_footer(); ?>
