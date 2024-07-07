<?php
require_once 'Card.php';

class CardBox {
    private $cards = [];

    public function addCard($title, $content) {
        $this->cards[] = new Card($title, $content);
    }

    public function render () {
        $cardHtml = '';
        foreach ($this->cards as $card) {
            $cardHtml .= $card->render();
        }
        return 
        "<div class='cardBox'>
            $cardHtml   
        </div>";
    }
}