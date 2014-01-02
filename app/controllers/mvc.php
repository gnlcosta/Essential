<?php
// title
$title_page = 'Essential';

// js aggiuntivo (se necessario)
//$custom_js = '**.js';

// css aggiuntivo (se necessario)
//$custom_css = '**.css';

class Mvc extends AppController {
    public $components = array('Menu');
    
    function EsBefore() {
        // setup menu, left and right
        TemplVar('menu_left', $this->Menu->Left());
        TemplVar('menu_left_active', -1);
        TemplVar('menu_right', $this->Menu->Right());
        TemplVar('menu_right_active', -1);
    }
    
	function Intro() {
        TemplVar('menu_left_active', 0);
        TemplVar('sidebar', 'sidebar');
    }
}
