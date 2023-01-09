<!DOCTYPE html>
<html lang="ja">
<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#F76" />

    <?php wp_head(); ?>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.png" sizes="192x192" type="image/png" />
    <!-- SmartphoneIcon -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png" />
    <!-- WindowsTile -->
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/msapplication-tileimage.png" />
    <meta name="msapplication-TileColor" content="#6EA"/>

    <!-- FontsPreload -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/firstView.woff2" as="font" type="font/woff2" crossorigin>

    <!-- stylesheet Production -->
    <style id="reset">*,:after,:before{box-sizing:border-box;border-style:solid;border-width:0}html{line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{margin:0}main{display:block}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit;margin:0}address,blockquote,dl,figure,form,iframe,ol,p,pre,table,ul{margin:0}ol,ul{padding:0;list-style:none}dt{font-weight:700}dd{margin-left:0}hr{box-sizing:content-box;height:0;overflow:visible;border-top-width:1px;margin:0;clear:both;color:inherit}pre{font-family:monospace;font-size:inherit}address{font-style:inherit}a{background-color:transparent;text-decoration:none;color:inherit}abbr[title]{-webkit-text-decoration:underline dotted;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace;font-size:inherit}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}embed,iframe,img,object,svg{vertical-align:bottom}button,input,optgroup,select,textarea{-webkit-appearance:none;-moz-appearance:none;appearance:none;vertical-align:middle;color:inherit;font:inherit;background:transparent;padding:0;margin:0;border-radius:0;text-align:inherit;text-transform:inherit}[type=button],[type=reset],[type=submit],button{cursor:pointer}[type=button]:disabled,[type=reset]:disabled,[type=submit]:disabled,button:disabled{cursor:default}:-moz-focusring{outline:auto}select:disabled{opacity:inherit}fieldset,option{padding:0}fieldset{margin:0;min-width:0}legend{padding:0}progress{vertical-align:baseline}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}[type=number]{-moz-appearance:textfield}label[for]{cursor:pointer}details{display:block}summary{display:list-item}[contenteditable]:focus{outline:auto}table{border-color:inherit;border-collapse:collapse}caption{text-align:left}td,th{vertical-align:top;padding:0}th{text-align:left;font-weight:700}</style>
    <style id="firstView">@keyframes l-wave {0%{transform:translateY(110%)}100%{transform:translateY(0%)}}@keyframes l-ink {0%{top:0%}100%{top:-150%}}.a-l-wave{animation:l-wave 1s both;}.lazyload,.lazyloading{opacity:0;}.lazyloaded{opacity:1;transition:1.2s;}.p-loader{position:fixed;z-index:9999;width:100vw;height:100vh;background:#F76;pointer-events:none;transition:.25s}.p-loader.loaded{animation:l-ink 1s .5s both;}.p-loader__inner{position:relative;width:100%;height:100%;transition:1s}.p-loader__zone{display:flex;position:relative;width:100%;height:100%;background:#6EA}.p-loader__icon{position:absolute;top:50%;left:50%;z-index:1;transform:translate(-50%,-50%)}.l-fix-header,.l-header{width:100%}.l-fix-header__inner,.l-header__inner{display:flex;align-items:center;background:#6ea;color:#fff}.l-header__ink{width:100%}.l-fix-header{position:fixed;top:0;z-index:5;transform:translateY(-100%);opacity:0;max-height:10rem;transition:.5s}.l-fix-header.active{transform:none;opacity:1}.l-fix-header__wave{width:100%}.l-fix-header .waves{transform:rotate(180deg);height:35px;pointer-events:none}.p-header{display:flex;align-items:center;justify-content:space-between;width:100%;max-width:75pc;margin:auto;padding:.5rem 1rem}.p-header__menu,.p-header__search{width:3rem;height:3rem}.p-header__logo{width:13rem;height:auto;-o-object-fit:cover;object-fit:cover}.p-menu__button-close span,.p-menu__button-close span:after,.p-menu__button-close span:before,.p-menu__button-open span,.p-menu__button-open span:after,.p-menu__button-open span:before{position:absolute;left:0;width:100%;height:3.5px;border-radius:2px;background-color:#fff;transition:.3s}.p-menu__button-close.active span,.p-menu__button-open.active span{transform:rotate(45deg)}.p-menu__button-close.active span:after,.p-menu__button-close.active span:before,.p-menu__button-open.active span:after,.p-menu__button-open.active span:before{top:auto;bottom:auto;transform:rotate(-90deg)}.p-menu__button-open{position:relative;width:100%;height:100%}.p-menu__button-open span:before{top:-9.5px;content:""}.p-menu__button-open span:after{bottom:-9.5px;content:""}.p-menu__button-close span:after,.p-menu__button-close span:before{content:""}.c-nav{align-items:center}.c-nav,.c-nav ul{display:flex}.c-nav li{position:relative;height:100%;margin:0 .8rem}.c-nav span{font-size:1rem}@media screen and (min-width:600px){.l-fix-header .waves{height:30px}.p-header__menu,.p-header__search{display:none}.c-nav ul{text-align:center}.c-nav li:after{position:absolute;bottom:-40%;left:50%;transform:translateX(-50%);width:0;height:0;border-radius:99px;background:#fff;content:"";transition:.2s}.c-nav li:hover:after{width:7px;height:7px}.c-nav a{display:grid;gap:2px}.c-nav button{width:1.3em;height:1.3em;margin-left:.75rem}}@media screen and (max-width:599px){.l-fix-header .waves{height:22px}.c-nav ul{flex-direction:column;font-size:2.7rem;line-height:1.5}.c-nav a{display:flex;align-items:center}.c-nav span{margin-left:.5rem;font-size:1.5rem}}.p-main-visual{overflow:hidden;font-family:"first","Helvetica Neue","Helvetica","Hiragino Sans","Hiragino Kaku Gothic ProN","Arial","Yu Gothic","Meiryo",sans-serif;font-weight:900}.p-main-visual__inner,.p-main-visual__background{position:relative;height:100%}.p-main-visual__image{display:block;width:100vw;height:65vh;-o-object-fit:cover;object-fit:cover;filter:contrast(110%) saturate(125%) brightness(92%)}.p-main-visual__content{display:flex;flex-direction:column;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);filter:drop-shadow(5px 5px 0 rgba(0,0,0,0.5))}.p-main-visual__logo{width:100vw;height:100%;margin-bottom:1.25rem;-o-object-fit:cover;object-fit:cover}.p-main-visual__text{color:#F76;text-align:center;line-height:1.5;text-shadow:var(--user-white) 2px 0,var(--user-white) -2px 0,var(--user-white) 0 -2px,var(--user-white) 0 2px,var(--user-white) 2px 2px,var(--user-white) -2px 2px,var(--user-white) 2px -2px,var(--user-white) -2px -2px,var(--user-white) 1px 2px,var(--user-white) -1px 2px,var(--user-white) 1px -2px,var(--user-white) -1px -2px,var(--user-white) 2px 1px,var(--user-white) -2px 1px,var(--user-white) 2px -1px,var(--user-white) -2px -1px}.p-main-visual__text h2{margin-bottom:.75rem}.p-main-visual__text h3{line-height:1.25}@media screen and (min-width:600px){.p-main-visual__content{width:60%}.p-main-visual__text h2{font-size:3rem;line-height:1}.p-main-visual__text h3{font-size:2.25rem}}@media screen and (max-width:599px){.p-main-visual__content{width:95%}.p-main-visual__text h2{font-size:1.9rem}.p-main-visual__text h3{font-size:1.8rem}}@font-face {font-family: "first";font-display: swap;src: url(<?php echo get_template_directory_uri(); ?>/assets/fonts/firstView.woff2) format("woff2");}.p-infomation-bar{position:relative;padding:1rem 0;background:#f76;color:#fff;font-family:"first","Helvetica Neue","Helvetica","Hiragino Sans","Hiragino Kaku Gothic ProN","Arial","Yu Gothic","Meiryo",sans-serif;font-weight:900}.p-infomation-bar__inner{display:flex;align-items:center;justify-content:center}.p-infomation-bar__inner p{z-index:1;cursor:default}.p-infomation-bar:before{display:block;position:absolute;top:0;left:0;z-index:0;opacity:.5;width:100%;height:100%;background-image:repeating-linear-gradient(-45deg,tomato 0 6px,transparent 6px 12px);content:"";pointer-events:none}.p-infomation-bar__button{z-index:1;transform:translateY(-1px);padding:.5rem 1.25rem;background:#6ea;border-radius:25px;box-shadow:0 3px 3px 0 rgba(0,0,0,.2);font-size:1.25rem;line-height:1.75rem;transition:.5s}.p-infomation-bar__button:hover{transform:translateY(1px);box-shadow:none}@media screen and (min-width:600px){.p-infomation-bar__button{margin-left:1.25rem}.sp_only{display:none}}@media screen and (max-width:599px){.p-infomation-bar__inner{flex-direction:column;text-align:center}.p-infomation-bar__inner p{margin-bottom:.35rem;line-height:1.1}}</style>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/utility.min.css" as="style">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/utility.min.css" media="print" onload="this.media='all'">
    <?php
        if ( is_home() ) {
            $page = "index";
        } elseif ( is_single() ) {
            $page = "single";
        } elseif ( is_page("plan") ) {
            $page = "page-plan";
        } elseif ( is_page() ) {
            $page = "page";
        } elseif ( is_archive() || is_search() || is_404() ) {
            $page = "archive";
        };
    ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/<?php echo $page ?>.min.css" as="style">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/<?php echo $page ?>.min.css" media="print" onload="this.media='all'">

    <?php if ( is_single() || is_page() ) : ?>
        <style id="liquid-speech-balloon" type="text/css">.liquid-speech-balloon-wrap{margin-bottom:2rem;flex-direction:row;display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;display:flex}.liquid-speech-balloon-text{position:relative;z-index:1;border-radius:5px;padding:20px 30px;width:100%;margin-left:20px;background-color:var(--main-color);border:1px solid rgba(0,0,0,.2);color:white;box-sizing:border-box}.liquid-speech-balloon-text p,.liquid-speech-balloon-text .wp-block-liquid-speech-balloon{margin:0;padding:0}.liquid-speech-balloon-text p a{color:inherit;text-decoration:underline}.liquid-speech-balloon-arrow{position:absolute;z-index:2;content:'.';line-height:1;width:0;height:0;top:25px;left:-11px;color:transparent}.liquid-speech-balloon-wrap:not(.liquid-speech-balloon-vertical) .liquid-speech-balloon-arrow{border-top:7px solid transparent;border-bottom:7px solid transparent;border-right:10px solid rgba(0,0,0,.2)}.liquid-speech-balloon-avatar{position:relative;width:64px;height:64px;line-height:1;flex-shrink:0;background-image:url(../images/avatar.png);background-position:left top;background-repeat:no-repeat;-webkit-background-size:100% auto;-moz-background-size:100% auto;-ms-background-size:100% auto;-o-background-size:100% auto;background-size:100% auto}.liquid-speech-balloon-avatar::after{position:absolute;content:'';display:block;width:110%;left:-5%;top:69px;font-size:12px;text-align:center;font-weight:700;letter-spacing:-.3px}.liquid-speech-balloon-bubble .liquid-speech-balloon-arrow{display:none}.liquid-speech-balloon-bubble .liquid-speech-balloon-text::before{content:'.';color:transparent;position:absolute;display:block;border-radius:50%;border:inherit;background-color:inherit;left:-15px;width:15px;height:15px;top:20px}.liquid-speech-balloon-bubble .liquid-speech-balloon-text::after{content:'.';color:transparent;position:absolute;display:block;border-radius:50%;border:inherit;background-color:inherit;left:-20px;top:10px;width:10px;height:10px}.liquid-speech-balloon-right{flex-direction:row-reverse}.liquid-speech-balloon-right .liquid-speech-balloon-text{margin-left:0;margin-right:20px}.liquid-speech-balloon-wrap.liquid-speech-balloon-right .liquid-speech-balloon-arrow{left:auto;right:-18px;border-right:7px solid transparent;border-left:10px solid rgba(0,0,0,.2)}.liquid-speech-balloon-right.liquid-speech-balloon-bubble .liquid-speech-balloon-text::before{left:auto;right:-15px}.liquid-speech-balloon-right.liquid-speech-balloon-bubble .liquid-speech-balloon-text::after{left:auto;right:-20px}.liquid-speech-balloon-square .liquid-speech-balloon-text{border-radius:0;border:2px solid rgba(0,0,0,.2)}.liquid-speech-balloon-dashed .liquid-speech-balloon-text{border:2px dashed rgba(0,0,0,.2)}.liquid-speech-balloon-shadow .liquid-speech-balloon-text{border-radius:0;box-shadow:3px 3px 0 1px rgba(0,0,0,.1)}.liquid-speech-balloon-borderless .liquid-speech-balloon-text{border:0 none;padding:10px 5px}.liquid-speech-balloon-borderless .liquid-speech-balloon-text .liquid-speech-balloon-arrow{display:none}.liquid-speech-balloon-small .liquid-speech-balloon-text,.liquid-speech-balloon-small .liquid-speech-balloon-text p{font-size:13px;padding:10px 15px}.liquid-speech-balloon-small .liquid-speech-balloon-avatar{width:32px;height:32px}.liquid-speech-balloon-small .liquid-speech-balloon-arrow{top:7px}.liquid-speech-balloon-small .liquid-speech-balloon-avatar::after{display:none}.liquid-speech-balloon-large .liquid-speech-balloon-text,.liquid-speech-balloon-large .liquid-speech-balloon-text p{font-size:36px}.liquid-speech-balloon-short .liquid-speech-balloon-text{width:auto}.liquid-speech-balloon-vertical{flex-direction:column-reverse}.liquid-speech-balloon-vertical .liquid-speech-balloon-text{margin:0 0 1rem 0}.liquid-speech-balloon-wrap.liquid-speech-balloon-vertical .liquid-speech-balloon-arrow{top:auto;bottom:-11px;left:11px;border-top:10px solid rgba(0,0,0,.2);border-left:7px solid transparent;border-right:7px solid transparent}.liquid-speech-balloon-vertical .liquid-speech-balloon-text::before{left:15px;top:auto;bottom:-15px}.liquid-speech-balloon-vertical .liquid-speech-balloon-text::after{left:20px;top:auto;bottom:-22px}.liquid-speech-balloon-vertical.liquid-speech-balloon-right .liquid-speech-balloon-avatar{margin-left:auto;margin-right:0}.liquid-speech-balloon-vertical.liquid-speech-balloon-right .liquid-speech-balloon-arrow{left:auto;right:11px}.liquid-speech-balloon-vertical-reverse{flex-direction:column}.liquid-speech-balloon-vertical-reverse .liquid-speech-balloon-text{margin:2.5rem 0 0 0}.liquid-speech-balloon-wrap.liquid-speech-balloon-vertical-reverse .liquid-speech-balloon-arrow{top:-18px;left:11px;border-bottom:10px solid rgba(0,0,0,.2);border-left:7px solid transparent;border-right:7px solid transparent}.liquid-speech-balloon-vertical-reverse .liquid-speech-balloon-text::before{left:15px;top:auto;bottom:-15px}.liquid-speech-balloon-vertical-reverse .liquid-speech-balloon-text::after{left:20px;top:auto;bottom:-22px}.liquid-speech-balloon-vertical-reverse.liquid-speech-balloon-right .liquid-speech-balloon-avatar{margin-left:auto;margin-right:0}.liquid-speech-balloon-vertical-reverse.liquid-speech-balloon-right .liquid-speech-balloon-arrow{left:auto;right:11px}.liquid-speech-balloon-vertical-reverse.liquid-speech-balloon-bubble .liquid-speech-balloon-text::before{top:-15px;bottom:auto}.liquid-speech-balloon-vertical-reverse.liquid-speech-balloon-bubble .liquid-speech-balloon-text::after{top:-22px;bottom:auto}</style>
        <style id="pochipp" type="text/css">@-webkit-keyframes pchppFlash{20%{opacity:1}50%{opacity:0}80%{opacity:1}}@keyframes pchppFlash{20%{opacity:1}50%{opacity:0}80%{opacity:1}}.pochipp-box{position:relative;display:grid;grid-gap:0 24px;grid-template-areas:"areaImg areaBody" "areaBtns areaBtns";grid-template-rows:auto auto;grid-template-columns:100px 1fr;max-width:960px;padding:24px!important;font-size:16px;box-shadow:0 1px 8px -4px rgba(0,0,0,.2),0 0 0 1px rgba(0,0,0,.02)}[data-theme=dark] .pochipp-box{box-shadow:0 0 0 1px #eee}body:not(#__) .pochipp-box{margin:2rem auto 4rem}.pochipp-box .pochipp-box__logo{display:none;}.pochipp-box__image{grid-area:areaImg;margin:0;padding:0}.pochipp-box__image a{display:block;width:100%;text-decoration:none!important}.pochipp-box__image img{display:block;width:100%;height:auto;max-height:160px;-o-object-fit:contain;object-fit:contain}.pochipp-box__body{grid-area:areaBody;margin:0;padding:0}.pochipp-box__title{margin:0 0 8px;font-weight:700;line-height:1.6}.pochipp-box__title a{display:block;width:100%;color:inherit!important;text-decoration:none!important}.pochipp-box__info{margin:4px 0 0;font-size:12px;line-height:1.5;opacity:.75}.pochipp-box__price{margin:4px 0 0;font-size:13px;line-height:1.5}.pochipp-box__price span{font-size:10px;opacity:.75}.pochipp-box .pochipp-box__btns{position:relative;left:-4px;display:flex;flex-wrap:wrap;grid-area:areaBtns;align-items:flex-end;width:calc(100% + 8px);margin:12px 0 0;padding:0}.pochipp-box__btnwrap span{width:100%}.pochipp-box .pochipp-box__btnwrap{min-width:-webkit-max-content;min-width:-moz-max-content;min-width:max-content;padding:4px}.pochipp-box__btnwrap.-on-sale{order:-1}.pochipp-box .pochipp-box__btn{position:relative;display:flex;flex-direction:column;align-items:center;justify-content:center;margin:0!important;padding:12px;background-color:#333;color:#eee;font-size:1em;line-height:1;letter-spacing:.5px;text-align:center;text-decoration:none!important}[data-theme=dark] .pochipp-box .pochipp-box__btn{background-color: #222;}.pochipp-box .pochipp-box__btn:hover{opacity:.8}.pochipp-box .pochipp-box__btn img{position:absolute;display:block;width:1px;height:1px;visibility:hidden;opacity:0}.pochipp-box .pochipp-box__btn span{font-size:inherit;line-height:1}.pochipp-box .pochipp-box__saleInfo{font-size:12px;line-height:1;text-align:center}.pochipp-box__saleInfo.-top{margin-bottom:4px;font-weight:700}[data-sale-effect=flash] .pochipp-box__saleInfo{-webkit-animation:1.5s linear 0s infinite pchppFlash;animation:1.5s linear 0s infinite pchppFlash}.pochipp-box__btnwrap.-amazon .pochipp-box__saleInfo{color:var(--pchpp-color-amazon)}.pochipp-box__btnwrap.-rakuten .pochipp-box__saleInfo{color:var(--pchpp-color-rakuten)}.pochipp-box__btnwrap.-yahoo .pochipp-box__saleInfo{color:var(--pchpp-color-yahoo)}.pochipp-box__price[data-disp-price=off]{display:none}.pochipp-box[data-btn-radius=off]{border-radius:1px}.pochipp-box[data-btn-radius=off] .pochipp-box__btn,.pochipp-box[data-btn-radius=off] .pochipp-box__image img,.pochipp-box[data-btn-radius=off] .pochipp-box__saleInfo{border-radius:1px}.pochipp-box[data-btn-radius=on]{border-radius:4px}.pochipp-box[data-btn-radius=on] .pochipp-box__image img{border-radius:4px}.pochipp-box[data-btn-radius=on] .pochipp-box__btn,.pochipp-box[data-btn-radius=on] .pochipp-box__saleInfo{border-radius:40px}.pochipp-box[data-btn-style=dflt] .pochipp-box__btn{position:relative;overflow:hidden;box-shadow:0 1px 4px -1px rgba(0,0,0,.2)}.pochipp-box[data-btn-style=dflt] .-custom>.pochipp-box__btn{background:var(--pchpp-color-custom)}.pochipp-box[data-btn-style=dflt] .-custom_2>.pochipp-box__btn{background:var(--pchpp-color-custom-2)}.pochipp-box[data-btn-style=outline] .pochipp-box__btn{background:0 0!important;box-shadow:inset 0 0 0 1px currentColor,0 1px 4px -1px rgba(0,0,0,.2)}.pochipp-box[data-btn-style=outline] .-amazon>.pochipp-box__btn{color:var(--pchpp-color-amazon)}.pochipp-box[data-btn-style=outline] .-rakuten>.pochipp-box__btn{color:var(--pchpp-color-rakuten)}.pochipp-box[data-btn-style=outline] .-yahoo>.pochipp-box__btn{color:var(--pchpp-color-yahoo)}.pochipp-box[data-btn-style=outline] .-custom>.pochipp-box__btn{color:var(--pchpp-color-custom)}.pochipp-box[data-btn-style=outline] .-custom_2>.pochipp-box__btn{color:var(--pchpp-color-custom-2)}.pochipp-box[data-img="r"]{grid-template-areas:"areaBody areaImg" "areaBtns areaBtns";grid-template-columns:1fr 100px}.pochipp-inline__btnwrap{display:inline-flex;margin:.5em .5em}.pochipp-inline__btnwrap>.pochipp-inline__btn{display:inline-block;width:var(--pchpp-inline-width,auto);padding:.75em 1.5em;overflow:hidden;color:var(--pchpp-inline-txt-color,inherit);font-size:.9em;line-height:1.5;text-align:center;text-decoration:none!important;background-color:var(--pchpp-inline-bg-color,none);border-radius:var(--pchpp-inline-radius,0);box-shadow:var(--pchpp-inline-shadow,none)}.pochipp-inline__btnwrap>.pochipp-inline__btn:hover{opacity:.8}@media screen and (min-width:600px){.pochipp-box.is-vrtcl{display:block;max-width:400px}.pochipp-box.is-vrtcl .pochipp-box__btns .pochipp-box__btnwrap{flex-basis:100%;min-width:100%;max-width:100%}.pochipp-box.is-vrtcl .pochipp-box__image{margin-bottom:16px}.pochipp-box.is-vrtcl .pochipp-box__image img{width:40%;max-width:120px;margin:0 auto}}@media screen and (min-width:1000px){.pochipp-box[data-lyt-pc=dflt]{grid-template-areas:"areaImg areaBody" "areaImg areaBtns"}.pochipp-box[data-lyt-pc=dflt][data-img="r"]{grid-template-areas:"areaBody areaImg" "areaBtns areaImg"}.pochipp-box[data-lyt-pc=big]{grid-template-columns:120px 1fr}.pochipp-box[data-lyt-pc=big][data-img="r"]{grid-template-columns:1fr 120px}.pochipp-box[data-lyt-pc=big] .pochipp-box__btns{margin-top:20px}}@media screen and (min-width:1100px){[data-maxclmn-pc=fit]>.pochipp-box__btnwrap{flex:1;max-width:50%;font-size:15px}[data-maxclmn-pc="3"]>.pochipp-box__btnwrap{flex:0 0 33.3%;font-size:15px}[data-maxclmn-pc="2"]>.pochipp-box__btnwrap{flex-basis:50%;max-width:50%}}@media screen and (max-width:1099px){.pochipp-box__btnwrap{flex-basis:50%;min-width:50%!important;max-width:50%}}@media screen and (max-width:599px){.pochipp-box{grid-gap:0 16px;grid-template-columns:25% 1fr;width:88%;font-size:13px}.pochipp-box__price{font-size:12px}[data-maxclmn-mb="1"]>.pochipp-box__btnwrap{flex-basis:100%;max-width:100%;font-size:15px}[data-maxclmn-mb="2"]>.pochipp-box__btnwrap{font-size:13px}[data-maxclmn-mb="2"]>.pochipp-box__btnwrap.-on-sale{flex-basis:100%;max-width:100%}.pochipp-box .pochipp-box__btn{padding:12px 10px}[data-maxclmn-mb="2"]>.-long-text:not(.-on-sale) .pochipp-box__btn{font-size:12px;line-height:13px;letter-spacing:0;white-space:nowrap}.pochipp-box .pochipp-box__saleInfo{font-size:11px}.pochipp-box[data-img="r"]{grid-template-columns:1fr 25%}.pochipp-box[data-lyt-mb=vrtcl]{display:block;font-size:14px}.pochipp-box[data-lyt-mb=vrtcl] .pochipp-box__image{width:100%;margin-bottom:16px}.pochipp-box[data-lyt-mb=vrtcl] .pochipp-box__image img{width:40%;max-width:120px;margin:0 auto}.pochipp-box[data-lyt-mb=vrtcl] .pochipp-box__body{width:100%;padding:0}}@media screen and (max-width:360px){.pochipp-box{width:100%;padding:16px!important;font-size:14px}}</style>
        <style id="user-wp-style" type="text/css">.wp-block-columns{display:flex;margin-bottom:1.75em;box-sizing:border-box;flex-wrap:wrap!important;align-items:initial!important}@media(max-width:599px){.wp-block-columns{gap:2rem!important}}@media(min-width:600px){.wp-block-columns{flex-wrap:nowrap!important;gap:2rem}}.wp-block-columns.are-vertically-aligned-top{align-items:flex-start}.wp-block-columns.are-vertically-aligned-center{align-items:center}.wp-block-columns.are-vertically-aligned-bottom{align-items:flex-end}@media(max-width:599px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:100%!important}}@media(min-width:600px){.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis]{flex-grow:0}}.wp-block-columns.is-not-stacked-on-mobile{flex-wrap:nowrap!important}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column{flex-basis:0;flex-grow:1}.wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis]{flex-grow:0}:where(.wp-block-columns.has-background){padding:1.25em 2.375em}.wp-block-column{flex-grow:1;min-width:0;word-break:break-word;overflow-wrap:break-word}.wp-block-column.is-vertically-aligned-top{align-self:flex-start}.wp-block-column.is-vertically-aligned-center{align-self:center}.wp-block-column.is-vertically-aligned-bottom{align-self:flex-end}.wp-block-column.is-vertically-aligned-bottom,.wp-block-column.is-vertically-aligned-center,.wp-block-column.is-vertically-aligned-top{width:100%}.has-text-align-center{text-align:center}.has-small-font-size{font-size:.8em}.has-medium-font-size{font-size:1.5em}.has-large-font-size{font-size:2em}.has-x-large-font-size{font-size:2.5em}.wpwc-reading-time{font-size:1.25rem;line-height:1.75rem!important;text-align:center}.mb0{margin-bottom:0!important}.wp-block-spacer{margin-bottom:5rem;height:0!important;border-bottom:1px solid rgba(0,0,0,.3)}@media screen and (max-width: 599px){.wp-block-spacer{margin-bottom:3rem}}.is-content-justification-center{display:flex;justify-content:center}.wp-block-button__link{display:block;margin-bottom:2rem;background:#F76!important;box-shadow: 0 5px 0 0 #de5746;transition:.3s}.wp-block-button__link:hover{transform:translateY(5px);box-shadow:none}</style>
        <style id="user-liquid-speech-balloon" type="text/css">.wp-block-columns .liquid-speech-balloon-wrap,.liquid-speech-balloon-wrap *{margin-bottom:0!important}.liquid-speech-balloon-avatar{border-radius:9999px}.liquid-speech-balloon-avatar::after{content:''!important}.liquid-speech-balloon-text{width:auto;border:none}.liquid-speech-balloon-arrow{left:-9px!important;border-right:10px solid var(--main-color)!important}.liquid-speech-balloon-right .liquid-speech-balloon-arrow{right:-9px!important;left:auto!important;border-right:none!important;border-left:10px solid var(--main-color)!important}@media screen and (min-width:600px){.liquid-speech-balloon-vertical .liquid-speech-balloon-avatar{margin:1.5rem auto 0}.liquid-speech-balloon-text{padding:10px 20px}.liquid-speech-balloon-vertical .liquid-speech-balloon-arrow{bottom:-9px!important;left:50%!important;transform:translateX(-50%);border-top:10px solid #333!important;border-left:7px solid transparent!important;border-right:7px solid transparent!important}}@media screen and (max-width:599px){.liquid-speech-balloon-vertical{flex-direction:row}.liquid-speech-balloon-vertical .liquid-speech-balloon-avatar{margin-right:1.5rem}.liquid-speech-balloon-text{padding:5px 10px}.liquid-speech-balloon-vertical .liquid-speech-balloon-arrow{top:32px!important;bottom:auto;left:-16px!important;transform:translateY(-50%);border-top:7px solid transparent!important;border-right:10px solid var(--main-color)!important;border-bottom:7px solid transparent!important}}</style>
        <?php if ( is_mobile() ) : ?>
            <style id="user-table-of-contents-sp" type="text/css">#toc_container{width:calc(100% - 2em);margin:0 0 4rem auto;}#toc_container a{display:block;transition:opacity .2s;}#toc_container a:hover{opacity:.5;}.toc_title{text-align:center;margin-bottom:1rem;}.toc_list *{margin-bottom:1rem!important;}.toc_list>li{list-style:decimal;margin-bottom:1em;}.toc_list>li>ul{list-style:"・";padding-left:1em;}</style>
        <?php else : ?>
            <style id="user-table-of-contents-pc" type="text/css">#toc_container{width:85%;margin:0 auto 4rem;}#toc_container a{display:block;transition:opacity .2s;}#toc_container a:hover{opacity:.5;}.toc_title{text-align:center;margin-bottom:1rem;}.toc_list *{margin-bottom:1rem!important;}.toc_list>li{list-style:decimal;margin-bottom:1em;}.toc_list>li>ul{list-style:"・";padding-left:1em;}</style>
        <?php endif; ?>
    <?php endif; ?>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lazysizes.js"></script>

</head>