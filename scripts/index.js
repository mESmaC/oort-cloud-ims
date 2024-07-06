const card1Content = document.getElementById('content1');
const card3Content = document.getElementById('content3');
const statbar = document.getElementById('statbar');
const stock = document.getElementById('key1');
const invValue = document.getElementById('key2');
const requestUrl = "http://localhost:8080/items";

fetch(requestUrl)
    .then(response => {
        if (!response.ok) {
            if (response.status === 404) {
                throw new Error('Data not found');
            } else if (response.status === 500) {
                throw new Error('Server Error');
            } else {
                throw new Error('Network Request was not OK');
            }
        }
        return response.json();
    })
    .then(data => {
        // data is an array of items
        console.log(data); // Log the entire data array
        populateCard1(data);
        statProp(data);
    })
    .catch(error => {
        console.error('Error:', error.message);
    });

const populateCard1 = (data) => {
    card1Content.innerHTML = ''; // Clear any existing content
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
            <p>${item.id}</p>
        `;
        card1Content.appendChild(itemDiv);
    });
};

const statProp = (data) => {
    console.log('Raw data:', JSON.stringify(data, null, 2));
    
    const totalValue = data.reduce((acc, item) => {
        console.log('Item:', item);
        console.log('Count:', item.count, 'Price:', item.price);
        const itemValue = item.count * item.price;
        console.log('Item value:', itemValue);
        return acc + itemValue;
    }, 0);
    
    console.log('Total value:', totalValue);
    
    const totalItems = data.length;

    stock.innerHTML = `Stock: ${totalItems}`;
    invValue.innerHTML = `Stock Value: $${totalValue.toFixed(2)}`;
};

document.addEventListener('DOMContentLoaded', function() {
    var cards = document.querySelectorAll('.card');
    var statbar = document.getElementById('statbar');
    
    statbar.classList.add('loaded');

    cards.forEach(function(card, index) {
        setTimeout(function() {
            card.classList.add('loaded');
        }, 300 * index + 250);
    });
});