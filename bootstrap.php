<?php

if (COCKPIT_ADMIN && !COCKPIT_REST) {
    $app->on("app.layout.header", function() use($app) {
        echo $app->assets(['slugify:assets/slug.min.js']);
    });
}

?>