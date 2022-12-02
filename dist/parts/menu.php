<div id="js-menu" class="p-menu fixed top-0 z-10 w-full h-full duration-800">
    <div class="p-menu__inner flex flex-col justify-between h-full p-8 bg-main text-white">
        <div>
            <p class="mb-8 text-5xl text-center">-MENU-</p>
            <?php get_template_part('./parts/header-content'); ?>
        </div>
        <div class="mb-12 text-center">
            <button id="js-menu-button-close" class="p-menu__button-close relative w-12 h-12"><span></span></button>
        </div>
    </div>
    <div class="l-container">
        <?php get_template_part('./parts/ink'); ?>
    </div><!-- INK AREA -->
</div>
