<?php

require_once 'NavItem.php';

class Nav {
    private $navItems = [];

    public function addNavItem($title) {
        $this->navItems[] = new NavItem($title);
    }

    public function render() {
        $navHtml = '';
        foreach ($this->navItems as $navItem) {
            $navHtml .= $navItem->render();
        }

        return 
        "<div class='navBar'>
            $navHtml
        </div>";
    }
}