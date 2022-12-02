<nav class="c-nav">
    <ul>
        <li><a href="<?php echo home_url(); ?>">ホーム<span>-HOME-</span></a></li>
        <li><a href="<?php echo home_url(); ?>/plan/">ご案内プラン<span>-PLAN-</span></a></li>
        <li><a href="<?php echo home_url(); ?>/category/demo/">デモサイト<span>-DEMO-</span></a></li>
        <li><a href="<?php echo home_url(); ?>/news/">お知らせ<span>-NEWS-</span></a></li>
        <li><a href="<?php echo home_url(); ?>/blog/">ブログ<span>-BLOG-</span></a></li>
        <li><a href="https://designtomato.official.ec/">ショップ<span>-SHOP-</span></a></li>
        <li><a href="<?php echo home_url(); ?>/about/">事業者情報<span>-ABOUT-</span></a></li>
        <li><a href="<?php echo home_url(); ?>/check/">お問い合わせ<span>-CONTACT-</span></a></li>
    </ul>
    <?php if ( !wp_is_mobile() ) :?>
    <button class="js-searchform-button-open"><svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" stroke="white" fill="white" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg></button>
    <?php endif; ?>
</nav>
