<header class = "l-header p-header">
    <div class = "p-header__inner">
        <h1 class = "p-header__inner--logo"><a href = "<?php echo esc_url( home_url( '/' ) ); ?>">Akihiko's Portfolio</a></h1>
        <div id = "slidetoggle_button" class="p-header__inner--btn c-hamburger-menu">
            <span class="c-hamburger-menu__line"></span>
        </div>
        <nav id = "slidetoggle_menu" class = "p-header__inner--nav">
            <ul>
                <li><a class = "menu-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <?php 
                $works = get_term_by('slug','works','category');
                $works_link = get_term_link('$works','category');
                ?>
                <li><a class = "menu-btn" href="<?php echo $works_link ?>">Works</a></li>
                <?php
                    $page = get_page_by_path( 'contact' );
                    $page_id = $page->ID;
                ?>
                <li><a class = "menu-btn" href="<?php echo get_permalink($page_id);?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>