<div class="c-columns flex ml:mb-16 s:mb-8">
    <div class="c-columns__inner flex flex-wrap justify-between ml:w-4/5 s:w-[98%] ml:max-w-1280 m-auto">

        <?php if ( wp_is_mobile() ) {
            $cat_posts = get_posts(array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'orderby' => 'rand',
                'order' => 'DESC'
            ));
        } else {
            $cat_posts = get_posts(array(
                'post_type' => 'post',
                'posts_per_page' => 9,
                'orderby' => 'rand',
                'order' => 'DESC'
            ));
        };
            global $post;
            if ( $cat_posts ) : foreach ( $cat_posts as $post ) : setup_postdata( $post );
        ?>

        <a href="<?php echo get_permalink(); ?>" class="p-site__column c-column">
            <img class="lazyload" data-src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" width="400" height="250" />
        </a>

        <?php endforeach; endif; wp_reset_postdata(); ?>

    </div>
</div>