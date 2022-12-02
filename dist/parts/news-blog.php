<div class="c-columns js-nb-tab select">
    <div class="c-columns__inner flex flex-wrap s:flex-col justify-between ml:w-4/5 ml:max-w-1280 m-auto mb-8">

        <?php if ( wp_is_mobile() ) {
            $cat_posts = get_posts(array(
                'post_type' => 'news',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
        } else {
            $cat_posts = get_posts(array(
                'post_type' => 'news',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
        };
            global $post;
            if ( $cat_posts ) : foreach ( $cat_posts as $post ) : setup_postdata( $post );
        ?>

        <a href="<?php echo get_permalink(); ?>" class="p-news-blog__column c-column">
            <div class="p-news-blog__body">
                <h2><?php the_title(); ?></h2>
                <time datatime="<?php the_time('Y-m-d'); ?>"><?php the_time('y/m/d'); ?></time>
            </div>
        </a>

        <?php endforeach; endif; wp_reset_postdata(); ?>

    </div>

    <a href="<?php echo home_url(); ?>/news/" class="c-button btn-xl m-auto ml:mb-16 bg-main">もっと見る</a>

</div>

<div class="c-columns js-nb-tab">
    <div class="c-columns__inner flex flex-wrap s:flex-col justify-between ml:w-4/5 ml:max-w-1280 m-auto mb-8">

        <?php if ( wp_is_mobile() ) {
            $cat_posts = get_posts(array(
                'post_type' => 'blog',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
        } else {
            $cat_posts = get_posts(array(
                'post_type' => 'blog',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
        };
            global $post;
            if ( $cat_posts ) : foreach ( $cat_posts as $post ) : setup_postdata( $post );
        ?>

        <a href="<?php echo get_permalink(); ?>" class="p-news-blog__column c-column">
            <div class="p-news-blog__body">
                <h2><?php the_title(); ?></h2>
                <time datatime="<?php the_time('Y-m-d'); ?>"><?php the_time('y/m/d'); ?></time>
            </div>
        </a>

        <?php endforeach; endif; wp_reset_postdata(); ?>

    </div>

    <a href="<?php echo home_url(); ?>/blog/" class="c-button btn-xl m-auto ml:mb-16 bg-main">もっと見る</a>

</div>