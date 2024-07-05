const card3Content = document.getElementById('content3');

document.addEventListener('DOMContentLoaded', function() {
    var cards = document.querySelectorAll('.card');
    cards.forEach(function(card, index) {
        setTimeout(function() {
            card.classList.add('loaded');
        }, 300 * index);
    });
});