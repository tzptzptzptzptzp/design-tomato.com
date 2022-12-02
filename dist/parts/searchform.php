<div id="js-search" class="p-searchform flex fixed top-0 left-0 z-10 invisible w-full h-full opacity-0 bg-black/25 duration-300">
    <div class="p-searchform__inner m-auto p-4 rounded-lg bg-white">
        <form class="c-form flex justify-center w-full h-12" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input class="w-full h-full p-1" type="text" name="s" id="s" value="<?php the_search_query(); ?>">
            <button class="flex w-16 h-full px-2 bg-font" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" stroke="white" fill="white" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg>
            </button>
        </form>        
    </div>
    <div class="absolute centering-x bottom-[30%] text-center">
        <button id="js-searchform-button-close" class="p-searchform__button-close relative w-16 h-16 rounded-full bg-white/25 cursor-pointer"><span></span><span></span></button>
    </div>
</div>
