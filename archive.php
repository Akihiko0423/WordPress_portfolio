<?php get_header(); ?>  
  <body<?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php get_template_part('header-sub'); ?>

    <main class = "l-main">
      <div class = "p-archive">
        <h2>Works</h2>
        <div class = "p-archive__inner">
            <div class = "p-works__inner__detail">
                <?php if( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post(); ?>
                <article class = "p-card ">
                    <div class = "p-card__visual">
                    <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class = "p-card__text">
                        <h3><?php the_title(); ?></h3>
                        <p>製作ツール:
                        <?php 
                        if(function_exists('get_field')){
                            $tools = get_field('tool');
                            foreach($tools as $key => $tool){
                            echo $tool;
                            if($tool !== end($tools)){
                                echo'、';
                            }
                            }                        
                        }
                        else{
                            echo "Advanced Custom Fields利用しています。プラグインのAdvanced Custom Fieldsを有効化してください。";
                        }
                        ?>
                        </p>
                        <p>製作期間: 
                        <?php
                            if(function_exists('get_field')){
                            the_field('period');
                            }
                            else{
                            echo "Advanced Custom Fields利用しています。プラグインのAdvanced Custom Fieldsを有効化してください。";
                            }
                        ?>
                        </p>
                        <button class = "c-button p-card__text__btn">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </button>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            </div>
        </div>
      </div>
    </main>

    <div class = "c-footer-link-sub">
      <a href="https://twitter.com/AKIHIKORaiseTe1"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="https://github.com/Akihiko0423"><i class="fab fa-github fa-2x c-icon"></i></a>
    </div>
<?php get_footer(); ?>