<!-- stylesheet Development -->
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="0">
<?php
    if (is_home()) {
        $page = "index";
    } elseif (is_single()) {
        $page = "single";
    } elseif ( is_page("plan") ) {
        $page = "page-plan";
    } elseif (is_page()) {
        $page = "page";
    } elseif (is_archive() || is_search() || is_404()) {
        $page = "archive";
    };
?>
<link rel="stylesheet" href="http://localhost:8888/design-tomato/wp-content/themes/design-tomato/src/css/<?php echo $page ?>.min.css">
