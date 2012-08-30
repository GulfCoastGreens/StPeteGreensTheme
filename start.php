<?php

    function StPeteGreensTheme_init() {
        elgg_extend_view('css/elgg', 'StPeteGreensTheme/css');
    }
 
    elgg_register_event_handler('init', 'system', 'StPeteGreensTheme_init');
    
?>
