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
                            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-privacy-policy-sp.webp" media="(max-width: 599px)" type="image/webp" />
                            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-privacy-policy-sp.png" media="(max-width: 599px)" />
                            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-privacy-policy.webp" type="image/webp" />
                            <img class="lazyload object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-privacy-policy.png" alt="プライバシーポリシー" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="750" height="200" />
                        </picture>
                    </h1>
                </div>

                <article class="l-article flex ml:mb-24 ml:mx-8 s:mb-6">
                    <div class="p-content relative w-full max-w-1200 m-auto ml:p-28 s:p-4">

                        <div class="p-content__head flex items-center justify-center">
                            <div class="text-center" style="width:100%;border-bottom:1px solid rgba(0,0,0,.3)">
                                <p style="margin-bottom:0;font-size:5rem;line-height:8.3rem">Privacy Policy</p>
                                <p style="line-height:0">プライバシーポリシー</p>
                                <p class="text-left">DesignTomato（以下、「サイト」という。）は，ユーザーの個人情報について以下のとおりプライバシーポリシー（以下、「本ポリシー」という。）を定めます。本ポリシーは、当サイトがどのような個人情報を取得し、どのように利用・共有するか、利用者がどのようにご自身の個人情報を管理できるかをご説明するものです。</p>
                            </div>
                        </div>

                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>１．事業者情報</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p><a href="<?php echo home_url(); ?>/about/" style="border-bottom:2px solid var(--font-color)">こちら</a>をご確認ください。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>２．個人情報の取得</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>当サイトは、お仕事をご依頼いただく際に、企業名や氏名・住所・電話番号・メールアドレス・クレジットカード番号など個人や企業を特定できる情報を取得させていただきます。お問い合わせフォーム・コメントの送信時には、氏名・電話番号・メールアドレスを取得させていただきます。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>３．個人情報の利用目的</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <ul>
                                    <li>取得した閲覧・購買履歴等の情報を分析し、Web制作事業において利用者に適した新商品・サービスをお知らせするために利用します</li>
                                    <li>利用者が利用しているサービスの新機能や更新情報、キャンペーン情報などをメール送付によりご案内するため</li>
                                    <li>利用者が利用しているサービスのメンテナンスなど、必要に応じたご連絡をするため</li>
                                    <li>利用者からのお問い合わせに回答するため</li>
                                    <li>利用規約に違反した悪質な業者の特定、その他不正不当な目的でサービスを利用したユーザーの特定をし、ご利用をお断りするため</li>
                                </ul>
                                <p>個人情報の利用目的は、変更前後の関連性について合理性が認められる場合に限って変更するものとします。</p>
                                <p>個人情報の利用目的について変更を行った際は、変更後の目的について当社所定の方法によって利用者に通知し、加えてWebサイト上にも公表するものとします。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>４．個人データの第三者提供について</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>当サイトは以下の場合を除き、同意を得ないで第三者に個人情報を提供することは致しません。</p>
                                <ul>
                                    <li>法令に基づく場合</li>
                                    <li>人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき</li>
                                    <li>公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき</li>
                                    <li>国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</li>
                                    <li>次に掲げる事項をあらかじめ本人に通知または公表し、かつ当サイトが個人情報保護委員会に届出をしたとき</li>
                                </ul>
                                <ul class="cl-decimal">
                                    <li>第三者への提供を利用目的とすること</li>
                                    <li>第三者に提供される個人データの項目</li>
                                    <li>第三者への提供の方法</li>
                                    <li>本人の求めに応じて当該個人情報の第三者への提供を停止すること</li>
                                    <li>本人の求めを受け付ける方法</li>
                                </ul>
                                <p></p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>５．匿名加工情報に関する取扱い</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>当サイトは、匿名加工情報（特定の個人を識別できないよう加工した個人情報であって、復元ができないようにしたもの）を作成する場合、以下の対応を行います。</p>
                                <ul>
                                    <li>法令で定める基準に従い適正な加工を施す</li>
                                    <li>法令で定める基準に従い安全管理措置を講じる</li>
                                    <li>匿名加工情報に含まれる個人に関する情報の項目を公表する</li>
                                    <li>作成元となった個人情報の本人を識別するため、他の情報と照合すること</li>
                                </ul>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>６．個人情報取扱いに関する相談や苦情の連絡先</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>当サイトの個人情報の取扱いに関するご質問やご不明点、苦情、その他のお問い合わせはお問い合わせフォームよりご連絡ください。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>７．SSL（Secure Socket Layer）について</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>当サイトはSSLに対応しており、WebブラウザとWebサーバーとの通信を暗号化しています。ユーザーが入力する氏名や住所、電話番号などの個人情報は自動的に暗号化されます。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>８．cookieについて</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>cookieとは、WebサーバーからWebブラウザに送信されるデータのことです。Webサーバーがcookieを参照することでユーザーのパソコンを識別でき、効率的に当サイトを利用することができます。当サイトがcookieとして送るファイルは、個人を特定するような情報を含んでおりません。</p>
                                <p>お使いのWebブラウザの設定により、cookieを無効にすることも可能です。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>９．免責事項</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <ul>
                                    <li>当サイトに掲載されている情報の正確さには万全を期していますが、利用者が当サイトの情報を用いて行う一切の行為に関して、当サイトは一切の責任を負わないものとします</li>
                                    <li>利用者が当サイトを利用したことにより生じた利用者の損害及び利用者が第三者に与えた損害に関して、一切の責任を負わないものとします</li>
                                </ul>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>10．著作権・肖像権</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>当サイト内の文章や画像、すべてのコンテンツは著作権・肖像権等により保護されており、無断での使用や転用は禁止されています。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>11．リンク</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>当サイトへのリンクは、自由に設置していただいて構いません。ただし、Webサイトの内容等によってはリンク設置をお断りすることがあります。</p>
                            </div>
                        </div>
                        <div class="custom-columns">
                            <div class="custom-title">
                                <div>
                                    <p>12．プライバシーポリシーの制定日及び改定日</p>
                                </div>
                            </div>
                            <div class="custom-ex">
                                <p>制定：令和２年１月１日</p>
                            </div>
                        </div>
                        <style>.p-content .custom-columns * {margin:0}.custom-columns{display:flex;width:100%;padding:5rem 0}.custom-columns:not(:last-of-type){border-bottom:1px solid rgba(0,0,0,.3)}.custom-title{display:flex;width:25%}.custom-title p{padding-left:7px;border-left:3px solid var(--font-color)}.custom-ex{width:75%;padding-left:1em}.custom-ex li{margin:0 0 1rem 1.25em!important;list-style:disc outside}.cl-decimal li{margin-left:1.5em;list-style:decimal outside}.custom-ex p:not(:last-child){margin-bottom:3rem;}.custom-ex .flex p:first-child{width:25%;margin-bottom:2rem!important;text-align:center}@media screen and (max-width:599px){.custom-columns{flex-direction:column;}.custom-title{width:100%;margin-bottom:2rem!important;text-align:center}.custom-title div, .custom-ex{width:100%;padding:0;}.custom-title p{border:none}.custom-ex .flex p{width:100%!important;text-align: center}}</style>

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