<?php
header('Content-Type: application/javascript');
?>
export const statProp = (data, stock, invValue) => {
    console.log('Raw data:', JSON.stringify(data, null, 2));
    
    const totalValue = data.reduce((acc, item) => {
        const itemValue = item.count * item.price;
        return acc + itemValue;
    }, 0);
    
    const totalItems = data.length;

    stock.innerHTML = `<strong>Stock: </strong> ${totalItems}`;
    invValue.innerHTML = `<strong>Stock Value:  </strong>$${totalValue.toFixed(2)}`;
};