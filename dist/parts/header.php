<header class="l-header">
    <div class="l-header__inner">
        <div class="p-header">
            <div class="p-header__search">
                <button class="js-searchform-button-open p-searchform__button-open"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" stroke="white" fill="white" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg></button>
            </div>
            <a href="<?php echo home_url(); ?>">
                <h1>
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-header-logo.webp" type="image/webp" />
                        <img class="p-header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-header-logo.png." alt="DESIGN TOMATO" width="130" height="51" />
                    </picture>
                </h1>
            </a>
            <div class="p-header__menu">
                <button class="js-menu-button-open p-menu__button-open"><span class="centering-y"></span></button>
            </div>
            <?php if ( !wp_is_mobile() ) :?>
                <?php get_template_part('./parts/header-content'); ?>
            <?php endif; ?>
        </div>
    </div><!-- .l-header__inner -->
    <div class="l-header__ink">
        <?php get_template_part('./parts/header-ink'); ?>
    </div>
</header>
