<?php get_header(); ?>
<body id="page">

    <div class="l-wrapper w-full">

    <?php get_template_part('./parts/loader'); ?>

    <?php get_template_part('./parts/infomation-bar'); ?>

    <?php get_template_part('./parts/header'); ?>

    <?php get_template_part('./parts/fix-header'); ?>

    <?php get_template_part('./parts/menu'); ?>

    <?php get_template_part('./parts/searchform'); ?>

    <?php get_template_part('./parts/soda'); ?>

        <main class="l-main">
            <div class="l-main__inner flex flex-col">

                <?php get_template_part('./parts/page-head'); ?>

                <article class="l-article flex ml:mb-24 ml:mx-8 s:mb-6">
                    <div class="p-content relative w-full max-w-1200 m-auto ml:-mt-10 ml:p-28 s:p-4">
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

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/page.js" type="module" defer></script>
    <script>const imagesAnimation=()=>{let t=document.querySelectorAll(".p-content .lazyload");for (let e=0;e < t.length;e++) "string"==typeof t[e].getAttribute("src") && t[e].classList.add("a-fadeUp")};addEventListener("scroll",imagesAnimation);</script>

    <?php get_footer(); ?>

</body>
</html>