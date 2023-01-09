<?php get_header(); ?>
<body id="home">

    <div class="l-wrapper w-full">
        
    <?php get_template_part('./parts/loader'); ?>
    
    <?php get_template_part('./parts/fix-header'); ?>

    <?php get_template_part('./parts/menu'); ?>

    <?php get_template_part('./parts/searchform'); ?>

    <?php get_template_part('./parts/soda'); ?>

            <main class="l-main">
                <div class="l-main__inner">

                    <?php get_template_part('./parts/infomation-bar'); ?>

                    <?php get_template_part('./parts/main-visual'); ?>

                    <?php get_template_part('./parts/slider'); ?>

                    <div class="l-container bg-main">
                        <?php get_template_part('./parts/top-news'); ?>
                    </div><!-- NEWS AREA -->

                    <div class="l-container bg-main">
                        <div class="p-top-banner flex s:flex-col gap-3 ml:max-w-800 p-6 m-auto">
                            <div class="c-banner s:mb-6">
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-support-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-support-sp.jpg" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-support.webp" type="image/webp" />
                                    <img class="lazyload w-full h-full object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-support.jpg" alt="Web初心者でも安心スタート!!" width="400" height="100" />
                                </picture>
                            </div>
                            <div class="c-banner">
                                <a href="<?php echo home_url(); ?>/estimate/">
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-estimate-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-estimate-sp.jpg" media="(max-width: 599px)" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-estimate.webp" type="image/webp" />
                                        <img class="lazyload w-full h-full object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-estimate.jpg" alt="無料のお見積もりはコチラをクリック！" width="400" height="100" />
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <script type="module" async>if(innerWidth<innerHeight&&innerWidth<599){let e=document.querySelectorAll(".c-banner");let w=e[0].clientWidth;let h=(w*.2916)+"px";for(let i=0;i<e.length;i++){e[i].style.height=h;};}</script>
                    </div><!-- BANNER AREA -->

                    <div class="l-container">
                        <?php get_template_part('./parts/ink'); ?>
                    </div><!-- INK AREA -->

                    <section class="l-section p-plan ml:mb-24">
                        <div class="l-section__inner">
                            <div class="c-headline ml:mt-[-3rem] mb-12 s:mb-5">
                                <h2>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-sp.png" media="(max-width: 599px)" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan.png" alt="選べる３つのプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="700" height="200" />
                                    </picture>
                                </h2>
                            </div>

                            <?php get_template_part('./parts/plan-columns'); ?>

                        </div>
                    </section><!-- .p-plan -->

                    <div class="l-container flex-col ml:mb-24 s:mb-8 text-center">
                        <div class="c-campaign max-w-1000 m-auto ml:mb-16 s:m-8 p-16 s:px-4 s:py-10 rounded-25 bg-sub text-white text-center">
                            <p class="mb-8 text-7xl s:text-5xl">期間限定特別価格で<br class="ml:hidden">ご案内中！</p>
                            <input id="cc-check" class="c-campaign__check hidden" type="checkbox">
                            <label class="c-campaign__label text-3xl" for="cc-check">▼</label>
                            <div class="c-campaign__content">
                                <div class="h-8"></div>
                                <p>制作料金最大50%OFFの<br class="ml:hidden">キャンペーン実施中です！</p>
                                <p class="mb-8">¥29,880~からHP制作を行えます！</p>
                                <div class="c-balloon">
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.jpg" alt="美少女ちゃん" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="50" height="50" />
                                    </picture>
                                    <p class="bg-white text-[#ff9c89]">まずはお気軽に<br class="ml:hidden">お問い合わせ下さい！<span class="bg-white"></span></p>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo home_url(); ?>/plan/" class="c-button btn-xl m-auto bg-main">３つのプランを見る</a>
                    </div>

                    <div class="l-container">
                        <?php get_template_part('./parts/wave'); ?>
                    </div><!-- WAVE AREA -->
                    <section class="l-section p-site ml:pt-12 s:pt-4 bg-main">
                        <div class="l-section__inner flex flex-col">

                            <div class="c-headline mb-12 s:mb-6">
                                <h2>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-site-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-site-sp.png" media="(max-width: 599px)" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-site.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-site.png" alt="どんなサイトが作れるの？" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="800" height="200" />
                                    </picture>
                                </h2>
                            </div>

                            <?php get_template_part('./parts/site-columns'); ?>

                            <div class="c-balloon vertical balloon-xl m-auto mb-16">
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.jpg" alt="美少女ちゃん" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="75" height="75" />
                                </picture>
                                <p class="bg-sub text-white text-center">様々なニーズに合わせて<br class="ml:hidden">最適なデザインを提案します！<span class="bg-sub"></span></p>
                            </div>

                        </div>
                    </section><!-- .p-site -->
                    <section class="l-section p-pickup bg-main">
                        <div class="l-section__inner flex flex-col">

                            <div class="c-headline mb-12 s:mb-5">
                                <h2>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-pickup-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-pickup-sp.png" media="(max-width: 599px)" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-pickup.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-pickup.png" alt="読んで欲しいコンテンツ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="650" height="200" />
                                    </picture>
                                </h2>
                            </div>

                            <?php get_template_part('./parts/pickup-columns'); ?>

                        </div>
                    </section><!-- .p-pickup -->
                    <section class="l-section p-flow bg-main s:px-4">
                        <div class="l-section__inner flex flex-col">

                            <div class="c-headline mb-12 s:mb-5">
                                <h2>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-flow-g-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-flow-g-sp.png" media="(max-width: 599px)" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-flow-g.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-flow-g.png" alt="ホームページ制作の流れ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="650" height="200" />
                                    </picture>
                                </h2>
                            </div>

                            <div class="p-flow__content max-w-1000 m-auto ml:mb-24 s:mb-12 text-center text-white">
                                <h3>ヒアリング</h3>
                                <p>"どんなサイトにしたいか" <br class="ml:hidden">"どんな機能を追加したいか"<br>などの打ち合わせを行います！</p>

                                <div class="p-flow__arrow"></div>
                                
                                <h3>サイト制作</h3>
                                <p>ヒアリングした情報をもとに<br class="ml:hidden">サイトを制作していきます！</p>

                                <div class="p-flow__arrow"></div>

                                <h3>サイト公開</h3>
                                <p>最終チェックを行い<br class="ml:hidden">サイトを公開します。</p>

                                <div class="p-flow__arrow"></div>

                                <h3>アフターフォロー</h3>
                                <p>運営方法をご説明いたします！<br>納品後もフォローいたします！</p>
                            </div>

                            <a href="/" class="c-button btn-xl m-auto mb-16 bg-sub">制作フローを詳しく見る</a>

                        </div>
                    </section><!-- .p-flow -->
                    <div class="l-container">
                        <?php get_template_part('./parts/ink'); ?>
                    </div><!-- INK AREA -->

                    <section class="l-section p-news-blog ml:mb-24">
                        <div class="l-section__inner">
                            <div class="c-headline ml:mt-[-3rem] mb-12 s:mb-8">
                                <h2>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news-blog-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news-blog-sp.png" media="(max-width: 599px)" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news-blog.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-news-blog.png" alt="お知らせ・ブログ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="600" height="200" />
                                    </picture>
                                </h2>
                            </div>

                            <div class="p-news-blog__switcher flex justify-center ml:mb-8 s:mb-6 text-center">
                                <button class="p-news-blog__button js-nb-switcher select">お知らせ</button>
                                <button class="p-news-blog__button js-nb-switcher">ブログ</button>
                            </div>

                            <div class="p-news-blog__content js-nb-container relative mb-16">
                                <?php get_template_part('./parts/news-blog'); ?>
                            </div>

                        </div>
                    </section><!-- .p-news-blog -->

                    <section class="l-section p-creator ml:mb-24">
                        <div class="l-section__inner">
                            <div class="c-headline ml:mt-[-3rem] ml:mb-12 s:mb-8">
                                <h2>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator-sp.png" media="(max-width: 599px)" />
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator.png" alt="制作クリエイター" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="600" height="200" />
                                    </picture>
                                </h2>
                            </div>

                            <div class="p-creator__content flex s:flex-col s:w-[94%] max-w-800 m-auto ml:mb-24 s:mb-12 p-12 s:px-4 rounded-25">
                                <div class="ml:col-3 flex items-center s:w-3/5 s:h-3/5 s:m-auto s:mb-8">
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.webp" type="image/webp" />
                                        <img class="lazyload w-auto h-auto object-cover rounded-full" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.jpg" alt="美少女ちゃん" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="200" height="200" />
                                    </picture>
                                </div>
                                <div class="ml:col-9 ml:pl-10 ml:text-3xl s:text-2xl s:text-center ml:leading-snug s:leading-relaxed">
                                    <div class="flex s:flex-col ml:items-start mb-5">
                                        <h3 class="ml:pr-8 ml:pl-2 s:mb-3 text-5xl">テツカ ヒロキ</h3>
                                        <?php get_template_part('./parts/sns-link'); ?>
                                    </div>
                                    <div class="mb-5 ml:text-4xl s:text-3xl">
                                        <p class="s:hidden">- Design Tomato代表 / Webエンジニア -</p>
                                        <p class="ml:hidden">Design Tomato代表<br>Webエンジニア</p>
                                    </div>
                                    <p class="mb-5">栃木県宇都宮市出身</p>
                                    <p class="mb-5">幼い頃よりパソコンを使うのが<br class="ml:hidden">好きだったこともあり、<br>プログラミングに興味を持ち<br class="ml:hidden">独学でWeb制作を開始。<br>Wordpressテーマを複数制作し、<br>現在４サイトを運営中！</p>
                                    <p class="mb-5">趣味でやっているイラストのおかげで<br class="ml:hidden">デザイン感が養われ、<br>サイト制作のデザイン面も<br class="ml:hidden">担当しています。<br>イラスト制作ツールを<br class="ml:hidden">10年以上使っていることもあり、<br>サイト素材などの制作も得意です！</p>
                                    <div><a href="<?php echo home_url(); ?>/profile/">＞ <span>詳しく見る</span></a><a href="<?php echo home_url(); ?>/about/" class="ml-10">＞ <span>事業者情報</span></a></div>
                                </div>
                            </div>

                        </div>
                    </section><!-- .p-creator -->

                    <?php get_template_part('./parts/scroller'); ?>
                    
                </div><!-- .l-main__inner -->
            </main><!-- .l-main -->

            <?php get_template_part('./parts/footer'); ?>

    </div><!-- .l-wrapper -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js" type="module" defer></script>

    <?php get_footer(); ?>

</body>
</html>