<footer>
    <section class="l-section ml:mb-24 s:mb-4">
        <div class="l-section__inner flex flex-col">

            <div class="c-balloon vertical balloon-xl w-[90%] max-w-800 m-auto ml:mb-16 s:mb-8">
                <picture>
                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.webp" type="image/webp" />
                    <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.jpg" alt="美少女ちゃん" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="50" height="50" />
                </picture>
                <p class="w-full ml:!p-16 !rounded-20 bg-sub text-white text-center leading-snug">制作に関するご相談から、<br class="ml:hidden">Webに関するご不明点など<br>お気軽にご相談ください！<span class="bg-sub"></span></p>
            </div>

            <a href="<?php echo home_url(); ?>/check/" class="c-button btn-xl w-[300px] m-auto mb-16 bg-main">お問い合わせ</a>

            <div class="p-line-contact flex s:flex-col ml:w-full s:w-[94%] max-w-800 m-auto p-12 s:px-4 s:pb-4 bg-sub rounded-25 text-white text-center">
                <div class="ml:col-6">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6em" height="6em" stroke="white" fill="white" viewBox="0 0 448 512"><path d="M272.1 204.2v71.1c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.1 0-2.1-.6-2.6-1.3l-32.6-44v42.2c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.8 0-3.2-1.4-3.2-3.2v-71.1c0-1.8 1.4-3.2 3.2-3.2H219c1 0 2.1.5 2.6 1.4l32.6 44v-42.2c0-1.8 1.4-3.2 3.2-3.2h11.4c1.8-.1 3.3 1.4 3.3 3.1zm-82-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 1.8 1.4 3.2 3.2 3.2h11.4c1.8 0 3.2-1.4 3.2-3.2v-71.1c0-1.7-1.4-3.2-3.2-3.2zm-27.5 59.6h-31.1v-56.4c0-1.8-1.4-3.2-3.2-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 .9.3 1.6.9 2.2.6.5 1.3.9 2.2.9h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.7-1.4-3.2-3.1-3.2zM332.1 201h-45.7c-1.7 0-3.2 1.4-3.2 3.2v71.1c0 1.7 1.4 3.2 3.2 3.2h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2V234c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2v-11.4c-.1-1.7-1.5-3.2-3.2-3.2zM448 113.7V399c-.1 44.8-36.8 81.1-81.7 81H81c-44.8-.1-81.1-36.9-81-81.7V113c.1-44.8 36.9-81.1 81.7-81H367c44.8.1 81.1 36.8 81 81.7zm-61.6 122.6c0-73-73.2-132.4-163.1-132.4-89.9 0-163.1 59.4-163.1 132.4 0 65.4 58 120.2 136.4 130.6 19.1 4.1 16.9 11.1 12.6 36.8-.7 4.1-3.3 16.1 14.1 8.8 17.4-7.3 93.9-55.3 128.2-94.7 23.6-26 34.9-52.3 34.9-81.5z"/></svg>
                    </div>
                    <h2 class="text-4xl my-8">LINEからのお問い合わせも<br>受け付けております！</h2>
                    <a href="https://page.line.me/?accountId=180rmidp" class="c-button m-auto mb-8 bg-main">LINEを開く</a>
                    <div class="flex s:hidden items-center justify-center mb-2">
                        <p>スマホ版はコチラから ＞</p>
                        <img class="lazyload c-qrcode ml-3 object-cover rounded-md cursor-pointer" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/qr.png" width="25px" height="25px" alt="QRコード" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                    </div>
                    <p class="s:hidden text-lg">※QRコードクリックで拡大します</p>
                    <div class="c-qrcode flex s:hidden fixed top-0 left-0 z-999 invisible w-full h-full opacity-0 bg-black/25 duration-300">
                        <img class="lazyload m-auto object-cover rounded-md" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/qr.png" width="78px" height="78px" alt="QRコード" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                    </div>
                    <script type="module">let q=document.querySelectorAll(".c-qrcode");q[0].addEventListener("click",function(){q[1].classList.add("active");});q[1].addEventListener("click",function(){q[1].classList.remove("active");});</script>
                </div>
                <div class="ml:col-6">
                    <p class="mb-8 text-4xl">-気軽にLINEで問い合わせ-</p>
                    <div class="flex flex-col mb-8 px-8 text-font text-2xl">
                        <div class="c-balloon mr-auto mb-2">
                            <picture>
                                <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg" alt="クライアント" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="50" height="50" />
                            </picture>
                            <p class="!p-4 bg-white">サイト制作でお聞きしたいこと…<span class="bg-white"></span></p>
                        </div>
                        <div class="c-balloon flex-row-reverse ml-auto mb-2">
                            <picture>
                                <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.webp" type="image/webp" />
                                <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.jpg" alt="美少女ちゃん" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="50" height="50" />
                            </picture>
                            <p class="!p-4 bg-white">お問い合わせありがとうござい…<span class="bg-white"></span></p>
                        </div>
                        <div class="c-balloon mr-auto">
                            <picture>
                                <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/client.jpg" alt="クライアント" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="50" height="50" />
                            </picture>
                            <p class="!p-4 bg-white">こんなサイトを作りたいのです…<span class="bg-white"></span></p>
                        </div>
                    </div>
                    <p class="px-5 py-14 bg-main rounded-25 s:text-3xl leading-normal">ご要望にあった最適な<br class="ml:hidden">ご提案をいたします！</p>
                </div>
            </div>
        </div>
    </section><!-- .p-creator -->

    <div class="l-container">
        <svg class="waves" width="100%" height="78px" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(102,238,170,0.7"></use>
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(102,238,170,0.5)"></use>
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(102,238,170,0.3)"></use>
            <use xlink:href="#gentle-wave" x="48" y="7" fill="var(--sub-color)"></use>
            </g>
        </svg>
    </div><!-- WAVE AREA -->
    <section class="l-section flex py-12 bg-sub">
        <div class="l-section__inner flex s:flex-col gap-2 w-full max-w-1200 m-auto text-white text-center">
            <div class="w-full s:mb-8">
                <picture>
                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-logo-title-sp.webp" type="image/webp" />
                    <img class="lazyload w-full s:w-4/5 h-auto mb-3 object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-logo-title-sp.png." alt="DESIGN TOMATO" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="300" height="150" />
                </picture>
                <div class="text-2xl s:text-3xl">
                    <h2 class="mb-3 text-4xl">デザイントマト</h2>
                    <p>Web・サービス開発</p>
                    <p>トータルブランディング</p>
                    <p>グラフィックデザイン</p>
                    <p>DTPデザイン</p>
                    <p>etc...</p>
                </div>
            </div>
            <div class="w-full s:mb-8">
                <div class="ml:px-8">
                    <picture>
                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator-sp.webp" media="(max-width: 599px)" type="image/webp" />
                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator-sp.png" media="(max-width: 599px)" />
                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator.webp" type="image/webp" />
                        <img class="lazyload w-auto max-h-[55px] ml:mt-4 mb-4 object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-creator.png" alt="制作クリエイター" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="200" height="80" />
                    </picture>
                </div>
                <picture>
                    <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.webp" type="image/webp" />
                    <img class="lazyload mb-4 object-cover rounded-full" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/bisyojo_chan.jpg" width="150px" height="150px" alt="美少女ちゃん" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                </picture>
                <div class="mb-2 text-2xl s:text-3xl">
                    <p>テツカ ヒロキ</p>
                    <p>Design Tomato代表<br>Webプログラマー</p>
                </div>
                <div class="text-center">
                    <?php get_template_part('./parts/sns-link'); ?>
                </div>
            </div>
            <div class="w-full">
                <div class="ml:px-8">
                    <picture>
                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-cat-tag-sp.webp" type="image/webp" />
                        <img class="lazyload w-auto max-h-[55px] ml:mt-4 mb-4 object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-cat-tag-sp.png" alt="デモカテゴリー＆タグ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="200" height="80" />
                    </picture>
                </div>

                <?php
                    $args = array(
                        'show_option_none' => ("カテゴリーを選択"),
                        'class' => 'c-dropdown',
                    );
                    wp_dropdown_categories($args);
                ?>
                <script type="module">let dropdown=document.getElementById("cat");dropdown.addEventListener("change", function(){if(dropdown.options[dropdown.selectedIndex].value>0){location.href="<?php echo esc_url(home_url('/')); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;}});</script>
                <?php
                    $tags = get_tags();
                    if ( $tags ):
                ?>
                <select name="tags" id="tags" class="c-dropdown !mb-8">
                    <option value="" selected="selected">タグを選択</option>
                    <?php foreach ( $tags as $tag ): ?>
                        <option value="<?php echo esc_html( $tag->slug ); ?>">
                            <?php echo esc_html( $tag->name ); ?>
                            (<?php echo $tag->count; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
                <script type="module">let dropdown=document.getElementById("tags");dropdown.addEventListener("change", function(){if(dropdown.options[dropdown.selectedIndex].index>0){location.href="<?php echo esc_url(home_url('/')); ?>/tag/"+dropdown.options[dropdown.selectedIndex].value;}});</script>

                <?php endif; ?>

                <a href="https://px.a8.net/svt/ejp?a8mat=3N6GM5+ETGESY+2QQG+6L9O1" class="text-center" rel="nofollow">
                    <img class="lazyload w-4/5 h-auto object-cover" alt="BASE" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/af-BASE.jpg" width="250" height="50" />
                </a>

                <p class="my-4 s:text-3xl">ECショップの制作も！</p>

                <a href="https://designtomato.official.ec/" class="c-button m-auto mb-16 bg-main">DESIGN TOMATO<br>SHOP</a>

            </div>
            <div class="w-full">
                <div class="ml:px-8">
                    <picture>
                        <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-sitemap-sp.webp" type="image/webp" />
                        <img class="lazyload w-auto max-h-[55px] ml:mt-4 mb-4 object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-sitemap-sp.png" alt="サイトマップ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="200" height="80" />
                    </picture>
                </div>

                <div class="c-sitemap mx-4 p-8 rounded-25 bg-main text-left">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185V64c0-17.7-14.3-32-32-32H448c-17.7 0-32 14.3-32 32v36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32v69.7c-.1 .9-.1 1.8-.1 2.8V472c0 22.1 17.9 40 40 40h16c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2H160h24c22.1 0 40-17.9 40-40V448 384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v64 24c0 22.1 17.9 40 40 40h24 32.5c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1h16c22.1 0 40-17.9 40-40V455.8c.3-2.6 .5-5.3 .5-8.1l-.7-160.2h32z"/></svg> ホーム</a></li>
                        <li><a href="<?php echo home_url(); ?>/plan/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M112.1 454.3c0 6.297 1.816 12.44 5.284 17.69l17.14 25.69c5.25 7.875 17.17 14.28 26.64 14.28h61.67c9.438 0 21.36-6.401 26.61-14.28l17.08-25.68c2.938-4.438 5.348-12.37 5.348-17.7L272 415.1h-160L112.1 454.3zM192 0C90.02 .3203 16 82.97 16 175.1c0 44.38 16.44 84.84 43.56 115.8c16.53 18.84 42.34 58.23 52.22 91.45c.0313 .25 .0938 .5166 .125 .7823h160.2c.0313-.2656 .0938-.5166 .125-.7823c9.875-33.22 35.69-72.61 52.22-91.45C351.6 260.8 368 220.4 368 175.1C368 78.8 289.2 .0039 192 0zM288.4 260.1c-15.66 17.85-35.04 46.3-49.05 75.89h-94.61c-14.01-29.59-33.39-58.04-49.04-75.88C75.24 236.8 64 206.1 64 175.1C64 113.3 112.1 48.25 191.1 48C262.6 48 320 105.4 320 175.1C320 206.1 308.8 236.8 288.4 260.1zM176 80C131.9 80 96 115.9 96 160c0 8.844 7.156 16 16 16S128 168.8 128 160c0-26.47 21.53-48 48-48c8.844 0 16-7.148 16-15.99S184.8 80 176 80z"/></svg> ご案内プラン</a></li>
                        <li><a href="<?php echo home_url(); ?>/category/demo/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C87.5 32 35.1 48.6 9 59.9c-5.6 2.4-9 8-9 14V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V73.9c0-6.1-3.4-11.6-9-14C540.9 48.6 488.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z"/></svg> デモサイト</a></li>
                        <li><a href="<?php echo home_url(); ?>/news/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z"/></svg> お知らせ</a></li>
                        <li><a href="<?php echo home_url(); ?>/blog/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg> ブログ</a></li>
                        <li><a href="<?php echo home_url(); ?>/about/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg> 事業者情報</a></li>
                        <li><a href="<?php echo home_url(); ?>/check/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg> お問い合わせ</a></li>
                        <li class="!mb-0"><a href="<?php echo home_url(); ?>/privacy-policy/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M64 32C64 14.3 49.7 0 32 0S0 14.3 0 32V64 368 480c0 17.7 14.3 32 32 32s32-14.3 32-32V352l64.3-16.1c41.1-10.3 84.6-5.5 122.5 13.4c44.2 22.1 95.5 24.8 141.7 7.4l34.7-13c12.5-4.7 20.8-16.6 20.8-30V66.1c0-23-24.2-38-44.8-27.7l-9.6 4.8c-46.3 23.2-100.8 23.2-147.1 0c-35.1-17.6-75.4-22-113.5-12.5L64 48V32z"/></svg> プライバシーポリシー</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <div class="flex pb-8 bg-sub text-white">
        <small class="m-auto">&copy; 2020 DESIGN TOMATO.</small>
    </div>

</footer>