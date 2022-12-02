<div id="js-scroller" class="p-scroller" style="position:fixed;z-index:3;right:25px;bottom:25px;width:50px;height:50px;cursor:pointer;transition:.3s">
    <img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.png" alt="ページトップへ" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="50" height="50" />
</div>
<style>.p-scroller{visibility:hidden;opacity:0}.p-scroller.active{visibility:visible;opacity:1}</style>
<script type="module" async>let s=document.getElementById("js-scroller");const ac=()=>{if(pageYOffset>100){s.classList.add("active");}else{s.classList.remove("active");};};addEventListener("scroll",ac);s.addEventListener("click",function(){window.scroll({top:0,behavior:'smooth'});})</script>