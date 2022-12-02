<?php get_header(); ?>
<body id="search">

    <div class="l-wrapper w-full">

    <?php get_template_part('./parts/soda'); ?>

    <?php get_template_part('./parts/loader'); ?>

    <?php get_template_part('./parts/infomation-bar'); ?>

    <?php get_template_part('./parts/menu'); ?>

    <?php get_template_part('./parts/header'); ?>

    <?php get_template_part('./parts/fix-header'); ?>

    <?php get_template_part('./parts/searchform'); ?>

        <main class="l-main mb-16">
            <div class="l-main__inner">

                <section class="l-section p-archive">
                    <div class="l-section__inner flex flex-col">

                        <div class="flex justify-center w-80 m-auto mb-8 p-8 rounded-25 bg-sub text-white">
                            <h2><?php the_search_query(); ?>&#65306;</h2>
                            <p><?php echo $wp_query->found_posts;?>件</p>
                        </div>

                        <?php if (have_posts()): ?>

                        <div class="flex flex-col w-full max-w-1000 m-auto s:px-4">
                        <?php while (have_posts()) : the_post(); ?>

                            <a href="<?php echo get_permalink(); ?>" class="p-archive__post c-post">
                                <div class="c-post__head">
                                    <h2 class="c-post__title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="c-post__excerpt">
                                    <?php
                                        if ( wp_is_mobile() ) : $count = 39; else : $count = 139; endif;
                                        if ( mb_strlen( $post->post_content, 'UTF-8' ) > $count ) {
                                        $content = mb_substr( strip_tags( $post->post_content ), 0, $count, 'UTF-8' );
                                        echo $content . '…';
                                        } else {
                                        echo strip_tags( $post->post_content );
                                        }
                                    ?>
                                    </p>
                                    <time class="c-post__time" datatime="<?php the_time('Y-m-d'); ?>"><?php the_time('y/m/d'); ?></time>
                                </div>
                                <?php if ( !wp_is_mobile() ) :?>
                                <div class="c-post__thumbnail">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <img class="lazyload" data-src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    <?php else: ?>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/tmt-thumb-default.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/tmt-thumb-default.png" alt="デフォルトサムネイル" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </a>

                            <?php endwhile; ?>

                            <?php else : ?>

                            <div class="text-white text-center">
                                <h2>"<?php the_search_query(); ?>"はありませんでした。</h2>
                            </div>

                        <?php endif; ?>

                        </div>

                        <?php
                            if ( function_exists( 'pagination' ) ) :
                            pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
                            endif;
                        ?>

                    </div>
                </section><!-- .p-archive -->

                <?php get_template_part('./parts/scroller'); ?>

            </div><!-- .l-main__inner -->
        </main><!-- .l-main -->

        <?php get_template_part('./parts/footer'); ?>

    </div><!-- .l-wrapper -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/archive.js" type="module" defer></script>

    <?php get_footer(); ?>

</body>
</html>