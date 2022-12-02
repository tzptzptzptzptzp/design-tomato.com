<?php get_header(); ?>
<body id="404">

    <div class="l-wrapper w-full">

    <?php get_template_part('./parts/loader'); ?>

    <?php get_template_part('./parts/infomation-bar'); ?>

    <?php get_template_part('./parts/header'); ?>

    <?php get_template_part('./parts/fix-header'); ?>

    <?php get_template_part('./parts/menu'); ?>

    <?php get_template_part('./parts/searchform'); ?>

    <?php get_template_part('./parts/soda'); ?>

        <main class="l-main mb-20">
            <div class="l-main__inner">

                <section class="l-section p-archive">
                    <div class="l-section__inner flex flex-col">

                    <div class="m-auto p-4 text-white text-center">
                        <h2 class="mb-8 text-7xl">404</h2>
                        <p>ページが見つかりません。</p>
                    </div>

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