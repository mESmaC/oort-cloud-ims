<?php
header('Content-Type: application/javascript');
?>
const formatDate = (dateStr) => {
    const date = new Date(dateStr);
    const mm = String(date.getMonth() + 1).padStart(2, '0');
    const dd = String(date.getDate()).padStart(2, '0');
    const yyyy = date.getFullYear();
    return `${mm}-${dd}-${yyyy}`;
};

export const populateCard1 = (data, card1Content) => {
    card1Content.innerHTML = ''; 
    data.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('item-card');
        itemDiv.innerHTML = `
            <div class="item-header">
                <span>${item.name}</span>
                <span>$${item.price.toFixed(2)}</span>
            </div>
            <div class="item-subheader">
                <span>${item.group}</span>
                <span>${item.count} items</span>
            </div>
            <span>${formatDate(item.dateexp)}</span>
            <p>${item.id}</p>
        `;
        card1Content.appendChild(itemDiv);
    });
};