<?php get_header(); ?>
<body id="archive">

    <div class="l-wrapper w-full">

    <?php get_template_part('./parts/loader'); ?>

    <?php get_template_part('./parts/infomation-bar'); ?>

    <?php get_template_part('./parts/header'); ?>

    <?php get_template_part('./parts/fix-header'); ?>

    <?php get_template_part('./parts/menu'); ?>

    <?php get_template_part('./parts/searchform'); ?>

    <?php get_template_part('./parts/soda'); ?>

        <main class="l-main mb-16">
            <div class="l-main__inner">

                <section class="l-section p-archive ml:-mt-20">
                    <div class="l-section__inner flex flex-col">

                        <div class="c-headline mb-12 s:mb-6">
                            <h2>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news.png" alt="お知らせ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                </picture>
                            </h2>
                        </div>

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
                                    <img class="lazyload" data-src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                    <?php else: ?>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/tmt-thumb-default.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/tmt-thumb-default.png" alt="サムネイル" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>
                            </a>

                        <?php endwhile; ?>

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