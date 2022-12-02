<style>@keyframes a{0%{transform:rotate(0)}100%{transform:rotate(1turn)}}.splide{background:#F76;}.splide__track--draggable{-webkit-touch-callout:none;-webkit-user-select:none;-ms-user-select:none;user-select:none}.splide__track--fade>.splide__list>.splide__slide{margin:0!important;opacity:0;z-index:0}.splide__track--fade>.splide__list>.splide__slide.is-active{opacity:1;z-index:1}.splide--rtl{direction:rtl}.splide__track--ttb>.splide__list{display:block}.splide__container{box-sizing:border-box;position:relative}.splide__list{backface-visibility:hidden;display:-ms-flexbox;display:flex;height:100%;margin:0!important;padding:0!important}.splide.is-initialized:not(.is-active) .splide__list{display:block}.splide__progress__bar{width:0}.splide{position:relative;visibility:hidden}.splide.is-initialized,.splide.is-rendered{visibility:visible}.splide__slide{backface-visibility:hidden;box-sizing:border-box;-ms-flex-negative:0;flex-shrink:0;list-style-type:none!important;margin:0;position:relative}.splide__slide a,.splide__slide img{height:100%;width:100%}.splide__slide img{object-fit:cover}.splide__spinner{animation:a 1s linear infinite;border:2px solid #999;border-left-color:transparent;border-radius:50%;bottom:0;contain:strict;display:inline-block;height:20px;left:0;margin:auto;position:absolute;right:0;top:0;width:20px}.splide__sr{clip:rect(0 0 0 0);border:0;height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.splide__toggle.is-active .splide__toggle__play,.splide__toggle__pause{display:none}.splide__toggle.is-active .splide__toggle__pause{display:inline}.splide__track{overflow:hidden;position:relative;z-index:0}.splide__pagination{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:center;justify-content:center;margin:0;pointer-events:none}.splide__pagination li{display:flex;line-height:1;list-style-type:none;margin:0;pointer-events:auto}.splide__pagination__page{background:#ccc;border:0;border-radius:50%;display:inline-block;height:8px;margin:3px;opacity:.7;padding:0;position:relative;transition:transform .2s linear;width:8px}.splide__pagination__page.is-active{background:#fff;transform:scale(1.4);z-index:1}.splide__pagination__page:hover{cursor:pointer;opacity:.9;transform:scale(1.2)}.splide.is-focus-in .splide__pagination__page:focus,.splide__pagination__page:focus-visible{outline:3px solid #0bf;outline-offset:3px}.splide__slide{overflow:hidden}.splide__slide a img{transition:.3s}.splide__slide a img:hover{filter:brightness(1.1);transform:scale(1.05)}</style>
<div id="mainSlider" class="splide">
    <div class="splide__track">
        <ul class="splide__list">

            <?php
                if ( is_mobile() ) {
                    $cat_posts = get_posts(array(
                        'post_type' => 'post',
                        'category_name' => 'pro, standard',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));    
                } else {
                    $cat_posts = get_posts(array(
                        'post_type' => 'post',
                        'category_name' => 'pro, standard',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));    
                }
                global $post;
                if ( $cat_posts ) : foreach ( $cat_posts as $post ) : setup_postdata( $post );
            ?>

            <li class="splide__slide">
                <a href="<?php echo get_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" width="300" height="200"/>
                </a>
            </li>

            <?php endforeach; endif; wp_reset_postdata(); ?>

        </ul>
    </div>
    <ul class="splide__pagination pt-4"></ul>
</div><!-- #mainSlider -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide.js" type="module" async></script>
