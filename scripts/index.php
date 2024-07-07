<?php
header('Content-Type: application/javascript');
?>
import { fetchData } from './fetchData.php';
import { populateCard1 } from './populateCards.php';
import { handleModal, populateModal } from './handleModal.php';
import { statProp } from './updateStats.php';

const card1Content = document.getElementById('content1');
const card3Content = document.getElementById('content3');
const statbar = document.getElementById('statbar');
const stock = document.getElementById('key1');
const invValue = document.getElementById('key2');
const requestUrl = "http://localhost:8080/items";

const modal = document.getElementById('modal');
const modalBody = document.getElementById('modal-body');
const closeModal = document.getElementsByClassName('close')[0];

document.addEventListener('DOMContentLoaded', async function() {
    try {
        const data = await fetchData(requestUrl);
        console.log(data); 
        populateCard1(data, card1Content);
        statProp(data, stock, invValue);
        populateModal(data, modalBody);
        handleModal(card1Content, modal, modalBody, closeModal);
    } catch (error) {
        console.error('Error:', error.message);
    }

    var cards = document.querySelectorAll('.card');
    statbar.classList.add('loaded');

    cards.forEach(function(card, index) {
        setTimeout(function() {
            card.classList.add('loaded');
        }, 300 * index + 250);
    });
});