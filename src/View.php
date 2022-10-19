<?php

namespace App;

class View {
    function render_view( $template ) {
        $template = $template . '.view';
        $content = file_get_contents( VIEW_FOLDER . $template );
        echo $content;
    }
}