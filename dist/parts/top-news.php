<div class="c-top-news ml:flex items-center w-full max-w-1000 m-auto py-4 text-white text-center">
        <p class="c-top-news__header ml:w-[30%] ml:mr-6 py-4 ml:border-r-[3px] border-white border-solid text-3xl">お知らせ</p>

        <?php
            $cat_posts = get_posts(array(
                'post_type' => 'news',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC'
            ));
            global $post;
            if ($cat_posts) : foreach ($cat_posts as $post) : setup_postdata($post);
        ?>

        <a href="<?php echo get_permalink(); ?>" class="c-link-wave flex s:w-4/5">
            <h2 class="c-top-news__title relative truncate"><?php the_title(); ?></h2>
        </a>

        <?php endforeach;endif;wp_reset_postdata(); ?>

    </div><!-- c-top-news -->
