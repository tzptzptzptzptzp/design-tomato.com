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
                <div class="c-headline ml:mt-[-3rem] m-auto mb-16 s:mb-5">
                    <h1>
                        <picture>
                            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-about-sp.webp" media="(max-width: 599px)" type="image/webp" />
                            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-about-sp.png" media="(max-width: 599px)" />
                            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-about.webp" type="image/webp" />
                            <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-about.png" alt="事業者情報" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="450" height="200" />
                        </picture>
                    </h1>
                </div>

                <article class="l-article flex ml:mb-24 ml:mx-8 s:mb-6">
                    <div class="p-content relative w-full max-w-1200 m-auto ml:p-28 s:p-4">

                        <div class="p-content__head flex items-center justify-center">
                            <div class="text-center" style="width:100%;border-bottom:1px solid rgba(0,0,0,.3)">
                                <p style="margin-bottom:0;font-size:5rem;line-height:6.5rem">About</p>
                                <p style="line-height:0">事業者情報</p>
                                <p class="">DesignTomato<br class="ml:hidden">ホームページにお越しいただき<br class="ml:hidden">ありがとうございます。<br>DesignTomatoについて<br class="ml:hidden">ご紹介させていただきます。</p>
                            </div>
                        </div>

                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>DesignTomatoについて</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>DesignTomatoはホームページ制作やCMSの導入、保守管理業務をはじめとしたWeb関連の業務や、ロゴや名刺などのデザインの制作・ブランディングを行なっております。また、企業PRなどの動画制作も行なっております。</p>
                                <p>クライアントに寄り添いながら、理想とするWebサイトを作り上げます。個人でイラストの制作を行っていることもあり、ロゴの制作やサイトで使用する画像素材の作成にも自信があります。より理想とするイメージに近づけることができます。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p class="s:text-4xl">概要</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <div class="flex s:flex-col">
                                    <p>名称</p>
                                    <p class="s:hidden">DesignTomato / デザイントマト</p>
                                    <p class="ml:hidden">DesignTomato<br>デザイントマト</p>
                                </div>
                                <div class="flex s:flex-col">
                                    <p>代表</p>
                                    <p>テツカ ヒロキ</p>
                                </div>
                                <div class="flex s:flex-col">
                                    <p>事業形態</p>
                                    <p>個人事業主</p>
                                </div>
                                <div class="flex s:flex-col">
                                    <p>連絡先</p>
                                    <p>お問い合わせから<br class="ml:hidden">ご連絡ください</p>
                                </div>
                                <div class="flex s:flex-col">
                                    <p>所在地</p>
                                    <p>福島県いわき市</p>
                                </div>
                                <div class="flex s:flex-col">
                                    <p>事業内容</p>
                                    <p>Web・サービス開発<br>トータルブランディング<br>グラフィックデザイン<br>DTPデザイン<br>etc...</p>
                                </div>
                            </div>
                        </div>
                        <style>.p-content .custom-columns * {margin:0}.custom-columns{display:flex;width:100%;padding:5rem 0}.custom-columns:not(:last-of-type){border-bottom:1px solid rgba(0,0,0,.3)}.custom-title{display:flex;align-items:center;width:25%}.custom-title p{padding-left:7px;border-left:3px solid var(--font-color)}.custom-ex{width:75%}.custom-ex p:not(:last-child){margin-bottom:3rem;}.custom-ex p.s\:hidden{margin-bottom:0}.custom-ex .flex p:first-child{width:25%;margin-bottom:2rem!important;text-align:center}@media screen and (max-width:599px){.custom-columns{flex-direction:column;}.custom-title{width:100%;margin-bottom:2rem!important;text-align:center}.custom-title div, .custom-ex{width:100%}.custom-title p{border:none}.custom-ex .flex p{width:100%!important;margin-bottom:2rem;text-align: center}.custom-ex .flex p:first-child{margin-bottom:0rem!important;font-size:1.2em}}</style>

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