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
            <div class="l-main__inner">

            <section class="l-section p-plan ml:mb-24">
                    <div class="l-section__inner">
                        <div class="c-headline ml:mt-[-3rem] mb-12 s:mb-5">
                            <h1>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan.png" alt="選べる３つのプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="700" height="200" />
                                </picture>
                            </h1>
                        </div>
                        <?php get_template_part('./parts/plan-columns'); ?>
                    </div>
                </section><!-- .p-plan -->

                <div class="l-container flex-col ml:mb-12 s:mb-8 text-center">
                    <div class="c-campaign max-w-1000 m-auto ml:mb-16 s:m-8 p-16 s:px-4 s:py-10 rounded-25 bg-sub text-white text-center">
                        <p class="mb-8 text-7xl s:text-5xl">期間限定特別価格で<br class="ml:hidden">ご案内中！</p>
                        <input id="cc-check" class="c-campaign__check hidden" type="checkbox">
                        <label class="c-campaign__label text-3xl" for="cc-check">▼</label>
                        <div class="c-campaign__content text-[2rem]">
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
                </div>

                <section id="standard" class="l-section p-plan-ex">
                    <div class="l-section__inner flex flex-col w-full">
                        <div class="c-headline m-auto mb-12 s:mb-5">
                            <h1>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-standard.png" alt="スタンダードプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="650" height="200" />
                                </picture>
                            </h1>
                        </div>
                        <div class="p-plan-ex__content">
                            <h3 class="p-plan-ex__title">迷ったらこれでOK！<br>お洒落なサイトも<br class="ml:hidden">可愛いサイトも！</h3>
                            <div class="p-plan-ex__images">
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-04.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-04.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-05.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-05.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-12.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-12.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                            </div>
                            <div class="p-plan-ex__text">
                                <div>
                                    <h3>各種契約のサポート</h3>
                                    <p>Web初心者には分かりづらいサーバー・ドメインの契約もプラス料金なしで徹底的にサポートいたします。ビデオチャットなどを利用してサポートいたしますので、Webでのお手続きが苦手な方も安心してお手続可能です！</p>
                                </div>
                                <div>
                                    <h3>圧倒的低価格で理想のデザイン</h3>
                                    <p>一般的なWeb制作会社の50%程度の料金でクオリティの高いWebサイトを制作できます！もちろん料金が安いからと言って一切の妥協はありません！迅速丁寧をモットーにクライアントにご満足いただけるWebサイトを納品いたします！</p>
                                </div>
                                <div>
                                    <h3>納品後もデザインの変更が楽チン</h3>
                                    <p>デザイントマトでは納品後もお客様自身でデザインの変更がしやすい、保守管理性に優れたWebサイトを制作いたします。トップページの画像や文章などの変更も簡単にすることができるので管理に係る費用を削減できます！</p>
                                </div>
                            </div>
                            <a href="<?php echo home_url(); ?>/category/demo/standard/" class="c-button m-auto bg-main">スタンダードプランで<br class="ml:hidden">作れるサイトを見る</a>
                        </div>
                    </div>
                </section><!-- #standard -->

                <section id="pro" class="l-section p-plan-ex">
                    <div class="l-section__inner flex flex-col w-full">
                        <div class="c-headline m-auto mb-12 s:mb-5">
                            <h1>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-pro.png" alt="プロフェッショナルプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="800" height="200" />
                                </picture>
                            </h1>
                        </div>
                        <div class="p-plan-ex__content">
                            <h3 class="p-plan-ex__title">どんなデザインも思うがまま！<br>自由なデザインで<br class="ml:hidden">他社と差をつける！</h3>
                            <div class="p-plan-ex__images">
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-site-tzpcom.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-site-tzpcom.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-site-tzpjp.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-site-tzpjp.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-site-39boubiroku.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-site-39boubiroku.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                            </div>
                            <div class="p-plan-ex__text">
                                <div>
                                    <h3>あなたの思い描く理想のデザイン</h3>
                                    <p>一切の枠に囚われない完全に理想どおりのWebサイトを構築いたします！YouTuber、イラストレーターなどのクリエイター様や他社と差をつけたい企業様におすすめのプランです！オリジナルデザインのため時間をかけてしっかりと作り上げていきます！</p>
                                </div>
                                <div>
                                    <h3>トータルブランディングも！</h3>
                                    <p>企業ロゴや名刺、販促チラシなどDTPデザインも合わせたトータルブランディングも受け付けております。当サイトで使用しているロゴや画像は全てデザイントマトが制作したものです。デザイン制作も自信を持ってご案内しております。</p>
                                </div>
                                <div>
                                    <h3>何度でもお打ち合わせ可能！</h3>
                                    <p>理想どおりのWebサイトが完成するまで何度でもお打ち合わせが可能です！イメージを練る段階から綿密に打ち合わせを行い、限りなく理想に近いWebサイトに近づけていきます。納品後も特別料金にて改修や保守管理を行います！</p>
                                </div>
                            </div>
                            <a href="<?php echo home_url(); ?>/category/demo/pro/" class="c-button m-auto bg-main">プロフェッショナルプランで<br class="ml:hidden">作れるサイトを見る</a>
                        </div>
                    </div>
                </section><!-- #pro -->

                <section id="light" class="l-section p-plan-ex">
                    <div class="l-section__inner flex flex-col w-full">
                        <div class="c-headline m-auto mb-12 s:mb-5">
                            <h1>
                                <picture>
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light-sp.webp" media="(max-width: 599px)" type="image/webp" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light-sp.png" media="(max-width: 599px)" />
                                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light.webp" type="image/webp" />
                                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-plan-light.png" alt="お任せライトプラン" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="650" height="200" />
                                </picture>
                            </h1>
                        </div>
                        <div class="p-plan-ex__content">
                            <h3 class="p-plan-ex__title">圧倒的低価格で作る、<br>圧倒的お洒落で<br class="ml:hidden">管理しやすいWebサイト！</h3>
                            <div class="p-plan-ex__images">
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-06.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-06.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-07.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-07.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                                <div>
                                    <picture>
                                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-11.webp" type="image/webp" />
                                        <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/ss/ss-demo-11.jpg" alt="サイトイメージ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="350" height="200" />
                                    </picture>
                                </div>
                            </div>
                            <div class="p-plan-ex__text">
                                <div>
                                    <h3>丸投げOK！煩わしい手続きも不要</h3>
                                    <p>専用のデモサイトからお好きなデザインをお選びいただくだけで簡単にWebサイトを作ることができます！他社と圧倒的に差をつけるお洒落なデザインも十分に制作可能です！</p>
                                </div>
                                <div>
                                    <h3>圧倒的低価格、圧倒的お洒落</h3>
                                    <p>ライトプランだからと言って他社に劣るようなデザインではありません。低価格で実現する圧倒的にお洒落なサイトを構築可能です！料金を抑えて、お洒落なWebサイト持ちたい方や、ビジネスをスタートさせたばかりの方にも十分にお勧めできるプランです！</p>
                                </div>
                                <div>
                                    <h3>ブログやお知らせの投稿も楽チン</h3>
                                    <p>既存のブログサービス(Amebaブログ等)を使用するような感覚で記事の投稿ができます。アフィリエイトリンクなども制限なく貼り付けることができるので、アフィリエイトブログを始めたい方にもおすすめです！</p>
                                </div>
                            </div>
                            <a href="<?php echo home_url(); ?>/category/demo/light/" class="c-button m-auto bg-main">お任せライトプランで<br class="ml:hidden">作れるサイトを見る</a>
                        </div>
                    </div>
                </section><!-- #light -->

                <?php get_template_part('./parts/scroller'); ?>

            </div><!-- .l-main__inner -->
        </main><!-- .l-main -->

        <?php get_template_part('./parts/footer'); ?>

    </div><!-- .l-wrapper -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/page.js" type="module" defer></script>

    <?php get_footer(); ?>

</body>
</html>