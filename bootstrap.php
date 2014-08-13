<?php
if(COCKPIT_ADMIN && !COCKPIT_REST) {

    $app->on("admin.init", function() use($app){
        $app->renderView("slugify:views/head.php");
    });

}
?>