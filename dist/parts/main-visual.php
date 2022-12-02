<div class="p-main-visual">
    <div class="p-main-visual__inner">
        <div class="p-main-visual__background">
            <video class="p-main-visual__video" playsinline autoplay loop muted data-src-pc="<?php echo get_template_directory_uri(); ?>/assets/videos/tomato.mp4" data-src-sp="<?php echo get_template_directory_uri(); ?>/assets/videos/tomato_sp.mp4" data-poster-pc="<?php echo get_template_directory_uri(); ?>/assets/videos/poster.jpg" data-poster-sp="<?php echo get_template_directory_uri(); ?>/assets/videos/poster_sp.jpg" width="1920" height="1080"></video>
        </div>
        <div class="p-main-visual__content">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-logo-title-fr-sp.webp" media="(max-width: 599px)" type="image/webp"/>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-logo-title-fr-sp.png" media="(max-width: 599px)"/>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-logo-title-fr.webp" type="image/webp"/>
                <img class="p-main-visual__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/tmt-logo-title-fr.png" width="800" height="300" alt="デザイントマト"/>
            </picture>
            <div class="p-main-visual__text">
                <h2>低価格で実現する高品質なWebサイト</h2>
                <h3>サーバーの契約から<br class="sp_only">サイト公開後のアフターフォローまで<br>徹底したサポートを<br class="sp_only">圧倒的'低価格'で実現します。</h3>
            </div>
        </div>
    </div>
</div><!-- .p-main-visual -->
<script type="module" defer>let m=document.querySelector(".p-main-visual__video");let b=document.querySelector(".p-infomation-bar").clientHeight;let l=document.querySelector(".splide").clientHeight;m.style.height=(window.innerHeight-(l/2)-b)+"px";</script>
<script type="module" async>let c=window.innerHeight<window.innerWidth||959<=window.innerWidth;let v=document.querySelector(".p-main-visual__video");let s=null;let p=null;if(c){s=v.dataset.srcPc;p=v.dataset.posterPc}else{s=v.dataset.srcSp;p=v.dataset.posterSp};addEventListener("DOMContentLoaded",function(){v.poster=p});addEventListener("load",function(){v.src=s})</script>
