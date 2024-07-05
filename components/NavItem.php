<?php
class NavItem {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render() {
        return "<div class='navItem'>
                    <h3>{$this->title}</h3>
                </div>";
    }
}