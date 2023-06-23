<?php get_header(); ?>
<body id="single">

    <div class="l-wrapper w-full">

    <?php get_template_part('./parts/soda'); ?>

    <?php get_template_part('./parts/loader'); ?>

    <?php get_template_part('./parts/infomation-bar'); ?>

    <?php get_template_part('./parts/menu'); ?>

    <?php get_template_part('./parts/header'); ?>

    <?php get_template_part('./parts/fix-header'); ?>

    <?php get_template_part('./parts/searchform'); ?>

        <main class="l-main">
            <div class="l-main__inner">
                <article class="l-article flex ml:mb-24 ml:mx-8 s:mb-6">
                    <div class="p-content relative w-full max-w-1200 m-auto ml:-mt-10 ml:p-28 s:p-4">
                        <div class="p-content__head">
                            <div class="flex items-center">
                                <time class="flex flex-col p-1 ml:pr-4 s:pr-2 border-r text-2xl s:text-xl text-center" datatime="<?php the_time('Y-m-d'); ?>">
                                    <span><?php the_time('Y'); ?></span>
                                    <span class="ml:text-3xl"><?php the_time('m/d'); ?></span>
                                </time>
                                <h1 class="p-1 pl-4 ml:text-5xl s:text-[1.8rem]">
                                    <?php the_title(); ?>
                                </h1>
                            </div>
                        </div>
                        <div class="p-content__thumbnail flex w-full mb-12">
                            <?php if ( has_post_thumbnail() ): ?>
                            <img class="w-[90%] h-auto m-auto mt-12 rounded-25 object-cover" src="<?php if ( is_mobile() ) { the_post_thumbnail_url( "medium" ); } else { the_post_thumbnail_url( "full" ); } ?>" alt="サムネイル" width="1000" height="800" />
                            <?php endif; ?>
                        </div><!-- .p-article__thumbnail -->
                        <div class="w-[90%] s:w-full m-auto">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article><!-- .l-article -->
                
                <?php get_template_part('./parts/scroller'); ?>

            </div><!-- .l-main__inner -->
        </main><!-- .l-main -->

        <?php get_template_part('./parts/footer'); ?>

    </div><!-- .l-wrapper -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/single.js" type="module" defer></script>
    <script>const imagesAnimation=()=>{let t=document.querySelectorAll(".p-content .lazyload");for (let e=0;e < t.length;e++) "string"==typeof t[e].getAttribute("src") && t[e].classList.add("a-fadeUp")};addEventListener("scroll",imagesAnimation);</script>

    <?php get_footer(); ?>

</body>
</html>