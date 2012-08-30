<?php

    function StPeteGreensTheme_init() {
        $priority = 10;
        elgg_extend_view('css/elgg', 'StPeteGreensTheme/css',$priority);
    }
 
    elgg_register_event_handler('init', 'system', 'StPeteGreensTheme_init');
    
?>
