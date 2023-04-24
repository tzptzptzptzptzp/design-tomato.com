<?php
if (is_page("contact")){
    $page = "contact";
    $alt = "お問い合わせ";
} elseif (is_page("check")) {
    $page = "check";
    $alt = "お問い合わせの前に";
} elseif (is_page("estimate")) {
    $page = "estimate";
    $alt = "お見積もり";
} elseif (is_page("profile")) {
    $page = "profile";
    $alt = "プロフィール";
} elseif (is_page("pravacy-policy")) {
    $page = "pravacy-policy";
    $alt = "プライバシーポリシー";
} elseif (is_page("tomato")) {
    $page = "tomato";
    $alt = "デザイントマトとサイトの仕様";
} elseif (is_page("price")) {
    $page = "price";
    $alt = "プラン料金と内容について";
} elseif (is_page("flow")) {
    $page = "flow";
    $alt = "ホームページ制作の流れ";
} elseif (is_page("responsive")) {
    $page = "responsive";
    $alt = "スマホサイトも料金コミコミ";
} elseif (is_page("question")) {
    $page = "question";
    $alt = "よくあるご質問";
} elseif (is_page("request")) {
    $page = "request";
    $alt = "ご依頼の前に";
} else if (is_page("contract")){
    $page = "contract";
    $alt = "各種ご契約の手順";
} else if (is_page("domain")){
    $page = "domain";
    $alt = "ドメインの取得";
} else if (is_page("ssl")){
    $page = "ssl";
    $alt = "サイトのSSL設定";
} elseif (is_page("wordpress")) {
    $page = "wordpress";
    $alt = "Wordpressのインストール";
};
?>

<div class="c-headline ml:mt-[-3rem] m-auto mb-[6.5rem] s:mb-5">
    <h1>
        <picture>
            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-<?php echo $page ?>-sp.webp" media="(max-width: 599px)" type="image/webp" />
            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-<?php echo $page ?>-sp.png" media="(max-width: 599px)" />
            <source data-srcset="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-<?php echo $page ?>.webp" type="image/webp" />
            <img class="lazyload ml:max-h-[170px] s:max-h-[78px] object-cover" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/headline/headline-<?php echo $page ?>.png" alt="<?php echo $alt ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="750" height="200" />
        </picture>
    </h1>
</div>