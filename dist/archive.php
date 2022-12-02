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

                <section class="l-section p-site ml:-mt-20">
                    <div class="l-section__inner flex flex-col">

                        <div class="c-headline mb-12 s:mb-6">
                            <h2>
                                <?php if ( is_category("standard") ) : ?>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard.png" alt="スタンダードプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="650" height="200" />
                                </picture>
                                <?php elseif ( is_category("pro") ) : ?>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro.png" alt="プロフェッショナルプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="800" height="200" />
                                </picture>
                                <?php elseif ( is_category("light") ) : ?>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light.png" alt="お任せライトプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="750" height="200" />
                                </picture>
                                <?php elseif ( is_category("demo") ) : ?>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-demo-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-demo-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-demo.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-demo.png" alt="デモサイト" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="400" height="200" />
                                </picture>
                                <?php endif; ?>
                            </h2>
                        </div>

                        <?php if ( is_tag() ) : ?>
                        <div class="flex justify-center w-80 m-auto mb-8 p-8 rounded-25 bg-sub text-white">
                            <h2><?php single_term_title(); ?>&#65306;</h2>
                            <p><?php echo $wp_query->found_posts;?>件</p>
                        </div>
                        <?php endif; ?>

                        <div class="c-columns flex ml:mb-16 s:mb-8">
                            <div class="c-columns__inner flex flex-wrap justify-between ml:w-4/5 s:w-[98%] ml:max-w-1280 m-auto">

                                <?php while (have_posts()) : the_post(); ?>

                                <a href="<?php echo get_permalink(); ?>" class="p-site__column c-column">
                                    <img class="lazyload" data-src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="400" height="200" />
                                </a>

                                <?php endwhile; ?>

                            </div>
                        </div>

                        <?php
                            if ( function_exists( 'pagination' ) ) :
                            pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
                            endif;
                        ?>

                    </div>
                </section><!-- .p-site -->
                
                <?php get_template_part('./parts/scroller'); ?>

            </div><!-- .l-main__inner -->
        </main><!-- .l-main -->

        <?php get_template_part('./parts/footer'); ?>

    </div><!-- .l-wrapper -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/archive.js" type="module" defer></script>

    <?php get_footer(); ?>

</body>
</html>