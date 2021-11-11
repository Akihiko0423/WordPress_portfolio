<?php get_header(); ?>  
  <body<?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <header class = "l-header p-header">
      <div class = "p-header__inner">
        <h1 class = "p-header__inner--logo"><a href = "<?php echo esc_url( home_url( '/' ) ); ?>">Akihiko's Portfolio</a></h1>
        <div id = "slidetoggle_button" class="p-header__inner--btn c-hamburger-menu">
          <span class="c-hamburger-menu__line"></span>
        </div>
        <nav id = "slidetoggle_menu" class = "p-header__inner--nav">
          <ul>
            <li><a class = "menu-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a class = "menu-btn" href="#about">About Me</a></li>
            <li><a class = "menu-btn" href="#skills">Skills</a></li>
            <li><a class = "menu-btn" href="#works">Works</a></li>
            <li><a class = "menu-btn" href="#price">Price</a></li>
            <?php
              $page = get_page_by_path( 'contact' );
              $page_id = $page->ID;
            ?>
            <li><a class = "menu-btn" href="<?php echo get_permalink($page_id);?>">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main class = "l-main">
      <div class = "p-main-visual">
        <video id="bg-video" src="<?php echo get_template_directory_uri(); ?>/video/forest.mp4" loop autoplay muted></video>
        <img src="<?php echo get_template_directory_uri(); ?>/img/forest_Moment.jpg" alt="main-visual">
        <h1>Akihiko<br>Webコーディング</h1>
      </div>

      <section id = "about" class = "p-about">
        <div class = "p-about__inner ">
          <h2>About Me</h2>
          <div class = "p-about__inner__detail fadein">
            <img src="<?php echo get_template_directory_uri(); ?>/img/my-profile.jpg" alt="myprofile">
            <p>はじめまして。鳥取県出身の大学生、Akihikoです。<br>
              現在は岡山大学の工学部に在籍して、無線通信についての勉強をしております。<br>
              2021年6月よりWebサイト制作の学習を始め、
              主にコーディングやWordPress製作を受注しています。<br>
              またTwitterでも学習記録やWeb製作に関する情報を発信しています。
              どうぞよろしくお願いいたします。
            </p>
          </div>
        </div>
      </section>

      <section id = "skills" class = "p-skills">
        <div class = "p-skills__inner">
          <h2>Skills</h2>
          <div class = "p-skills__inner__detail">
              <ul class = "p-skills-list">
                <li class = "fadein">  <div class = "p-skills-list__item"><i class="fab fa-html5 fa-7x c-icon"></i><p>HTML</p></div>    </li>
                <li class = "fadein"> <div class = "p-skills-list__item"><i class="fab fa-css3-alt fa-7x c-icon"></i><p>CSS</p></div>  </li>
                <li class = "fadein">  <div class = "p-skills-list__item"><i class="fab fa-sass fa-7x c-icon"></i><p>Sass</p></div>      </li>
                <li class = "fadein">  <div class = "p-skills-list__item"><img class = "c-icon jquery" src="<?php echo get_template_directory_uri(); ?>/img/jquery-icon.jpg" alt="#"><p class = "jquery-text">jQuery</p></div>  </li>
              </ul>
              <ul class = "p-skills-list">
                <li class = "fadein">  <div class = "p-skills-list__item"><i class="fas fa-mobile fa-7x c-icon"></i><p>Responsive</p></div></li>
                <li class = "fadein">  <div class = "p-skills-list__item"><i class="far fa-clone fa-7x c-icon"></i><p>CSS設計</p></div></li>
                <li class = "fadein">  <div class = "p-skills-list__item"><i class="fab fa-wordpress-simple fa-7x c-icon"></i><p>WordPress</p></div></li>
                <li class = "fadein">  <div class = "p-skills-list__item"><i class="fab fa-github fa-7x c-icon"></i><p>git/github</p></div></li>
              </ul>
              <ul class = "p-skills-text">
                <li>レスポンシブ対応(PC、タブレット、スマートフォンなどのデバイス)</li>
                <li>DartSassを用いたスタイリング</li>
                <li>保守性の高いコーディング(FLOCSSによるCSS設計)</li>
                <li>いただいたデザインデータを元にHTML/CSS、jQueryでコーディングをした後、WordPress化し運用しやすいWebサイトを構築</li>
              </ul>
          </div>
        </div>
      </section>

      <section id = "works" class = "p-works">
        <div class = "p-works__inner">
          <h2>Works</h2>
          <div class = "p-works__inner__detail">
            <?php if( have_posts() ) : ?>
              <?php while( have_posts() ) : the_post(); ?>
              <article class = "p-card fadein">
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
      </section>
      <section id = "price" class = "p-price">
        <div class = "p-price__inner">
          <h2>Price</h2>
          <div class = "p-price__inner__detail ">
            <h3><コーディング&WordPress化></h3>
            <div class = "p-item">
              <p class = "p-item__name">トップページ</p>
              <p class = "p-item__int">￥15,000~</p>
            </div>
            <div class = "p-item">
              <p class = "p-item__name">下層ページ(1ページ)</p>
              <p class = "p-item__int">￥12,000~</p>
            </div>
            <div class = "p-item">
              <p class = "p-item__name">HTMLデータのWordPress化</p>
              <p class = "p-item__int">￥50,000~</p>
            </div>
          </div>
          <p>※料金はすべて税込みとなっております。<br>
            デザインのご依頼は承っていません。<br>
            また料金は目安なのでまずはお気軽にご相談ください。
          </p>
        </div>
      </section>
      <section id = "contact" class = "p-contact">
        <div class = "p-contact__inner">
          <h2>Contact</h2>
          <div class = "p-contact__inner__detail">
            <p>お問い合わせページはこちらの<a class = "c-contact-link" href="<?php echo get_permalink($page_id);?>">リンク</a>から</p>
          </div>
        </div>
      </section>
    </main>

    <!--twitterアイコン-->
    <div class = "c-footer-link">
      <a href="https://twitter.com/AKIHIKORaiseTe1"><i class="fab fa-twitter fa-2x"></i></a>
      <a href="https://github.com/Akihiko0423"><i class="fab fa-github fa-2x c-icon"></i></a>
    </div>

<?php get_footer(); ?>
