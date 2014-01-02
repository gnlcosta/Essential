<?php

class Menu {
    function Left() {
        return array(array('help' => 'Essential Manual', 'link' => RootApp().'mvc/intro', 'title' => 'Manual'),
                array('help' => 'Menù left', 'link' => RootApp().'main/example', 'title' => 'Example')
                );
    }
    
    function Right() {
        return array(array('help' => 'Credits', 'link' => RootApp().'main/credits', 'title' => 'Credits'));
    }
}
