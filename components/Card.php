<?php
class Card {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function render() {
        return "<div class='card'>
                    <h3>{$this->title}</h3>
                    <p>{$this->content}</p>
                </div>";
    }
}